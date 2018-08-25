<?php

namespace App\Http\Controllers\Admin;
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

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function loadCountPedidos()
    {
        $pedidos = Pedido::where('status_id', 1)->orderBy('id', 'desc')->paginate(10);

        return count($pedidos);
    }

    public function index()
    {
        $count_novos_pedidos = $this->loadCountPedidos();
        return view('admin.home')->withCountNovosPedidos($count_novos_pedidos);
    }
}
