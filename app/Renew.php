<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renew extends Model
{
    protected $table = 'packages_renew';
    protected $fillable = [
      'name'
    ];
}
