<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory, CommonQuery;
    protected $table = 'product_variants';
    protected $fillable = [
        'product_id',
        'quantity',
        'sku',
        'price',
    ];

    public function getImages(){
        
        return ProductImage::getVariantImages($this->id);
    }
}
