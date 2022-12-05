<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderCustomer extends Model
{
    use HasFactory, CommonQuery;
    protected $table = 'order_customers';
    protected $fillable = [
        'order_id',
        'name',
        'email',
        'address',
        'city',
        'province',
        'country_code',
        'zipcode',
        'phone_no'
    ];
}
