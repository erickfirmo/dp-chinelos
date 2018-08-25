<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusDoPedido extends Model
{

    
    protected $table = 'status_do_pedido';

    protected $fillable = [
        'id',
        'nome'
    ];

    
    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }


}
