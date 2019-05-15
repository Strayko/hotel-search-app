<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
      'restaurant_id',
      'photo_id',
      'title',
      'body',
      'user_id',
      'is_active'
    ];

    public function photo() {
        return $this->belongsTo('App\Photo');
    }

    public function restaurant() {
        return $this->belongsTo('App\Restaurant');
    }
}
