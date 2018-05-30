<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'categoria'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'update_at'
    ];  
    
}
