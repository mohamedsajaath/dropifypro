<?php

namespace App\Helper\Service;

use App\Models\Product;

class ProductService
{
    public static function getAllProducts()
    {
        $products = Product::join('product_variants', 'products.id', '=', 'product_variants.product_id')
            ->join('product_item_specifications', 'products.id', '=', 'product_item_specifications.product_id')
            ->join('product_images', 'products.id', '=', 'product_images.reference_id')
            ->select('products.*', 'product_variants.*', 'product_item_specifications.*', 'product_images.*');

        return $products;
    }
}
