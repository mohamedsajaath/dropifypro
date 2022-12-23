<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, CommonQuery;
<<<<<<< HEAD
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
=======

    const AWAITING_DISPATCH = 0;
    const DISPATCH = 1;

   

>>>>>>> 6f80b511ac043c423a866c833b33803afc87b6c3
}
