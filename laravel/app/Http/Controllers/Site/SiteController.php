<?php

namespace App\Http\Controllers\Site;



use App\Http\Controllers\Controller;
use App\Produto;
use App\Categoria;
use App\Status;
use App\Imagem;
use App\ImagemDoProduto;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::pluck('nome');

        return view('site.home.index',['produtos' => $produtos, 'categorias' => $categorias]);


    }

}
