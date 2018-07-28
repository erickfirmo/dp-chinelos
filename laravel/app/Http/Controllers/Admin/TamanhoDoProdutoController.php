<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tamanho;
use App\Produto;
use App\TamanhoDoProduto;


class TamanhoDoProdutoController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth');

   }

   public function index()
   {


   }

   public function create(Request $request) 
   {


      return redirect()->route('admin.tamanhos.store')
         ->withRequest($request);
      


   }

   public function store(Request $request)
   {


      foreach($request->tamanhos_id as $tamanho_id) {

            $tamanho_do_produto = new TamanhoDoProduto;
            $tamanho_do_produto->tamanho_id = $tamanho_id;
            $tamanho_do_produto->produto_id = $request->produto_id;
            
            dd($tamanho_do_produto);

            $tamanho_do_produto->save();
      }
      


      return redirect()->route('admin.produtos.index');


   }


   public function show()
   {
      

   }


   public function edit()
   {
         
   }

   public function update()
   {

   }


}
