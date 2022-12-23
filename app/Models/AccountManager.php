<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountManager extends Model
{
    use HasFactory, CommonQuery;

    protected $fillable = ['name', 'email', 'contact_no', 'response_time'];
}
