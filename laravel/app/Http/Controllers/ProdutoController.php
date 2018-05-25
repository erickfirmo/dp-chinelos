<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

use App\User;

class ProdutoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.produtos.index',['produtos' => $produtos]);
    }

    public function create()
    {
        return view('admin.produtos.create');
    }

    public function store(Request $request) 
    {

        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->quantidade = $request->quantidade;
        $produto->preco = $request->preco;
        $produto->save();

        return redirect()->route('admin.produtos.index')->with("Produto cadastrado com sucesso !");

    }

    public function show($id)
    {
        $produto = Produto::where($id);
        return view('admin.produtos.show')
            ->with($produto);
    }
}
