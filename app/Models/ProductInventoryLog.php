<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInventoryLog extends Model
{
    use HasFactory, CommonQuery;

    protected $table = 'product_inventory_logs';
    protected $fillable = [
        'product_variant_id',
        'previous_quantity',
        'current_quantity',
        'user_id',
        'date',
        'note',
        'reference_type',
        'reference_value',
    ];

}
