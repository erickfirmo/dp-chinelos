<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;
use App\Categoria;
use App\Status;
use App\Imagem;
use App\ImagemDoProduto;
use App\TamanhoDoProduto;
use Session;
use App\Tamanho;
use Laracasts\Utilities\JavaScript\JavaScriptFacade as JavaScript;

class SiteController extends Controller
{

    public function index(Request $request)
    {
        //create session method
        if((!Session::has('cart')) || !Session::has('count_cart'))
        {
            Session::put('cart', null);
            Session::put('count_cart', 0);
        }

        $cart = Session::get('cart');
        $count_cart = Session::get('count_cart');
        //

        $count_size = 0;
        $produtos = Produto::with('categorias')->with('tamanhos')->get();

        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();
    
        return view('site.home.index')
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCountCart($count_cart)
            ->withCart($cart)
            ->withCountSize($count_size);
    }
    
    public function sobre(Request $request)
    {
        //create session method
        if((!Session::has('cart')) || !Session::has('count_cart'))
        {
            Session::put('cart', null);
            Session::put('count_cart', 0);

        }

        $cart = Session::get('cart');
        $count_cart = Session::get('count_cart');
        //

        $produtos = Produto::all();
        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();
        $count_size = 0;

        return view('site.home.sobre')
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCountCart($count_cart)
            ->withCart($cart)
            ->withCountSize($count_size);
    
    }

    public function contato(Request $request)
    {
        //create session method
        if((!Session::has('cart')) || !Session::has('count_cart'))
        {
            Session::put('cart', null);
            Session::put('count_cart', 0);

        }

        $cart = Session::get('cart');
        $count_cart = Session::get('count_cart');
        //

        $produtos = Produto::all();
        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();
        $count_size = 0;

        
        return view('site.home.contato')
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCountCart($count_cart)
            ->withCart($cart)
            ->withCountSize($count_size);
    }

    public function produtos()
    {
        //create session method
        if((!Session::has('cart')) || !Session::has('count_cart'))
        {
            Session::put('cart', null);
            Session::put('count_cart', 0);

        }

        $cart = Session::get('cart');
        $count_cart = Session::get('count_cart');
        //
        
        $produtos = Produto::all();
        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();
        $category = false;
        $count_size = 0;
        

        return view('site.home.produtos')
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCart($cart)
            ->withCountCart($count_cart)
            ->withCountSize($count_size)
            ->withCategory($category);
    



    }

    public function produtosDaCategoria($id)
    {

        //create session method
        if((!Session::has('cart')) || !Session::has('count_cart'))
        {
            Session::put('cart', null);
            Session::put('count_cart', 0);

        }

        $cart = Session::get('cart');
        $count_cart = Session::get('count_cart');
        //

        $category = Categoria::findOrFail($id);
        $produtos = Produto::where('categoria_id',$category->id)->get();
        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();
        
        $count_size = 0;

       

        return view('site.home.produtos', compact('category'))
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCart($cart)
            ->withCountCart($count_cart)
            ->withCountSize($count_size)
            ->withCategory($category);



    }

    /* single produto */
    public function produto($id)
    {   
        //create session method
        if((!Session::has('cart')) || !Session::has('count_cart'))
        {
            Session::put('cart', null);
            Session::put('count_cart', 0);

        }

        $cart = Session::get('cart');
        $count_cart = Session::get('count_cart');
        //

        $single_product = Produto::findOrFail($id);
        $categoria_do_produto = $single_product->categorias->nome;
		
		$categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();
			
        $produtos = Produto::all();
        $count_size = 0;

        


        return view('site.home.produto', compact('single_product'))
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCountCart($count_cart)
            ->withCart($cart)
            ->withCategoriaDoProduto($categoria_do_produto)
            ->withCountSize($count_size);

        
    }


}
