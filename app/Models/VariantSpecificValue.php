<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantSpecificValue extends Model
{
    use HasFactory;
    protected $table = 'variant_specific_values';
    protected $fillable = [
        'variant_specific_id',
        'value',
    ];


}
