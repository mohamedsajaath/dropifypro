<?php

namespace App\Client\Ebay;

use App\Handlers\ProcessHitCounter;
use App\Utilities\DateTimeUtility;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Spatie\ArrayToXml\ArrayToXml;

class EbayClient
{
    private $accessToken ;
    private $siteId;

    public function __construct($accessToken = "", $siteId = 0)
    {
        $this->accessToken = $accessToken;
        $this->siteId = $siteId;
    }

    public  function getAllOrdersByDateRange($from_time, $end_time)
    {
        $createTimeFrom = DateTimeUtility::getFormattedTime($from_time, \DateTimeInterface::ATOM);
        $createTimeTo = DateTimeUtility::getFormattedTime($end_time, \DateTimeInterface::ATOM);

        return $this->getOrdersByPageNoAndDateRange($createTimeFrom, $createTimeTo);
    }

    public function getAllOrders($from_past_hours): array
    {
        $from_past_hours = '-' . $from_past_hours . ' hours';
        $createTimeFrom = (new \DateTime())->modify($from_past_hours)
            ->format(\DateTimeInterface::ATOM);
        $createTimeTo = (new \DateTime())->format(\DateTimeInterface::ATOM);

        return $this->getOrdersByPageNoAndDateRange($createTimeFrom, $createTimeTo);
    }

    public function getVariantItem($item_id, $variant_sku)
    {
        $request = [
            'ItemID' => $item_id,
            'IncludeItemSpecifics' => 'true',
            'DetailLevel' => 'ReturnAll',
            'VariationSKU' => $variant_sku
        ];

        return $this->sendRequest($request, 'GetItem');
    }

    public function getItem($item_id)
    {
        $request = [
            'ItemID' => $item_id,
            'IncludeItemSpecifics' => 'true',
            'DetailLevel' => 'ReturnAll',
        ];

        return $this->sendRequest($request, 'GetItem');
    }

    public function getAllActiveProducts(): array
    {
        $endTimeFrom = DateTimeUtility::getCurrentDateTimeWithAtomFormat();
        $endTimeTo = DateTimeUtility::getFutureMonthAtomFormatDateTime_fromCurrentTime(1);

        $productCollection = [];
        $pageNumber = 1;
        $hasMoreItems = 'false';
        do {
            $products = $this->getProductPerPage($pageNumber, $endTimeFrom, $endTimeTo);
            if (!empty(sizeof($products)) && $products['Ack'] == 'Success') {
                if(!isset($products['ItemArray']) || !isset($products['ItemArray']['Item'])) break;
                $productCollection = array_merge($this->getProductArr($products), $productCollection);
                $hasMoreItems = $products['HasMoreItems'];
                $pageNumber++;

            }
        } while ($hasMoreItems != 'false');

        return $productCollection;
    }

    private function getProductArr($products)
    {
        $productArr = [];
        if (array_keys($products['ItemArray']['Item']) !== range(0, count($products['ItemArray']['Item']) - 1)) {
            $productArr = [$products['ItemArray']['Item']];
        } else {
            $productArr = $products['ItemArray']['Item'];
        }
        return $productArr;
    }

    public function updateInventoryBySku($sku, $quantity)
    {
        $request = [
            'InventoryStatus' => [
                'SKU' => $sku,
                'Quantity' => $quantity,
            ]
        ];

        return $this->sendRequest($request, 'ReviseInventoryStatus');
    }

    public function isValidCredentials()
    {
        $result = $this->sendRequest([], 'GetTokenStatus');
        return isset($result['TokenStatus']) && isset($result['TokenStatus']['Status']) && $result['TokenStatus']['Status'] == 'Active';
    }

    private function getOrdersByPageNoAndDateRange($create_time_from, $create_time_to)
    {
        $orderCollection = [];

        $pageNumber = 1;
        $response = $this->getOrdersPerPage($pageNumber, $create_time_from, $create_time_to);
        
        if ($response['Ack'] != 'Success')
            throw new \Exception('API error: ' . $response['Errors']['ShortMessage']);

        if (!isset($response['OrderArray']['Order']))
            return [];

        $orderCollection = array_merge($orderCollection, $this->getOrderArr($response));

        $hasMoreOrders = $response['HasMoreOrders'];
        while ($hasMoreOrders == 'true') {
            $pageNumber++;
            $response = $this->getOrdersPerPage($pageNumber, $create_time_from, $create_time_to);
            $hasMoreOrders = $response['HasMoreOrders'];
            $orderCollection = array_merge($orderCollection, $this->getOrderArr($response));
        }
        return $orderCollection;
    }

