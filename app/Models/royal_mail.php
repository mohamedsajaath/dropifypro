<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class royal_mail extends Model
{
    protected $table = 'royal_mails';
    protected $fillable = [
        'bearer_token',
    ];
}
