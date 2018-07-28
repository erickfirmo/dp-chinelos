<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
    protected $table = 'tamanhos';

    protected $fillable = [
        'tamanho'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'update_at'
    ];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class);
    }
}
