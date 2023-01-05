<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EbayAccount extends Model
{
    use HasFactory, CommonQuery;
    protected $table = 'ebay_accounts';
    protected $fillable = [
        'user_id',
        'refresh_token',
        'access_token',
        'connected_date',
        'site_id',
    ];
}
