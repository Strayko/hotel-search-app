<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{

    protected $table = 'pdf_documents';

    protected $fillable = [
        'document'
    ];

}
