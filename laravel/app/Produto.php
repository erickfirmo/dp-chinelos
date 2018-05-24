<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{   
    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'descricao',
        'quantidade',
        'preco'
    ];
    
    protected $guarded = [
        'id',
        'created_at',
        'update_at'
    ];
}