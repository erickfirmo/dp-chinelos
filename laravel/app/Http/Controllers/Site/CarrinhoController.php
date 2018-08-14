<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
use App\TamanhoDoProduto;
use App\Status;
use App\ProdutoDoCarrinho;
use Session;

class CarrinhoController extends Controller
{
    public function index(Request $request)
    {
        $produtos = Produto::all();
		
        $categorias = Categoria::whereHas('produtos', function($q) {
            $q->where('status_id', 1);
            })->get();

        //create session method
        if((!Session::has('cart')) || !Session::has('count_cart'))
        {
            Session::put('cart', null);
            Session::put('count_cart', 0);

        }

        $cart = Session::get('cart');
        $count_cart = Session::get('count_cart');
        //##

        $count_size = 0;

        return view('site.home.checkouts.carrinho')
            ->withProdutos($produtos)
            ->withCategorias($categorias)
            ->withCart($cart)
            ->withCountCart($count_cart)
            ->withCountSize($count_size);
    }


    public function store(Request $request)
    {   

        $id = $request->produto_id;
        $radio_size_id = $request->produto_id.$request->tamanho_do_produto.$request->count_size;
        $produto = Produto::findOrFail($id);

        $produto_do_carrinho = [
            'id' => $request->produto_id,
            'nome' => $request->nome_do_produto,
            'unidades' => $request->unidades_do_produto,
            'preco_total' => 0,
            'tamanho' => $request->tamanho_do_produto,
            'imagem_principal' => $produto->imagem_principal,
            'imagem_2' => $produto->imagem_2,
            'imagem_3' => $produto->imagem_3,
        ];

        //unidades 
        $cart = Session::get('cart');
        $unidades = 1;
        $inCart = false;
        if($cart == null)
        {
            
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
                Session::put('cart', $cart);
            } else {
                $request->session()->push('cart', $produto_do_carrinho);
            }

        }

        
            //
            
        
        $cart = Session::get('cart');

        Session::put('count_cart', $unidades);
        $count_cart = Session::get('count_cart');

        
        return response()->json([
            'count_cart'=> $count_cart,
            'cart'=> $cart,
            'radio_size_id' => $radio_size_id,
        ]);


    }


    public function destroy($product_key){

        $cart = Session::get('cart');
        unset($cart[$product_key]);
        Session::put('cart', $cart);
        
    }
}