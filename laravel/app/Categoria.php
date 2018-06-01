<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'id',
        'categoria'
    ];

    protected $guarded = [
        'created_at',
        'update_at'
    ];  

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
    
}
