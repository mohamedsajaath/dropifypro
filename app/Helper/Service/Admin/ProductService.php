<?php

namespace App\Helper\Service\Admin;

use App\Models\Product;
use App\Helper\Mapper\Admin\ProductMapper;

class ProductService
{

    public static function save(Product $product)
    {
        $product->save();

        return $product->id;
    }
}
