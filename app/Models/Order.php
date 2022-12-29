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
        'content'
    ];

    public $orderItems;
    public $customer;


    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    const AWAITING_DISPATCH = 0;
    const DISPATCH = 1;

   

}
