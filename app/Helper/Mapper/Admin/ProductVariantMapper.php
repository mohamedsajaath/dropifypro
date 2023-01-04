<?php

namespace App\Helper\Mapper\Admin;

use App\Helper\Service\Admin\SpecificService;
use App\Helper\Service\Admin\VariantSpecificService;
use App\Helper\Service\Admin\VariantSpecificValueService;
use App\Helper\Utility\StoreFileUtility;
use App\Http\Controllers\Admin\VariantSpecificController;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\VariantSpecific;
use App\Models\VariantSpecificValue;

class ProductVariantMapper
{


    public static function get($requestArr)
    {

        $arr = [];

        $hasVariation = $requestArr['hasVariation'];
        if ($hasVariation != 1) {
            $productVariant = new ProductVariant();
            $productVariant->quantity = $requestArr['quantity'];
            $productVariant->sku = $requestArr['sku'];
            $productVariant->price = $requestArr['price'];
            $productVariant->rsp = $requestArr['rsp'];
            $arr[] = $productVariant;
        } else {
            foreach ($requestArr['variant-sku'] as $variant_index => $value) {
                $productVariant = new ProductVariant();
                $productVariant->quantity = $requestArr['variant-quantity'][$variant_index];
                $productVariant->sku = $value;
                $productVariant->price = $requestArr['variant-price'][$variant_index];
                $productVariant->rsp = $requestArr['variant-price'][$variant_index];
                $productVariant->variantSpecificNames = [];
                $productVariant->variantSpecificValues = [];
                $productVariant->variantImage = ProductVariantMapper::setVariantImage($requestArr['variant-image'][$variant_index]);

                foreach ($requestArr['variant_type'] as $specification_index => $specific) {

                    $productVariantSpecific = new VariantSpecific();
                    $productVariantSpecific->name = $specific;

                    $productVariant->variantSpecificNames[] = $productVariantSpecific;

                    $poductVariantSpecificValue = new VariantSpecificValue();
                    $poductVariantSpecificValue->value = $requestArr['variant_value'][$specification_index][$variant_index];
                    $productVariant->variantSpecificValues[] = $poductVariantSpecificValue;


                }



                $arr[] = $productVariant;
            }



        }
        return $arr;

    }

    private static function setVariantImage($image){
        $extension = StoreFileUtility::getFileExtension($image);
        $imageName = time(). rand(2,50) . "." . $extension;
        $storageName = StoreFileUtility::save($image, ProductImage::StoragePath, $imageName);

        $productImage = new ProductImage();
        $productImage->file_name = $image->getClientOriginalName();
        $productImage->storage_name = str_replace('public/', '', $storageName);;
        $productImage->reference = ProductImage::VARIANT_IMAGE;

        return $productImage;
    }
}
