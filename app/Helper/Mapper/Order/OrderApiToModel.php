<?php

namespace App\Helper\Mapper\Order;

use App\Models\Order;
use App\Models\OrderCustomer;
use App\Models\OrderItem;

class OrderApiToModel
{
    private $apiOrder;
    public function __construct($api_order)
    {
        $this->apiOrder = $api_order;
    }

    public function getOrder()
    {
        $order = new Order();
        $order->user_id = $this->apiOrder->user_id;-
        $order->status = $this->apiOrder['OrderStatus'];
        $order->total_amount = $this->apiOrder['Total'];
        $order->orderItems = $this->getOrderItems();
        $order->total_quantity = $this->getTotalQuantity($order->orderItems);
        $order->customer = $this->getCustomer();
        return $order;
    }


    public function getOrderItems()
    {
        $result = [];
        $transactions = $this->apiOrder['TransactionArray']['Transaction'];
        if (isset($transactions[0])) {
            foreach ($transactions as $transaction) {
                $quantity = $this->getOrderItems($transaction);
                if (!is_null($quantity)) {
                    $result[] = $this->getOrderItem($transaction);
                }
            }
        } else {
            $result[] = $this->getOrderItem($transactions);
        }
        return collect($result);
    }

    private  function getOrderItem()
    {
        $orderItem = new OrderItem();
        $orderItem->title = $this->apiOrder['Item']['Title'];
        $orderItem->ebay_item_id = $this->apiOrder['Item']['ItemID'];
        $orderItem->amount = $this->apiOrder['TransactionPrice'];
        $orderItem->sku = $this->apiOrder['Item']['sku'];
        $orderItem->quantity = $this->apiOrder['QuantityPurchased'];
        return $orderItem;
    }

    private function getTotalQuantity($order_items)
    {
        $count = 0;
        foreach ($order_items as $order_item) {
            $count = $count + $order_item->quantity;
        }
        return $count;
    }


    public function getCustomerDetails()
    {
        $result = [];
        $shippingCustomerDetail = $this->apiOrder['ShippingAddress'];
        $result[] = $this->getCustomer($shippingCustomerDetail);
        return collect($result);
    }

    private  function getCustomer()
    {
        $shippingCustomerDetail=$this->apiOrder->ShippingAddress;
        $orderCustomer = new OrderCustomer();
        $orderCustomer->name = $shippingCustomerDetail['Name'];
        $orderCustomer->email = $this->getCustomerEmail();
        $orderCustomer->address = $shippingCustomerDetail['Street1'];
        $orderCustomer->city = $shippingCustomerDetail['CityName'];
        $orderCustomer->province = $shippingCustomerDetail['StateOrProvince'];
        $orderCustomer->country_code = $shippingCustomerDetail['Country'];
        $orderCustomer->zipcode = $shippingCustomerDetail['PostalCode'];
        $orderCustomer->phone_no = $shippingCustomerDetail['Phone'];
        return $orderCustomer;
    }

    private function getCustomerEmail()
    {
        $orderItems = $this->api_order['TransactionArray']['Transaction'];
        if (isset($orderItems[0]))
            foreach ($orderItems as $orderItem) {
                $buyer = $orderItem['Buyer'];
                break;
            }
        else
            $buyer = $orderItems['Buyer'];

        $email = $buyer['Email'];
        if ($email == 'Invalid Request')
            $email = $buyer['StaticAlias'] ?? "";
        return $email;
    }
}
