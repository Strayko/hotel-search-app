<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Support\Facades\DB;

class Restaurant extends Model
{
	use Sluggable;
	use SluggableScopeHelpers;

	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable()
	{
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}

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
    	return $this->hasMany('App\Comment');
    }


}
