<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    protected $fillable = [
      'user_id',
      'photo',
      'restaurant_id'
    ];

}
