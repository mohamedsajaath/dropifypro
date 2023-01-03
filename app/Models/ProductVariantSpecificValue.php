<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariantSpecificValue extends Model
{
    use HasFactory;
    protected $table = 'product_variant_specific_values';
    protected $fillable = [
        'variant_id',
        'variant_specific_value_id',
    ];

}
