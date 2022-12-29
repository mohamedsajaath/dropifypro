<?php

namespace App\Helper\Service;

use App\Helper\Mapper\InventoryLogMapper;
use App\Helper\Utility\DateTimeUtility;
use App\Models\ProductInventoryLog;
use App\Models\ProductVariant;

class ProductVariantService
{
    public static function saveOrUpdate(ProductVariant $variant, $user_id)
    {
        $previousQuantity = 0;
        if(isset($variant->id)){
            $productInventoryLog = ProductInventoryLogService::getLastEntryByVariantId($variant->id);
            if(!$productInventoryLog){
                $previousQuantity = $productInventoryLog->current_quantity;
            }
        }
        $variant->save();

        $productInventoryLog = InventoryLogMapper::getLogByValue($variant->id, $previousQuantity,
            $variant->quantity, $user_id);
        ProductInventoryLogService::save($productInventoryLog);
    }

    public static function getByEbayItemIdAndSku($ebay_item_id, $sku):ProductVariant{
        // fetch userProduct object(single) by ebayItemId
        // check if user product is not available for the ebay item return null,otherwise continue

        // catch `user product id`
        // fetch userProductVariant object(single) by  user product id, sku
        // check if user variant product is not available  return null,otherwise continue

        //catch variant id
        //fetch and return variant
     }
}
