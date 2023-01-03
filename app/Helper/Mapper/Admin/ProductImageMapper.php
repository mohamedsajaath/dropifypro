<?php

namespace App\Helper\Mapper\Admin;

use App\Helper\Utility\StoreFileUtility;
use App\Models\Product;
use App\Models\ProductImage;

class ProductImageMapper
{

    public static function get(array $requestArr)
    {

        $arr = [];

        foreach ($requestArr['images'] as $key => $value) {

            $extension = StoreFileUtility::getFileExtension($value);
            $imageName = time(). $key . "." . $extension;
            $storageName = StoreFileUtility::save($value, ProductImage::StoragePath, $imageName);

            $productImage = new ProductImage();
            $productImage->file_name = $value->getClientOriginalName();
            $productImage->storage_name = str_replace('public/', '', $storageName);
            $productImage->image_url = str_replace('public/', '', $storageName);
            $productImage->reference = ProductImage::PRODUCT_IMAGE;
            $arr[] = $productImage;

        }
        return $arr;
    }
}
