<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TamanhoDoProduto extends Model
{
    protected $table = 'tamanhos_do_produto';

    protected $fillable = [
        'produto_id',
        'tamanho_id'
    ];
    
    protected $guard = [
        'id'
    ];

    public function produtos()
    {
        return $this->belongsTo(Produto::class, 'produto_id');

    }

    public function tamanhos()
    {
        return $this->belongsTo(Tamanho::class, 'tamanho_id');
    }
}
