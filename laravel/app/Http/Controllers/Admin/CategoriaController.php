<?php

namespace App\Http\Controllers\Admin;

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

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }


    public function loadCountPedidos()
    {
        $pedidos = Pedido::where('status_id', 1)->orderBy('id', 'desc')->paginate(10);

        return count($pedidos);
    }


    public function index()
    {
        $count_novos_pedidos = $this->loadCountPedidos();
        $categorias = Categoria::orderBy('id', 'desc')->paginate(10);
        return view('admin.categorias.index',['categorias' => $categorias])
            ->withCountNovosPedidos($count_novos_pedidos);
    }

    public function create()
    {
        $count_novos_pedidos = $this->loadCountPedidos();
        return view('admin.categorias.create')
            ->withCountNovosPedidos($count_novos_pedidos);
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'nome' => 'required|unique:categorias|max:30'
        ]);
        $categoria = new Categoria;
        $categoria->nome = $request->nome;
        $categoria->save();
        return redirect()->route('admin.categorias.index')
            ->with('success', "Categoria criada com sucesso !");
    }

    public function show($id)
    {
        $count_novos_pedidos = $this->loadCountPedidos();
        $categoria = Categoria::findOrFail($id);
        return view('admin.categorias.show', compact('categoria'))
            ->withCountNovosPedidos($count_novos_pedidos);
    }

    public function edit(Categoria $categoria)
    {
        $count_novos_pedidos = $this->loadCountPedidos();
        return view('admin.categorias.edit')
            ->withCategoria($categoria)
            ->withCountNovosPedidos($count_novos_pedidos);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'categoria' => 'required|max:30',
        ]);
        $categoria = Categoria::findOrFail($id)->update([
            'nome' => $request->categoria,
        ]);
        return redirect()->route('admin.categorias.edit', compact('categoria'))
            ->with('success', "Categoria atualizada com sucesso !");
    }

    public function destroy($id)
    {   
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('admin.categorias.index')
            ->with('success', "Categoria removida com sucesso !");
    }
}
