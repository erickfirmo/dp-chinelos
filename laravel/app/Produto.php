<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{   
    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'descricao',
        'unidades',
        'preco',
        'categoria_id'
    ];
    
    protected $guarded = [
        'id',
        'created_at',
        'update_at'
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
