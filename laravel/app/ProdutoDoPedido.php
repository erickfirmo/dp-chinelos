<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoDoPedido extends Model
{
    protected $table = 'produtos_do_pedido';

    protected $fillable = [
        'nome',
        'unidades',
        'tamanho',
        'preco_unitario',
        'preco_total',
        'pedido_id',
        'produto_id',
    ];
    
    protected $guard = [
        'id'
    ];

    public function pedidos()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

    public function produtos()
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }

    
}