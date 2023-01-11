<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountManager extends Model
{
    use HasFactory, CommonQuery;

    protected $table = 'account_managers';

    protected $fillable = ['name', 'email', 'contact_no', 'response_time'];
}
