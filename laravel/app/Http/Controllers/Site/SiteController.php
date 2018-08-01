<?php

namespace App\Http\Controllers\Site;



use App\Http\Controllers\Controller;
use App\Produto;
use App\Categoria;
use App\Status;
use App\Imagem;
use App\ImagemDoProduto;
use Session;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function index(Request $request)
    {
        $produtos = Produto::all();
        $categorias = Categoria::pluck('nome');
        
        $cart = Session::get('cart');
        $count_cart = count($cart);
        

        return view('site.home.index',['produtos' => $produtos, 'categorias' => $categorias])
            ->withCountCart($count_cart)
            ->withCart($cart);


    }

    public function sobre(Request $request)
    {
        $produtos = Produto::all();
        $categorias = Categoria::pluck('nome');

        
        $cart = Session::get('cart');
        $count_cart = count($cart);


        return view('site.home.sobre',['produtos' => $produtos, 'categorias' => $categorias])
            ->withCountCart($count_cart)
            ->withCart($cart);

    }

    public function contato(Request $request)
    {
        
        $cart = Session::get('cart');
        $count_cart = count($cart);
        

        return view('site.home.contato')
            ->withCountCart($count_cart)
            ->withCart($cart);

    }

    public function produtos()
    {
        $produtos = Produto::all();
        $categorias = Categoria::pluck('nome');
        
        $cart = Session::get('cart');
        $count_cart = count($cart);

        return view('site.home.produtos')
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCart($cart)
            ->withCountCart($count_cart);

    }

    /* single produto */
    public function produto($id)
    {   
        $cart = Session::get('cart');
        $count_cart = count($cart);
        
        $single_product = Produto::findOrFail($id);
        $categoria_do_produto = $single_product->categorias->nome;
        
        $produtos = Produto::all();
        
        $categorias = Categoria::pluck('nome');


        return view('site.home.produto', compact('single_product'), [

            'categorias' => $categorias,
            'categoria_do_produto' => $categoria_do_produto,
            
            ])
            ->withCountCart($count_cart)
            ->withCart($cart)
            ->withProdutos($produtos);
    }

    public function carrinho(Request $request)
    {
        
        $cart = Session::get('cart');
        $count_cart = count($cart);
        

        return view('site.home.carrinho')
            ->withCountCart($count_cart)
            ->withCart($cart);

    }

    public function add(Request $request)
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
