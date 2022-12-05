<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory, CommonQuery;
    protected $table = 'order_items';
    protected $fillable = [
        'order_id',
        'title',
        'amount',
        'sku',
        'ebay_item_id',
        'quantity'
    ];
}
