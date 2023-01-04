<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory, CommonQuery;

    const StoragePath = "public/product";
    protected $table = "product_images";
    protected $fillable =
        [
            'reference_id',
            'reference',
            'file_name',
            'storage_name',
            'image_url',
        ];
    const PRODUCT_IMAGE = 'product_image';
    const  VARIANT_IMAGE= 'variant_image';
}
