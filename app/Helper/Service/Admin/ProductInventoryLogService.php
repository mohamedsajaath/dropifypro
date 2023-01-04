<?php

namespace App\Helper\Service\Admin;

use App\Models\ProductInventoryLog;

class ProductInventoryLogService
{

    public static function saveProductVariantlog($variationId,$variationQuantity){

        $productInventoryLogs = new ProductInventoryLog();
        $productInventoryLogs->product_variant_id = $variationId;
        $productInventoryLogs->current_quantity= $variationQuantity;
        $productInventoryLogs->save();


    }

}
