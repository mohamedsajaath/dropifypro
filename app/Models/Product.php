<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, CommonQuery;
    protected $table = "products";
    protected $fillable =
        [
            'name',
            'description',
            'sku',
            'weight'
        ];




}