    private function getOrderArr($response)
    {
        $orderArr = [];
        if (array_keys($response['OrderArray']['Order']) !== range(0, count($response['OrderArray']['Order']) - 1)) {
            $orderArr = [$response['OrderArray']['Order']];
        } else {
            $orderArr = $response['OrderArray']['Order'];
        }
        return $orderArr;
    }

    public function getOrderById($order_id)
    {
        $request = [
            'DetailLevel' => 'ReturnAll',
            'OrderIDArray' =>  [
                'OrderID' => $order_id,
            ]
        ];

        $response =  $this->sendRequest($request, 'GetOrders');
        return $response['OrderArray']['Order'] ?? [];
    }

    private function getOrdersPerPage($pageNumber, $createTimeFrom, $createTimeTo)
    {
        $request = [
            'CreateTimeFrom' => $createTimeFrom,
            'CreateTimeTo' => $createTimeTo,
            'DetailLevel' => 'ReturnAll',
            'OrderRole' => 'Seller',
//            'OrderStatus' => 'Completed',
            'OrderStatus' => 'All',
            'Pagination' => [
                'EntriesPerPage' => 100,
                'PageNumber' => $pageNumber
            ]
        ];

        return $this->sendRequest($request, 'GetOrders');
    }

    private function getProductPerPage($page_number, $end_time_from, $end_time_to)
    {
        $request = [
            'EndTimeFrom' => $end_time_from,
            'EndTimeTo' => $end_time_to,
            'IncludeVariations' => 'True',
            'Pagination' => [
                'EntriesPerPage' => 100,
                'PageNumber' => $page_number
            ],
            'DetailLevel' => 'ReturnAll'
        ];

        return $this->sendRequest($request, 'GetSellerList');
    }

    public function getCode()
    {
        //ToDo need changes (After admin page planned) get the keys from databases
        $payload = ['RuName' => config('creds.ebay.runame')];
        $response = $this->sendRequest($payload, 'GetSessionID');
    }

    public function getAuthURL()
    {
        $payload = ['RuName' => config('creds.ebay.runame')];
        $response = $this->sendRequest($payload, 'GetSessionID');
        $sessionId = $response['SessionID'];
        return "https://signin.ebay.com/ws/eBayISAPI.dll?SignIn&runame=" . config('creds.ebay.runame') . "&SessID=" . $sessionId;
    }

    private function constructXML($request, $callName)
    {
        $xml = ArrayToXml::convert($request, [
            'rootElementName' => $callName . 'Request',
            '_attributes' => [
                'xmlns' => 'urn:ebay:apis:eBLBaseComponents',
            ],
        ], true, 'UTF-8');

        return $xml;
    }

    public function sendRequest($request, $callName)
    {
        if (!empty($this->accessToken)) {
            $request['RequesterCredentials']['eBayAuthToken'] = $this->accessToken;
        }

        $xml = $this->constructXML($request, $callName);
        // ProcessHitCounter::getInstance()->incrementEbayHit();
        return $this->call($xml, $callName);
    }

    private function call($xml, $callName)
    {
        //ToDo: move the credentials to database and bring from handler
        $headers = [
            'X-EBAY-API-COMPATIBILITY-LEVEL' => '1179',
            'X-EBAY-API-DEV-NAME' => config('creds.ebay.dev_id'),
            'X-EBAY-API-APP-NAME' => config('creds.ebay.app_id'),
            'X-EBAY-API-CERT-NAME' => config('creds.ebay.cert_id'),
            'X-EBAY-API-SITEID' => $this->siteId,
            'X-EBAY-API-CALL-NAME' => $callName,
            'Content-Type' => 'application/xml'
        ];

        try {
            $response = Http::withHeaders($headers)->send('POST', 'https://api.ebay.com/ws/api.dll', ['body' => $xml]);
            //Testing purpose
            // $response = Http::withHeaders($headers)->send('POST', 'https://api.sandbox.ebay.com/ws/api.dll', ['body' => $xml]);
            if ($response->ok()) {
                $body = $response->body();
                return json_decode(json_encode(simplexml_load_string($body)), true);
            } else {
                throw new \Exception('API error');
            }
        } catch (\Exception $ex) {
            throw new \Exception('Connection error');
        }

    }
}
