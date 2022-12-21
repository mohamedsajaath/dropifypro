<?php

namespace App\Helper\Service;

use App\Models\Order;

class OrderService
{
    public static function getOrderById($id)
    {
        $orders = Order::join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.*', 'users.first_name as fname')
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
}
