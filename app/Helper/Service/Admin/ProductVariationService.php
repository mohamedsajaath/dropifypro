<?php

namespace App\Helper\Service\Admin;

use App\Helper\Service\Admin as AdminServices;


class ProductVariationService
{

    public static function save($productId, $variations)
    {

        if(Count($variations) > 1){
            foreach ($variations as $variation){
                $variation->product_id = $productId;
                $variation->save();
                AdminServices\ProductImageService::save($variation->id,[$variation->variantImage]);
                foreach ($variation->variantSpecificNames as $index => $specific){
                    $specificId = AdminServices\VariantSpecificService::save($specific);
                    $specificValueId = AdminServices\VariantSpecificValueService::save($specificId,$variation->variantSpecificValues[$index]);
                    AdminServices\ProductVariantSpecificValueService::save($variation->id,$specificValueId);
                }
                AdminServices\ProductInventoryLogService::saveProductVariantlog($variation->id,$variation->quantity);

            }
        }else{
            $variations[0]->product_id = $productId;
            $variations[0]->save();
        }
    }
}
