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
}
