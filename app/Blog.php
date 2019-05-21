<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $fillable = [
        'photo_id',
        'user_id',
        'title',
        'body'
    ];

    public function photo() {
        return $this->belongsTo('App\Photo');
    }
}
