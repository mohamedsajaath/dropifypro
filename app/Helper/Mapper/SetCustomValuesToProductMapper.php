<?php

namespace App\Helper\Mapper;

use App\Helper\Service\ProductService;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductItemSpecification;
use App\Models\ProductVariant;

class SetCustomValuesToProductMapper
{
    public static function get($product_id, $price_margin){

            $product = ProductService::getById($product_id);
            foreach ($product->getVariants as $variant)
            {
                $variant->price = $variant->price * ((100+$price_margin)/100);
            }
            return $product;
    }

}
