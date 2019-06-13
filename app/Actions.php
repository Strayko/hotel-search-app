<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actions extends Model
{
    protected $fillable = [
        'restaurant_id',
        'user_id',
        'is_active',
        'title',
        'body',
        'benefits'
    ];

    public function restaurant() {
        return $this->belongsTo('App\Restaurant');
    }
}
