<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Admin\OnBoardingController;

class OnBoarding extends Model
{
    const IDLE = 0;
    const BOOKED = 1;

    protected $fillable = [
        'user_id',
        'title',
        'date',
        'time',
        'status',
];
}