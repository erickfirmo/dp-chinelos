<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Produto;
use App\Categoria;
use App\Tamanho;
use App\TamanhoDoProduto;

class PedidoController extends Controller
{



    public function index()
    {

        /*$this->validate($request, [
            'nome' => 'required|unique:produtos|max:30',
            'unidades' => 'required',
            'preco' => 'required',
            'file1' => 'required',
        ]);*/

    }

    public function store(Request $request)
    {

        /*$this->validate($request, [
            'nome' => 'required|unique:produtos|max:30',
            'unidades' => 'required',
            'preco' => 'required',
            'file1' => 'required',
        ]);*/

        dd($request);

    }
}
