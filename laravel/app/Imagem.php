<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $table = 'imagens';

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
