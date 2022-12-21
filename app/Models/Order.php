<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, CommonQuery;

    const AWAITING_DISPATCH = 0;
    const DISPATCH = 1;

   

}
