<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantSpecific extends Model
{
    use HasFactory;
    protected $table = "variant_specifics";

    Protected $fillable =[
      'name',
    ];

}
