<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [

        'title',
        'features',
        'release',
        'thumb_path',
        'n_sells',
        'price'
    ];
}
