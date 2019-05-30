<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = [
        'date',
        'time',
        'party',
        'name',
        'email',
        'phone',
        'user_id',
        'restaurant_title',
        'body'
    ];
}
