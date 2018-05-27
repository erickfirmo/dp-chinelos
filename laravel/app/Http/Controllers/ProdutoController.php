<?php

namespace App\Http\Controllers;


use App\Produto;
use Illuminate\Http\Request;

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

        $this->validate($request, [
            'nome' => 'required|unique:produtos',
            'quantidade' => 'required',
            'preco' => 'required',
        ]);

        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->quantidade = $request->quantidade;
        $produto->preco = $request->preco;

        

        $produto->save();

        return redirect()->route('admin.produtos.show', compact('produto'))->with('success', "Produto criado com sucesso !");

    }

    


    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('admin.produtos.show', compact('produto'));
    }




    public function edit(Produto $produto)
    {
        return view('admin.produtos.edit')
            ->withProduto($produto);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'quantidade' => 'required',
            'preco' => 'required',
        ]);
        
        $produto = Produto::findOrFail($id)->update($request->all());


        return redirect()->route('admin.produtos.edit', compact('produto'))->with('success', "Produto atualizado com sucesso !");
    }


    public function destroy($id)
    {   
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('admin.produtos.index')->with('success', "Produto removido com sucesso !");
    }


}
