<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    protected $fillable = [
      'photo',
      'restaurant_id',
      'user_id'
    ];

//    public function restaurant() {
//        return $this->belongsTo('App\Restaurant');
//    }

}
