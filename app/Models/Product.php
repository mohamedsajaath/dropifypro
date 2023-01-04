<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, CommonQuery;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'sku',
        'weight',
        'weight_unit',
    ];

    public $specifications;
    public $images;
    public $variations;

    public function getImages()
    {
        $variants = ProductVariant::selectBy(['product_id' => $this->id]);
        $variantIds = $variants->pluck('id')->toArray();
        return ProductImage::getProductImages($variantIds);
    }

    public function getVariants()
    {
        return $this->hasMany(ProductVariant::class, 'product_id', 'id');
    }

    
    public function isVariantProduct()
    {
        return $this->getVariants->count() > 1;
    }
}
