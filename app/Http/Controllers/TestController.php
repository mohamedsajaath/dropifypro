<?php

namespace App\Http\Controllers;

use App\Handlers\EbayHandler;
use App\Helper\Service\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function  index()
    {
        // $product = Product::findById(2);
        // foreach($product->getVariants as $variant)
        // {
        //     echo "variant id: " . $variant->id . "<br/>";
        //     dd($variant->getImages());
        // }
        $user_id = 3;
        $product_id =1;
        $productService = ProductService::listById($user_id,$product_id);
        return $productService;
    }
}
