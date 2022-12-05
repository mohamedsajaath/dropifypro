<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, CommonQuery;
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'status',
        'ebay_order_id',
        'total_amount',
        'total_quantity',
    ];
}
