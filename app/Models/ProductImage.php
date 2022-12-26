<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    const PRODUCT_IMAGE = 'product_image';
    const  VARIANT_IMAGE= 'variant_image';

    use HasFactory, CommonQuery;
    protected $table = 'product_images';
    protected $fillable = [
        'reference_id',
        'reference',
        'file_name',
        'storage_name',
        'image_url'
    ];

    public static function getProductImages(array $product_ids)
    {
        return ProductImage::whereIn('reference_id', $product_ids)
        ->where('reference', '=', self::PRODUCT_IMAGE)
        ->get();
    }

    public static function getVariantImages($variant_id)
    {
        return ProductImage::where('reference_id', '=', $variant_id)
        ->where('reference', '=', self::VARIANT_IMAGE)
        ->get();
    }
}
