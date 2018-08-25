@extends('admin.layouts.admin')
@section('title', 'Pedidos')
@section('description', 'Lista de Pedidos')
@section('content')

<div class="container-fluid">
  <div class="row">
      <div class="col-12">
      @include('admin.partials._alert')
        <div id="card" class="card">
          <div class="card-header">
            <h3 class="card-title">Lista de Pedidos</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
              <a href="{{ url('admin/produtos/') }}">
                  <button class="btn btn-secondary button-table"><i class="fa fa-reply"></i>&nbsp;&nbsp;Voltar</button>
                </a>
              <button style="width:250px; float:right; margin: 0 4px;" class="btn btn-danger button-table"><i class="fa fa-download"></i> PDF</button>&nbsp;&nbsp;
              <button style="width:250px; float:right; margin: 0 4px;" class="btn btn-success button-table"><i class="fa fa-download"></i> Planilha</button>
              


              </div>
            </div>

            <br>
              
            <div class="col-md-12">
              <div class="table-responsive">
                <table id="example1" class="table table-default table-striped">
                  <thead>
                    <tr>
                      <th>Id</th>
                      
                      
                      <th>Cliente</th>
                      <th>Nº de produtos</th>
                      <th>Data</th>
                      
                      <th>Status</th>
                      <th>Valor total</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($pedidos as $pedido)
                    <tr class="clickable-tr pointer" data-href='{{ url("admin/pedidos/$pedido->id") }}'>
                      <td>
                        {{ $pedido->id }}
                      </td>
                      
                      
                      <td>
                        {{ $pedido->users->name }}
                      </td>
                      <td>
                        {{ $pedido->numero_de_produtos }}
                      </td>
                      
                      <td>
                        {{ $pedido->created_at }}
                      </td>

                      <td>
                        @if($pedido->statusDoPedido->nome == 'Não lido')
                          <span class="badge badge-danger right">Novo</span>
                        @elseif($pedido->statusDoPedido->nome == 'Pendente')
                          <span class="badge badge-warning right">Pendente</span>
                        @elseif($pedido->statusDoPedido->nome == 'Finalizado')
                          <span class="badge badge-success right">Finalizado</span>
                        @endif
                      </td>

                      <td>
                        R$ {{ number_format($pedido->total, 2, ',', '.') }}
                      </td>

                      <td>
                        <a href='{{ url("admin/pedidos/$pedido->id/edit") }}'>
                          <button class="btn btn-secondary button-table">Ver Pedido</button>
                        </a>
                      </td>

                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>

            <div class="row">
                {{ $pedidos->links() }}
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
