<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory, CommonQuery;

    /**
     * @var array|mixed
     */
    public mixed $variantSpecificNames;
    /**
     * @var array|mixed
     */
    public mixed $variantSpecificValues;
    /**
     * @var ProductImage|mixed
     */
    public $variantImage;
    protected $table = "product_variants";

    Protected $fillable =[
        'product_id',
        'quantity',
        'sku',
        'price',
        'rsp'
    ];

    public function getImages()
    {
        return ProductImage::getVariantImages($this->id);
    }



}
