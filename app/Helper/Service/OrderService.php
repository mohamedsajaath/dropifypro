<?php
namespace App\Helper\Service;

use App\Helper\Handler\EbayHandler;
use App\Helper\Mapper\Order\OrderApiToModel;
use App\Helper\Service\OrderCustomerService;
use App\Helper\Service\OrderItemService;
use App\Helper\Utility\DateTimeUtility;
use App\Models\EbayAccount;
use App\Models\Order;

class OrderService{
    public static function processOrders(EbayAccount $ebay_account)
    {
        //catch credential
        $accessToken = $ebay_account->access_token;
        // get now date
        $currentDate = DateTimeUtility::getCurrentDate();
        // get previous date
        $previousDate = DateTimeUtility::getPreviousDateTime_fromPassedTime(2, $currentDate);
        // call EbayHandler::getOrders(credential, start date, end date) and catch collection of order object
        $orderCollections = EbayHandler::getOrders($accessToken,$currentDate,$previousDate);
        // loop each order object
        foreach ($orderCollections as $order) {
            // CALL save withContect
            self::saveWithContent($order);
        }
          
    }

    public static function saveWithContent(Order $order)
    {
        $orders = Order::join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.*', 'users.name as uname')
            ->where('orders.user_id', '=', $id)
            ->get();
        return $orders;
    }

    public static function getOrderItemsById($id)
    {
        $order_items = Order::join('order_items', 'orders.id', '=', 'order_items.order_id')
            ->join('order_customers', 'orders.id', '=', 'order_customers.order_id')
            ->join('order_item_product_variants', 'order_items.id', '=', 'order_item_product_variants.order_item_id')
            ->join('product_variants', 'product_variants.id', '=', 'order_item_product_variants.product_variant_id')
            ->join('products', 'product_variants.product_id', '=', 'products.id')
            ->select('orders.*', 'order_items.*', 'order_customers.name as cname', 'products.*', 'product_variants.*')
            ->where('order_items.order_id', '=', $id)
            ->get();
        return $order_items;
    }

    public static function getOrderById($id)
    {
        $orders = Order::join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.*', 'users.name as fname')
            ->where('orders.user_id', '=', $id)
            ->get();
        return $orders;
    }
}
