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
    public function loadSession($sessionName, $defaulValue) 
    {
        //create sessions method//
        if(!Session::has($sessionName))
        {
            if($sessionName == 'total_cart')
            {
                $total_cart = 0;
                if(!Session::has('cart'))
                {
                    Session::put('cart', 0);
                }
                $cart = Session::get('cart');
                if(!$cart && $cart != 0)
                {
                    foreach($cart as $key => $product_cart)
                    {
                        $total_cart += $cart[$key]['preco_total'];
                    }
                }
                $sessionValue = $total_cart;
            }
            Session::put($sessionName, $defaulValue);
        }
        $sessionValue = Session::get($sessionName);
        return $sessionValue;
    }

    public function varsToView($viewName, $categoriaId)
    {
        $cart = $this->loadSession('cart', 0);
        $count_cart = $this->loadSession('count_cart', 0);
        $total_cart = $this->loadSession('total_cart', 0);
        
        $count_size = 0;
        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();

        $produtos = ($categoriaId) ? Produto::where('categoria_id',$categoriaId)->get() : Produto::with('categorias')->with('tamanhos')->get();

        if(!$categoriaId)
        {
            
            $category = null;
            return view($viewName)
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCountCart($count_cart)
            ->withCart($cart)
            ->withCountSize($count_size)
            ->withTotalCart($total_cart)
            ->withCategory($category);
            
        
        } else {

            
            $category = Categoria::findOrFail($categoriaId);
            
            return view($viewName, compact('category'))
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCountCart($count_cart)
            ->withCart($cart)
            ->withCountSize($count_size)
            ->withTotalCart($total_cart)
            ->withCategory($category);
        }
    }

    public function index(Request $request)
    {
        return $this->varsToView('site.home.index', 0);
    }

    public function sobre(Request $request)
    {
        return $this->varsToView('site.home.sobre', 0);
    }

    public function contato(Request $request)
    {
        return $this->varsToView('site.home.contato', 0);
    }


    public function produtos()
    {

        return $this->varsToView('site.home.produtos', 0);


    }


    public function produtosDaCategoria($id)
    {
        return $this->varsToView('site.home.produtos', $id);
    }

    /* single produto */
    public function produto($id)
    {   
        
        $cart = $this->loadSession('cart', 0);
        $count_cart = $this->loadSession('count_cart', 0);
        $total_cart = $this->loadSession('total_cart', 0);

        $single_product = Produto::findOrFail($id);
        $categoria_do_produto = $single_product->categorias->nome;
        
        $count_size = 0;
        $produtos = Produto::with('categorias')->with('tamanhos')->get();
        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();

        


        return view('site.home.produto', compact('single_product'))
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCountCart($count_cart)
            ->withCart($cart)
            ->withCategoriaDoProduto($categoria_do_produto)
            ->withCountSize($count_size)
            ->withTotalCart($total_cart);

        
    }


    public function slogin(Request $request)
    {
       
        $cart = $this->loadSession('cart', 0);
        $count_cart = $this->loadSession('count_cart', 0);
        $total_cart = $this->loadSession('total_cart', 0);

        $count_size = 0;
        $produtos = Produto::with('categorias')->with('tamanhos')->get();
        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();
    
        if((Auth::check()) && $cart) {
            return redirect('checkout');
        } elseif(!$cart) {
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
    }


}
