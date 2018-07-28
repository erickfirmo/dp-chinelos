<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;

class ContatoController extends Controller
{
    

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::pluck('nome');
        return view('site.home.contato',['categorias' => $categorias]);
    }

    public function show($id)
    {
        $categorias = Categoria::pluck('nome');
        return view('site.home.contato', compact('categoria'), ['categorias' => $categorias]);

    }

    public function showCategorias(){

        $categorias = Categoria::pluck('nome');

        return view('site.home.produtos', ['categorias' => $categorias]);
    
    }

}
