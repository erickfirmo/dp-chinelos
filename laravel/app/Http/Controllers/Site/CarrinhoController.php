<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class CarrinhoController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::pluck('nome');
        return view('site.home.carrinho',['produtos' => $produtos, 'categorias' => $categorias]);
    }

    public function addProduct(Request $request)
    {

        if(session('cart') == true)
        {
            $cart = $request->session()->get('cart');

        } else {
            $cart = $request->session()->put('cart', [0]);

        }
        
        $produto = Produto::where('id', $id);

        array_push($cart, $produto);
    }
    
    public function newOrder()
    {

    }


    public function showCart() {

    }
}
