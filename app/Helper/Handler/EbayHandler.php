<?php

namespace App\Helper\Handler;

use App\Client\Ebay\EbayClient;
use App\Helper\Mapper\Order\OrderApiToModel;
use App\Helper\Mapper\Product\ProductModelToApiPayloadMapper;
use App\Models\Product;
use Exception;

class EbayHandler
{
    public static function getOrders($access_token, $start_date, $end_date)
    {
        //'v^1.1#i^1#r^1#p^3#I^3#f^0#t^Ul4xMF83OjNDQTI4RjczQTk3RjE5RUZGOUJEOThBNTQ3QkIyQTFEXzJfMSNFXjI2MA=='
        // instantiate client : get orders by date range
        $ebay = new EbayClient($access_token, 0);
        // get all orders of ebay with in the date range
        $orders =  $ebay->getAllOrdersByDateRange($start_date, $end_date);
        // take an empty array: order_collection
        $orderCollections = [];
        // loop each orders
        foreach ($orders as $order) {
            // call mapper api order to model (OrderApitoModel -> getOrder())
            $mapper = new OrderApiToModel($order);
            $orderCollections[] = $mapper->getOrder();
            //    $order_collections[] = OrderApiToModel::getOrder();
            // and push order model to order_collection array
        }
        //return order collection
        return $orderCollections;
    }

    public static function listProduct(Product $product, $access_token)
    {
        // mapper model to api payload
        $ProductModelToApiPayload = new ProductModelToApiPayloadMapper($product);
        $payload =  $ProductModelToApiPayload->getPayload();
        //  dd($payload);
        // call client
        $ebay = new EbayClient($access_token, 0);
        $response = $ebay->listItem($payload);
         dd($response);
        if ($response['Ack'] == 'Failure') {
            foreach ($response['Errors'] as $key => $error) {
                $errorResult = array();
                $shortMsg = $response['Errors'][$key]['ShortMessage'];
                $longMsg = $response['Errors'][$key]['LongMessage'];
                $errorResult['ShortError'] = $shortMsg;
                $errorResult['LongError'] = $longMsg;
                $result[] = $errorResult;
            }
           
        }

    }
}
