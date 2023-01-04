<?php

namespace App\Helper\Mapper\Admin;

use App\Models\Product;
use App\Helper\Mapper\Admin\ProductVariantMapper;


class ProductMapper
{
    private $productRequest;

    public function __construct(array $request)
    {
        $this->productRequest = $request;
    }

    public function getProduct()
    {
        $requestArr = $this->productRequest;

        $product = new Product();


        $product->category_id = $requestArr['category_id'];
        $product->title = $requestArr['title'];
        $product->description = $requestArr['description'];
        $product->weight = $requestArr['weight'];
        $product->weight_unit = $requestArr['weight_unit'];

        if(isset($requestArr['specification_type'][0])) {
            $product->specifications = ProductSpecificationMapper::get($requestArr);
        }
        $this->setProductImage($product);
        $product->variations = ProductVariantMapper::get($requestArr);

        return $product;


    }


    private function setProductImage(Product &$product)
    {
        if (isset($this->productRequest['images'])) {
            $product->images = ProductImageMapper::get($this->productRequest);
        }
    }


}
