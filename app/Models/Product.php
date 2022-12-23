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
        'weight',
    ];
    public $variants;

    public function getImages(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');   
    }

    public function getVariants()
    {
        return $this->hasMany(ProductVariant::class, 'product_id', 'id');
    }
}
