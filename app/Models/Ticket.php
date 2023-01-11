<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory, CommonQuery;

    protected $table = 'tickets';

    protected $fillable = ['user_id', 'title', 'status'];
}
