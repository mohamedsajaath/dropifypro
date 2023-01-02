<?php
namespace App\Helper\Service;

use App\Models\OrderItemProductVariant;

class OrderItemProductVariantService{
    public static function saveByOrderItemIdAndVariantId($order_item_id, $variant_id)
    {
        return OrderItemProductVariant::create([
            'order_item_id' => $order_item_id,
            'product_variant_id' => $variant_id
        ]);
    }
}