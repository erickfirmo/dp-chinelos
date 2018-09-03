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
                    Session::put('cart', null);
                }
                $cart = Session::get('cart');
                if($cart != NULL)
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


    public function index(Request $request)
    {
        $produtos = Produto::all();
        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();

        
        $cart = $this->loadSession('cart', null);
        $count_cart = $this->loadSession('count_cart', 0);
        $total_cart = $this->loadSession('total_cart', 0);
        $count_size = 0;



        return view('site.home.checkouts.carrinho')
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCart($cart)
            ->withCountCart($count_cart)
            ->withCountSize($count_size)
            ->withTotalCart($total_cart);
    }


    public function store(Request $request)
    {   


        
        
        $cart = $this->loadSession('cart', null);
        $count_cart = $this->loadSession('count_cart', 0);
        $total_cart = $this->loadSession('total_cart', 0);
        
        $count_size = 0;

        $id = $request->produto_id;
        $radio_size_id = $request->produto_id.$request->tamanho_do_produto.$request->count_size;
        $produto = Produto::findOrFail($id);

        $produto_do_carrinho = [
            'id' => $request->produto_id,
            'nome' => $request->nome_do_produto,
            'unidades' => $request->unidades_do_produto,
            'preco_total' => ($produto->preco) * ($request->unidades_do_produto),
            'preco_unitario' => $produto->preco,
            'tamanho' => $request->tamanho_do_produto,
            'imagem_principal' => $produto->imagem_principal,
            'imagem_2' => $produto->imagem_2,
            'imagem_3' => $produto->imagem_3,
        ];

        //erro add cart

        $cart = Session::get('cart');



        $unidades = 1;
        $inCart = false;
        if($cart == null)
        {
            
            Session::put('cart', null);
            $request->session()->push('cart', $produto_do_carrinho);

            


            
        } else {

            foreach($cart as $key => $product_cart)
            {
                $unidades += $product_cart['unidades'];
                if(($product_cart['tamanho'] == $produto_do_carrinho['tamanho']) && $product_cart['id'] == $produto_do_carrinho['id'])
                {
                    $inCart = true;
                    $key_prod = $key;
                } 
            }

            if($inCart == true){
                $cart[$key_prod]['unidades'] += $produto_do_carrinho['unidades'];
                $cart[$key_prod]['preco_total'] += $produto_do_carrinho['preco_total'];
                Session::put('cart', $cart);
            } else {
                $request->session()->push('cart', $produto_do_carrinho);
            }

        }


        $cart = Session::get('cart');
        
        $count_cart = 0;
        $total_cart = 0;

        
        foreach($cart as $key => $product_cart){
            $count_cart += $cart[$key]['unidades'];
            $total_cart += $cart[$key]['preco_total'];
        }


        //fim do erro - CORRIJA !

        Session::put('cart', $cart);
        Session::put('count_cart', $count_cart);
        Session::put('total_cart', $total_cart);

        
        return response()->json([
            'count_cart'=> $count_cart,
            'cart'=> $cart,
            'radio_size_id' => $radio_size_id,
            'total_cart' => $total_cart,
        ]);


    }


    public function destroy($product_key){




        $produtos = Produto::all();
        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();

        //create session method
        $cart = $this->loadSession('cart', null);
        $count_cart = $this->loadSession('count_cart', 0);
        $total_cart = $this->loadSession('total_cart', 0);

        $cart = Session::get('cart');
        $count_cart = Session::get('count_cart');
        $total_cart = 0;
        if($cart != null)
        {
        foreach($cart as $key => $product_cart){
            $total_cart += $cart[$key]['preco_total'];
        }
    }


        Session::put('total_cart', $total_cart);

        $count_cart -= $cart[$product_key]['unidades'];
        Session::put('count_cart', $count_cart);
        
        unset($cart[$product_key]);

        Session::put('cart', $cart);
        //##

        $count_size = 0;

        return redirect()->back();







        
    }


    public function cartEdit(Request $request){
        


        $produtos = Produto::all();
        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();

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
        
        //##
        $total_cart = 0;

        


        $key_product = $request->prod;

        $cart[$key_product]['unidades'] = $request->edit_unidades;
        $cart[$key_product]['preco_total'] = $request->edit_unidades * $cart[$key_product]['preco_unitario'];





        $count_cart = 0;
        foreach($cart as $key => $product_cart){
            $count_cart += $cart[$key]['unidades'];
            $total_cart += $cart[$key]['preco_total'];

        }



        Session::put('total_cart', $total_cart);
        Session::put('count_cart', $count_cart);

        Session::put('cart', $cart);




        $count_size = 0;

        return redirect()->back();



    }
}