<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [

        'title',
        'genre',
        'features',
        'single',
        'lyric',
        'duration',
        'price'
    ];
}
