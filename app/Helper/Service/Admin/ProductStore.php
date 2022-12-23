<?php

namespace App\Helper\Service\admin;

use App\Models\Product;
use Mockery\Exception;

class ProductStore
{

    public static function productStore($request)
    {
        $productId = Product::query()->create([
            'name' => $request->name,
            'description' => $request->description,
            'sku' => $request->sku,
            'weight' => $request->weight
        ]);

        ProductVariant::create($productId->id,$request);

    }

}
