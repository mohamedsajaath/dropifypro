<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory, CommonQuery;
    const STARTER_SLUG = 'starter';
    const ADVANCED_SLUG = 'advanced';
    const BUSINESS_SLUG = 'business';
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price_month',
        'price_year',
    ];


}
