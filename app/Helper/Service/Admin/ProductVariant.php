<?php

namespace App\Helper\Service\admin;

use App\Models;

class ProductVariant
{

    public static function create($product_id,$request){

        $productVariantId = Models\ProductVariant::query()->create([
            'product_id'=> $request->product_id,
            'quantity'=> $request->quantity,
            'sku'=> $request->variant_sku,
            'price'=>$request->variant_price

        ]);

    }

}
