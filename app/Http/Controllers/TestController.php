<?php

namespace App\Http\Controllers;

use App\Handlers\EbayHandler;
use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function  index()
    {
        $product = Product::findById(2);
        foreach($product->getVariants as $variant)
        {
            echo "variant id: " . $variant->id . "<br/>";
            dd($variant->getImages());
        }
    }
}
