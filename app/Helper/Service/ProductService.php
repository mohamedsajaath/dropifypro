<?php

namespace App\Helper\Service;

use App\Models\Product;

class ProductService
{
    public static function save(Product $product, $user_id)
    {
        $product->save();
        foreach ($product->variants as $variant){
            $variant->product_id = $product->id;
            ProductVariantService::saveOrUpdate($variant, $user_id);
        }
    }

    public static function listById($product_id,$price)
    {
        //get product with its all dependencies
        Product::findById($product_id);
    }
}
