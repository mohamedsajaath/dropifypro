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

    public static function upload($userId, Product $product)
    {
        $ebayAccounts = EbayAccountService::getByUserId($userId);
        foreach ($ebayAccounts as $ebayAccount) {
            EbayHandler::listProduct($product, $ebayAccount->access_token);
        }
    }

    public static function getAllProducts()
    {
        $products = Product::join('product_variants', 'products.id', '=', 'product_variants.product_id')
            ->join('product_item_specifications', 'products.id', '=', 'product_item_specifications.product_id')
            ->join('product_images', 'products.id', '=', 'product_images.reference_id')
            ->select('products.*', 'product_variants.*', 'product_item_specifications.*', 'product_images.*');

        return $products;
    }

    public static function getById($id)
    {
        return Product::findById($id);
    }
}
