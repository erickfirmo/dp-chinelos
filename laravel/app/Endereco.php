<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{

    protected $table = 'enderecos';

    protected $fillable = [
        'cep',
        'endereco',
        'numero',
        'complemento',
        'referencia',
        'bairro',
        'cidade',
        'estado',
        'user_id',
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
}
