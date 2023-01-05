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
                'Title' => 'Laptop',
                'Description' => 'Good',
                'PrimaryCategory' =>
                [
                    'CategoryID' => '177',
                ],
                'StartPrice' => '20.0',
                'ConditionID' => '1000',
                'Country' => 'US',
                'Currency' => 'USD',
                'DispatchTimeMax' => '1',
                'ListingDuration' => 'GTC',
                'ListingType' => 'FixedPriceItem',
                'PictureDetails' =>
                [
                    'PictureURL' => 'https://mysamplepicture.com/3.jpg',
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
                        0 =>
                        [
                            'Name' => 'Brand',
                            'Value' => 'Apple',
                        ],
                        1 =>
                        [
                            'Name' => 'Screen Size',
                            'Value' => '13.3 in',
                        ],
                        2 =>
                        [
                            'Name' => 'Processor',
                            'Value' => 'Intel Core 2 Duo',
                        ],
                        3 =>
                        [
                            'Name' => 'Model',
                            'Value' => 'MacBook Pro 13.3',
                        ],
                        4 =>
                        [
                            'Name' => 'Release Year',
                            'Value' => '2009',
                        ],
                        5 =>
                        [
                            'Name' => 'Hard Drive Capacity',
                            'Value' => '160 GB',
                        ],
                        6 =>
                        [
                            'Name' => 'SSD Capacity',
                            'Value' => '8 GB',
                        ],
                        7 =>
                        [
                            'Name' => 'Features',
                            'Value' =>
                            [
                                0 => 'Apple Mac OS X 10.7 Mountain Lion',
                                1 => 'LED-backlit Glass Display',
                                2 => 'Glass Trackpad',
                                3 => 'FireWire 800 port',
                                4 => 'Bluetooth 2.1+EDR',
                                5 => 'Mini DisplayPort video output',
                                6 => 'Secure Digital card slot',
                            ],
                        ],
                        8 =>
                        [
                            'Name' => 'Color',
                            'Value' => 'Silver',
                        ],
                        9 =>
                        [
                            'Name' => 'Storage Type',
                            'Value' => 'HDD (Hard Disk Drive)',
                        ],
                        10 =>
                        [
                            'Name' => 'Processor Speed',
                            'Value' => '226 MHz',
                        ],
                        11 =>
                        [
                            'Name' => 'Operating System',
                            'Value' => 'Mac OS X',
                        ],
                        12 =>
                        [
                            'Name' => 'MPN',
                            'Value' => 'MB990LL/A',
                        ],
                        13 =>
                        [
                            'Name' => 'Series',
                            'Value' => 'MacBook Pro',
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
            $payload['Item']['Variations'] = $this->getVariantDetails();
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
        $variantArr = [];
        $pictures = [];
        $variants = [];
        foreach ($this->product->getVariants as $Variant) {

            $variantImageDetails =  $this->getVariantImageDetails($Variant);

            if (!empty($variantImageDetails)) {
                $pictures[] = [
                    'VariationSpecificPictureSet' => [
                        $variantImageDetails,
                    ],
                ];
            }


            $variants[] = [
                'Quantity' => $Variant->quantity,
                'SKU' => $Variant->sku,
                'StartPrice' => number_format($Variant->price, 2),
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
