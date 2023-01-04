<?php

namespace App\Helper\Service;

use App\Helper\Handler\EbayHandler;
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

    public static function listById($userId, $product_id,$product_price ='')
    {
        // dd($userId);
        //get product with its all dependencies
        $product = Product::findById($product_id);
        //  dd($product);
        $ebayAccounts = EbayAccountService::getByUserId($userId);
        //  dd($ebayAccounts);
            foreach ($ebayAccounts as $ebayAccount) {
                EbayHandler::listProduct($product,$ebayAccount->access_token);               
            }
    }
}
