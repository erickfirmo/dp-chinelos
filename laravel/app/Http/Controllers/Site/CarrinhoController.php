<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
use App\TamanhoDoProduto;
use App\Status;
use Session;

class CarrinhoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::pluck('nome');
        
        $cart = Session::get('cart');
        $count_cart = count($cart);

        return view('site.home.carrinho',['produtos' => $produtos, 'categorias' => $categorias])
            ->withCountCart($count_cart)
            ->withCart($cart);
    }

    public function carrinho(Request $request)
    {
        
        $cart = Session::get('cart');
        $count_cart = count($cart);
        

        return view('site.home.carrinho')
            ->withCountCart($count_cart)
            ->withCart($cart);

    }

    public function store(Request $request)
    {
        $produto_do_carrinho = Produto::findOrFail($request->produto_do_carrinho);
        $count_cart = 0;
        $cart = [];

        if(Session::has('cart'))
        {
            $request->session()->push('cart', $produto_do_carrinho->nome);
        } else {
            Session::put('cart', []);
        }

        $cart = Session::get('cart');
        $count_cart = count($cart);
        
        return response()->json([
            'cart'=> $cart,
            'count_cart'=> $count_cart,
        ]);
    }
}