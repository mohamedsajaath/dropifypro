<?php

namespace App\Helper\Mapper\Product;

use App\Models\Product;

class ProductModelToApiPayloadMapper
{
    private $product;


    public function __construct(Product $product)
    {
        $this->product = $product;
    }


    public function getPayload()
    {
        return [
            'Item' => [
                'Title' => $this->product->name,
                'Description' => $this->product->description,
                'ShippingPackageDetails' => [
                    'WeightMajor' => [
                        '_attributes' => ['unit' => 'kg'],
                        'value' => $this->product->weight
                    ],
                ],
                'PictureDetails' => [
                    $this->setImageDetails(),
                ],
                'Quantity' => $this->product->quantity,
                'SKU' => $this->product->sku,
                'Variations' => [
                    $this->setVariantDetails(),
                ],
            ],
        ];
    }


    private function setImageDetails()
    {
        $imgArr = [];
        foreach ($this->product->getImages() as $image) {
            $imgArr[] = ['PictureURL' => $image->image_url];
        }
        return $imgArr;
    }



    private function setVariantDetails()
    {
        $variantArr = [];
        foreach ($this->product->getVariants as $Variant) {
            $variantArr[] = [
                'Pictures' => [
                    'VariationSpecificPictureSet' => [
                        $this->setImageDetails($Variant),
                    ],
                ],
                'Variation' => [
                    'Quantity' => $Variant->quantity,
                    'SKU' => $Variant->sku,
                    'StartPrice' => $Variant->price,
                ],
            ];
        }
        return $variantArr;
    }
}
