<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItemSpecification extends Model
{
    use HasFactory, CommonQuery;
    protected $table = "product_item_specifications";
    protected $fillable =
        [
            'product_id',
            'specification_name',
            'specification_value',
        ];

}
