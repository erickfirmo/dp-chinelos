<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Produto;
use App\Categoria;
use App\Status;
use App\Imagem;
use App\ImagemDoProduto;


class ProdutoController extends Controller
{
    /* home site */
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::pluck('nome');

        return view('site.home.index',['produtos' => $produtos, 'categorias' => $categorias]);

    }

    /* single product */
    public function show($id)
    {
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
            
            ]);

    }

    
}
