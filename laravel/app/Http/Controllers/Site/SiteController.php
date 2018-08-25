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

class SiteController extends Controller
{

    public function index(Request $request)
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
        //##

        
        if($cart != null)
        {
            foreach($cart as $key => $product_cart){
                $total_cart += $cart[$key]['preco_total'];
            }
        }


        Session::put('total_cart', $total_cart);

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
            ->withCountSize($count_size)
            ->withTotalCart($total_cart);
    }
    
    public function sobre(Request $request)
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
        //##

        
        if($cart != null)
        {
            foreach($cart as $key => $product_cart){
                $total_cart += $cart[$key]['preco_total'];
            }
        }


        Session::put('total_cart', $total_cart);
        //##

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
            ->withCountSize($count_size)
            ->withTotalCart($total_cart);
    
    }

    public function contato(Request $request)
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
        //##

        
        if($cart != null)
        {
            foreach($cart as $key => $product_cart){
                $total_cart += $cart[$key]['preco_total'];
            }
        }


        Session::put('total_cart', $total_cart);
        //##

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
            ->withCountSize($count_size)
            ->withTotalCart($total_cart);
    }

    public function produtos()
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
        //##

        
        if($cart != null)
        {
            foreach($cart as $key => $product_cart){
                $total_cart += $cart[$key]['preco_total'];
            }
        }


        Session::put('total_cart', $total_cart);
        //##
        
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
            ->withCategory($category)
            ->withTotalCart($total_cart);
    



    }

    public function produtosDaCategoria($id)
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
        //##

        
        if($cart != null)
        {
            foreach($cart as $key => $product_cart){
                $total_cart += $cart[$key]['preco_total'];
            }
        }


        Session::put('total_cart', $total_cart);
        //##

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
            ->withCategory($category)
            ->withTotalCart($total_cart);



    }

    /* single produto */
    public function produto($id)
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
        //##

        if($cart != null)
        {
            foreach($cart as $key => $product_cart){
                $total_cart += $cart[$key]['preco_total'];
            }
        }


        Session::put('total_cart', $total_cart);
        //##

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
            ->withCountSize($count_size)
            ->withTotalCart($total_cart);

        
    }


    /*public function slogin(Request $request)
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
        //##

        
        if($cart != null)
        {
            foreach($cart as $key => $product_cart)
            {
                $total_cart += $cart[$key]['preco_total'];
            }
        }
        


        Session::put('total_cart', $total_cart);
        //##

        $count_size = 0;
        $produtos = Produto::with('categorias')->with('tamanhos')->get();

        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();
    
        if(Auth::check()){
            return redirect('carrinho');
        } else {
            return view('site.home.checkouts.slogin')
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCountCart($count_cart)
            ->withCart($cart)
            ->withCountSize($count_size)
            ->withTotalCart($total_cart);
        }
    }*/


}
