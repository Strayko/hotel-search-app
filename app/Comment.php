<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [
		'restaurant_id',
		'is_active',
		'author',
		'email',
		'body',
		'photo'
	];

	protected $with = ['user'];

    public function replies() {
    	return $this->hasMany('App\CommentReply');
    }

    public function restaurant() {
    	return $this->belongsTo('App\Restaurant');
    }

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
