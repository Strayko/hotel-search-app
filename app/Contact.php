<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
        'address2',
        'email',
        'telephone',
        'mobile',
        'opening',
        'closing'
    ];
}
