<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination',
        'name',
        'email',
        'date_time',
        'special_request',
    ];

    protected $casts = [
        'date_time' => 'datetime',
    ];
}
