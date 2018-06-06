<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagemDoProduto extends Model
{
   protected $table = 'imagens_do_produto';

   protected $fillable = [
      'produto_id',
      'imagem_id'
   ];


   protected $guarded = [
      'created_at',
      'update_at'
   ];

   public function produtos()
   {
      return $this->belongsTo(Produto::class, 'produto_id');
   }

   public function imagens()
   {
      return $this->belongsTo(Imagem::class, 'imagem_id');
   }









    
}
