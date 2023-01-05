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
        $payload = [
            // 'Item' => [
            //     'Title' => $this->product->name,
            //     'Description' => $this->product->description,
            //     'Country'=>'GB',
            //     'Currency'=>'GBP',
            //     'StartPrice'=>'100.00',
            //     'ListingDuration'=>'Days_60',
            //     'ShippingPackageDetails' => [
            //         'WeightMajor' => [
            //             '_attributes' => ['unit' => $this->product->weight_unit],
            //             'value' => $this->product->weight
            //         ],
            //     ],
            //     'PictureDetails' => [
            //         $this->getProductImageDetails(),
            //     ],
            // ],
            'Item' =>
            [
                'Title' => $this->product->title,
                'Description' => $this->product->description,
                'PrimaryCategory' =>
                [
                    'CategoryID' => $this->product->category_id,
                ],
                'ConditionID' => '1000',
                'Country' => 'US',
                'Currency' => 'USD',
                'DispatchTimeMax' => '1',
                'ListingDuration' => 'GTC',
                'ListingType' => 'FixedPriceItem',
                'PictureDetails' =>
                [
                    $this->getProductImageDetails(),
                ],
                'PostalCode' => '95125',
                'ProductListingDetails' =>
                [
                    'UPC' => '885909298594',
                    'IncludeStockPhotoURL' => 'true',
                    'IncludeeBayProductDetails' => 'true',
                    'UseFirstProduct' => 'true',
                    'ReturnSearchResultOnDuplicates' => 'true',
                ],
                'ItemSpecifics' =>
                [
                    'NameValueList' =>
                    [

                        [
                            'Name' => 'Size',
                            'Value' => [
                                0 => 'Small',
                                // 1=>'Medium',
                                // 2=>'Large'
                            ],
                        ],
                        [
                            'Name' => 'SizeType',
                            'Value' => [
                                0 => 'UK',
                                // 1=>'Medium',
                                // 2=>'Large'
                            ],
                        ],
                        [
                            'Name' => 'Color',
                            'Value' => [
                                0 => 'Blue',
                                // 1=>'Medium',
                                // 2=>'Large'
                            ],
                        ],
                        [
                            'Name' => 'Inseam',
                            'Value' => [
                                0 => '26"',
                                // 1=>'Medium',
                                // 2=>'Large'
                            ],
                        ],
                        [
                            'Name' => 'Style',
                            'Value' => 'Latest',
                        ],
                        
                        [
                            'Name' => 'Type',
                            'Value' => 'Cotton',
                        ],

                        [
                            'Name' => 'Department',
                            'Value' => 'Clothing',
                        ],

                        [
                            'Name' => 'Brand',
                            'Value' => 'Polo',
                        ],

                    ],
                ],
                'Quantity' => '1',
                'ReturnPolicy' =>
                [
                    'ReturnsAcceptedOption' => 'ReturnsAccepted',
                    'RefundOption' => 'MoneyBack',
                    'ReturnsWithinOption' => 'Days_30',
                    'ShippingCostPaidByOption' => 'Buyer',
                ],
                'ShippingDetails' =>
                [
                    'ShippingType' => 'Flat',
                    'ShippingServiceOptions' =>
                    [
                        'ShippingServicePriority' => '1',
                        'ShippingService' => 'UPSGround',
                        'FreeShipping' => 'true',
                        'ShippingServiceAdditionalCost' =>
                        [
                            '@value' => '0.00',
                            '@attributes' =>
                            [
                                'currencyID' => 'USD',
                            ],
                        ],
                    ],
                ],
                'Site' => 'US',
            ],
        ];



        $productImageDetails = $this->getProductImageDetails();

        if (!empty($productImageDetails)) {
            $payload['Item']['PictureDetails'] = $productImageDetails;
        }

        if ($this->product->isVariantProduct()) {
            $payload['Item']['Variations']['Variation'] = $this->getVariantDetails();
        } else {
            $variant = $this->product->getVariants[0];
            $payload['Item']['Quantity'] = $variant->quantity;
            $payload['Item']['SKU'] = $variant->sku;
            $payload['Item']['StartPrice'] = number_format($variant->price, 2);
        }

        return $payload;
    }


    private function getProductImageDetails()
    {
        $imgArr = [];
        foreach ($this->product->getImages() as $image) {
            $imgArr[] = ['PictureURL' => $image->image_url];
        }
        return $imgArr;
    }

    private function getVariantImageDetails($variant)
    {
        $imgArr = [];
        foreach ($variant->getImages() as $image) {
            $imgArr[] = ['PictureURL' => $image->image_url];
        }
        return $imgArr;
    }

    private function getVariantDetails()
    {
        $pictures = [];
        $variants = [];
        foreach ($this->product->getVariants as $variant) {

            $variantImageDetails =  $this->getVariantImageDetails($variant);

            if (!empty($variantImageDetails)) {
                $pictures[] = [
                    'VariationSpecificPictureSet' => [
                        $variantImageDetails,
                    ],
                ];
            }


            $variants[] = [
                'Quantity' => $variant->quantity,
                'SKU' => $variant->sku,
                'StartPrice' => number_format($variant->price, 2),
            ];


            // $variantArr[] = [
            //     'Pictures' => [
            //         'VariationSpecificPictureSet' => [
            //             $this->getVariantImageDetails($Variant),
            //         ],
            //     ],
            //     'Variation' => [
            //         'Quantity' => $Variant->quantity,
            //         'SKU' => $Variant->sku,
            //         'StartPrice' => $Variant->price,
            //     ],
            // ];
        }
        return [
            'Pictures' => $pictures,
            'Variation' => $variants
        ];
    }
}
