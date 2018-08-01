<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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



}
