<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'nome',
        'url'
    ];

    protected $guarded = [
        'id',
        'create_at',
        'update_at'
    ];
}
