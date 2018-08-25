<?php

namespace App\Http\Controllers\Site;


use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;
use App\Categoria;
use App\Tamanho;
use App\TamanhoDoProduto;
use App\User;
use App\Endereco;
use App\Pedido;
use App\Status;
use App\ProdutoDoPedido;
use Session;
use Auth;


class PedidoController extends Controller
{



    public function index()
    {

         //create session method
        if(!Session::has('cart'))
        {
            Session::put('cart', null);
        }
        if(!Session::has('count_cart'))
        { 
            Session::put('count_cart', 0);
        }
        if(!Session::has('total_cart'))
        {
            Session::put('total_cart', 0);
        }

        $cart = Session::get('cart');
        $count_cart = Session::get('count_cart');
        $total_cart = 0;

        if($cart != null)
        {
            foreach($cart as $key => $product_cart){
                $total_cart += $cart[$key]['preco_total'];
            }
        }
        //##
 
         $count_size = 0;
         $produtos = Produto::with('categorias')->with('tamanhos')->get();
 
         $categorias = Categoria::whereHas('produtos', function($q) {
             $q->where('status_id', 1);
             })->get();
     


                return view('site.home.checkouts.checkout')
                    ->withProdutos($produtos)
                    ->withCategorias($categorias)
                    ->withCountCart($count_cart)
                    ->withCart($cart)
                    ->withCountSize($count_size)
                    ->withTotalCart($total_cart);

    }

    public function store(Request $request)
    {

        /*$this->validate($request, [
            'nome' => 'required|unique:produtos|max:30',
            'unidades' => 'required',
            'preco' => 'required',
            'file1' => 'required',
        ]);*/
        $cart = Session::get('cart');

        $endereco = new Endereco;
        $pedido = new Pedido;

        $endereco->cep = $request->cep;
        $endereco->endereco = $request->endereco;
        
        if($request->complemento){
            $endereco->complemento = $request->complemento;
        }

        if($request->referencia){
            $endereco->referencia = $request->referencia;
        }

        
        $endereco->numero = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->user_id = Auth::user()->id;
        $endereco->save();

        $pedido = new Pedido;
        $pedido->endereco_id = $endereco->id;
        $pedido->user_id = Auth::user()->id;
        $pedido->status_id = 1;
        $pedido->forma_de_pagamento = $request->forma_de_pagamento;
        $pedido->numero_de_produtos = Session::get('count_cart');
        $pedido->total = $request->total_cart;
        $pedido->save();

        if($cart != null)
        {
            foreach($cart as $key => $product_cart)
            {
                $produto_do_pedido = new ProdutoDoPedido;
                $produto_do_pedido->produto_id = $product_cart['id'];
                $produto_do_pedido->nome = $product_cart['nome'];
                $produto_do_pedido->pedido_id = $pedido->id;
                $produto_do_pedido->unidades = $product_cart['unidades'];
                $produto_do_pedido->tamanho = $product_cart['tamanho'];
                $produto_do_pedido->preco_total = $product_cart['preco_total'];
                $produto_do_pedido->preco_unitario = $product_cart['preco_unitario'];
                $produto_do_pedido->save();
            }
        }






        $request->session()->forget('cart');
        $request->session()->forget('count_cart');
        $request->session()->forget('total_cart');







        /*return redirect()->back();*/

    }
}
