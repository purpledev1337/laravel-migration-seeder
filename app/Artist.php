<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [

        'alias',
        'name',
        'surname',
        'date_of_birth',
        'band',
        'thumb_path'
    ];
}
