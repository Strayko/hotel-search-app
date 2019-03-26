<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Restaurant extends Model
{
    protected $fillable = [
        'package_id',
	    'photo_id',
	    'title',
	    'body'
    ];

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function photo() {
    	return $this->belongsTo('App\Photo');
    }

    public function package() {
    	return $this->belongsTo('App\Package');
    }

    public function comments() {
    	return $this->hasMany('App\Restaurant');
    }


}
