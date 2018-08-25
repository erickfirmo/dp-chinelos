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
use App\StatusDoPedido;
use Session;
use Auth;

class PedidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function loadPedidos()
    {
       
        $pedidos = Pedido::orderBy('id', 'desc')->paginate(10);
        

        return $pedidos;
    }

    public function loadCountPedidos()
    {
        $pedidos = Pedido::where('status_id', 1)->orderBy('id', 'desc')->paginate(10);

        return count($pedidos);
    }




    public function index()
    {



        $pedidos = $this->loadPedidos();

        $count_novos_pedidos = $this->loadCountPedidos();

        

        $categorias = Categoria::all();

        /*$pedidos = loadPedidos(Auth::user()->id);*/



        
        return view('admin.pedidos.index')
        ->withPedidos($pedidos)
        ->withCountNovosPedidos($count_novos_pedidos);


    }

    public function create()
    {
        return view('admin.pedido.create');

    }


    public function store(Request $request) 
    {
        $this->validate($request, [
            'pedido' => 'required|unique:pedido'
        ]);

        $pedido = new Pedido;
        $pedido->nome = $request->nome;
        $pedido->save();

        return redirect()->route('admin.pedido.index')
            ->with('success', "Pedido criado com sucesso !");

    }

    public function show($id)
    {
        
        $pedido = Pedido::findOrFail($id);
        return view('admin.pedido.show', compact('pedido'));

    }

    public function edit($id)
    {   

    
        
        $pedido = Pedido::findOrFail($id)->update([
            'status_id' => 2,
        ]);


        $pedido = Pedido::findOrFail($id);

        

        $count_novos_pedidos = $this->loadCountPedidos();
        $produtos_do_pedido = ProdutoDoPedido::all();

        $status_do_pedido = StatusDoPedido::pluck('nome', 'id');

        

        return view('admin.pedidos.edit', compact('pedido'))
            ->withPedido($pedido)
            ->withProdutosDoPedido($produtos_do_pedido)
            ->withCountNovosPedidos($count_novos_pedidos)
            ->withStatusDoPedido($status_do_pedido);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status_do_pedido' => 'required',
        ]);
        

        $pedido = Pedido::findOrFail($id)->update([
            'status_id' => $request->status_do_pedido,
        ]);

        return redirect()->back()->with('success', "Pedido atualizado com sucesso !");

    }


    public function destroy($id)
    {   
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return redirect()->route('admin.pedido.index')
            ->with('success', "Pedido removido com sucesso !");

    }
}
