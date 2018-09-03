<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoDoCarrinho extends Model
{

    protected $fillable = [
        'nome',
        'unidades',
        'tamanho',
        'preco_unitario',
        'preco_total',
    ];

    protected $guard = [
        'id',

    ];


    
    
}