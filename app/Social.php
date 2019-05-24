<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'social_networks';
    protected $fillable = [
      'facebook',
      'twitter',
      'instagram',
      'google'
    ];
}
