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

class ProdutoController extends Controller
{
    /* produtos */
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();
        
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
        $categorias = Categoria::all();
        $categoria_do_produto = $produto->categorias->nome;
        $nome_do_produto = $produto->nome;


        if($produto) {


        return view('site.home.nao-encontrado', [

            'categorias' => $categorias,
            'categoria_do_produto' => $categoria_do_produto,
            'nome_do_produto' => $nome_do_produto
            
            ])
            ->withCountCart($count_cart)
            ->withCart($cart);


        } else {


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
}