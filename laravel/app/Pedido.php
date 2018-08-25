<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        'numero_de_produtos',
        'forma_de_pagamento',
        'total',
        'status_id',
        'user_id',
        'endereco_id',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'update_at'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }

    public function produtosDoPedido()
    {
        return $this->belongsToMany(ProdutoDoPedido::class, 'produtos_do_pedido', 'produto_id', 'pedido_id');
    }

    public function statusDoPedido()
    {
        return $this->belongsTo(StatusDoPedido::class, 'status_id');
    }

}
