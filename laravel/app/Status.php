<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    protected $fillable = [
        'id',
        'nome'
    ];

    
    public function produtos(){
        return $this->hasMany(Produto::class);
    }

}
