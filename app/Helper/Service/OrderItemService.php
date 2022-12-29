<?php
namespace App\Helper\Service;

use App\Models\OrderItem;

class OrderItemService{
    public static function saveOrUpdate(OrderItem $order_item)
    {
       //save order item
       $order_item->save();
       //fetch product variant
       $variant = ProductVariantService::getByEbayItemIdAndSku($order_item->ebay_item_id, $order_item->sku);
       //call OrderItemProductVariantService::saveByOrderItemIdAndVariantId()
       OrderItemProductVariantService::saveByOrderItemIdAndVariantId($order_item->id, $variant->id);
    }
}

?>