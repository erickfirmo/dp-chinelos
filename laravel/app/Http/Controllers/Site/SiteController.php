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
        $produtos = Produto::all();
        $produto = Produto::findOrFail($id);
        $categorias = Categoria::pluck('nome');
        $categoria_do_produto = $produto->categorias->nome;
        $nome_do_produto = $produto->nome;

        return view('site.home.produto', compact('produto'), [

            'produtos' => $produtos,
            'categorias' => $categorias,
            'categoria_do_produto' => $categoria_do_produto,
            'nome_do_produto' => $nome_do_produto
            
            ])
            ->withCountCart($count_cart)
            ->withCart($cart);
    }

    

}
