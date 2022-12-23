<?php

namespace App\Helper\Mapper\Product;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Request;

class RequestToProductMapper implements ProductMapper
{
    private $request;
    public function __construct($form_request)
    {
        $this->request = $form_request;
    }

    public function getProduct(): Product
    {
        $product = new Product();
        $product->title = $this->request->title;
        $product->description = $this->request->description;
        $product->categories = $this->request->categories;
        $product->sku = $this->request->sku;
        $product->weight = $this->request->weight;
        $product->price = $this->request->price;
        $product->image = $this->request->image;
        $product->variants = $this->getVariants();
        return $product;
    }

    public function getVariants():array
    {
        $requestVariants = $this->request->variant;
        $variantArr = [];
        foreach ($requestVariants as $requestVariant){
            $variant = new ProductVariant();
            $variant->quantity = $requestVariant['quantity'];
            $variant->sku = $requestVariant['sku'];
            $variant->price = $requestVariant['price'];
            $variantArr[] = $variant;
        }
        return $variantArr;
    }
}
