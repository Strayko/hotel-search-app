<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    	return $this->belongTo('App\Package');
    }
}
