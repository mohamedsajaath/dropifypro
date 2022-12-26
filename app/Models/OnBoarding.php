<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnBoarding extends Model
{
    use HasFactory, CommonQuery;

    const STATUS_AVAILABLE = 1;
    const STATUS_BOOKED = 0;

    protected $table = 'on_boardings';

    protected $fillable = [
        'user_id',
        'title',
        'date',
        'start_time',
        'end_time',
        'status',
    ];
}
