<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Produto;

class CategoriaController extends Controller
{
    

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::pluck('nome');
        $produtos = Produto::all();
        return view('site.home.categoria',['categorias' => $categorias, 'produtos' => $produtos]);
    }

    public function show($id)
    {
        $categoria = Categoria::findOrFail($id);

        $categorias = Categoria::pluck('nome');
        $produtos = Produto::all();
        return view('site.home.categoria', compact('categoria'), ['categorias' => $categorias, 'produtos' => $produtos]);

    }

    public function showCategorias(){

        $categorias = Categoria::pluck('nome');
        $produtos = Produto::all();

        return view('site.home.produtos', ['categorias' => $categorias, 'produtos' => $produtos]);
    
    }

}
