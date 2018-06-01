<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Categoria;
use App\Status;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $produtos = Produto::orderBy('id', 'desc')->paginate(50);

        return view('admin.produtos.index',['produtos' => $produtos]);

    }

    public function create()
    {
        $categorias = Categoria::pluck('nome', 'id');
        $status = Status::pluck('nome', 'id');

        return view('admin.produtos.create')
            ->withCategorias($categorias)
            ->withStatus($status);

    }


    public function store(Request $request) 
    {
        $this->validate($request, [
            'nome' => 'required|unique:produtos',
            'unidades' => 'required',
            'preco' => 'required',
        ]);

        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->unidades = $request->unidades;
        $produto->preco = number_format($request->preco, 2, '.', '');
        $produto->categoria_id = $request->categoria_id;
        $produto->status_id = $request->status_id;
        $produto->save();

        return redirect()->route('admin.produtos.edit', compact('produto'))
            ->with('success', "Produto criado com sucesso !");

    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('admin.produtos.show', compact('produto'));

    }

    public function edit(Produto $produto)
    {

        
        $categorias = Categoria::pluck('nome', 'id');
        $status = Status::pluck('nome', 'id');
        return view('admin.produtos.edit')
            ->withProduto($produto)
            ->withCategorias($categorias)
            ->withStatus($status);

    }

    public function update(Request $request, $id)
    {
        
        $produto = Produto::findOrFail($id)->update($request->all());

        return redirect()->route('admin.produtos.edit', compact('produto'))
            ->with('success', "Produto atualizado com sucesso !");

    }


    public function destroy($id)
    {   
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('admin.produtos.index')
            ->with('success', "Produto removido com sucesso !");

    }


}
