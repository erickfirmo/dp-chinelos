@extends('admin.layouts.admin')
@section('title', 'Pedido')
@section('description', $pedido->pedido)
@section('content')




<div class="row">
  <div class="col-12">

    @include('admin.partials._alert')
    <div id="card" class="card">
      <div class="card-header">
        <h3 class="card-title">Detalhes do Pedido</h3>
      </div>
      <div class="card-body">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <small class="float-right">{{ $pedido->created_at}}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                <strong>Dados do Cliente</strong>
                <br><br>
                <address>
                  <b>Nome: </b>{{ $pedido->users->name.' '.$pedido->users->lastname }}<br>
                  <b>Telefone: </b>{{ $pedido->users->telefone }}<br>
                  <b>Celular: </b>{{ $pedido->users->celular }}<br>
                  <b>Email: </b>{{ $pedido->users->email}}
                </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                <strong>Endereço</strong>
                  <br><br>
                  <address>
                    <b>CEP: </b>{{ $pedido->endereco->cep }}<br>

                    <b>Logradouro: </b>{{ $pedido->endereco->endereco }}<br>
                    <b>Número: </b>{{ $pedido->endereco->numero }}<br>
                    
                    <b>Bairro: </b>{{ $pedido->endereco->bairro }}<br>
                    @if($pedido->endereco->complemento)
                     <b>Complemento: </b>{{ $pedido->endereco->complemento }}<br>
                    @endif
                    @if($pedido->endereco->referencia)
                     <b>Referência: </b>{{ $pedido->endereco->referencia }}<br>
                    @endif
                    <b>Cidade/Estado: </b>{{ $pedido->endereco->cidade.' - '.$pedido->endereco->estado }}<br>
                  </address>
                 
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Detalhes do Pedido</b><br>
                  <br>
                  <b>ID do pedido:</b> {{ $pedido->id }}<br>
                  <b>Status:</b>

                  <form action="{{ route('admin.pedidos.update', $pedido->id)}}" method="POST" id="edit-pedido">
                  {{method_field('PUT')}}
                  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>


                    <select name="status_do_pedido" id="status_do_pedido" onchange="this.form.submit()">
                      @foreach($status_do_pedido as $key => $status)
                        @if($status != 'Não lido')
                          <option value='{{ $key }}'
                            @if($status == $pedido->statusDoPedido->nome)
                              selected="selected"
                            @endif
                          >{{ $status }}
                          </option>
                        @endif
                      @endforeach
                    </select><br>
                  </form>
                  
                  <b>Data:</b> {{ $pedido->created_at}} <br>
                  <b>Forma de Pagamento:</b> {{ $pedido->forma_de_pagamento }}<br>
                  <b>Numero de Produtos:</b> {{ $pedido->numero_de_produtos }}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <br>

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Tamanho</th>
                      <th>Unidades</th>
                      <th>Preço Unitário</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    
                    
                    @foreach($produtos_do_pedido->where('pedido_id',$pedido->id) as $produto_do_pedido)
                      <td>{{ $produto_do_pedido->nome }}</td>
                      <td>{{ $produto_do_pedido->tamanho }}</td>
                      <td>{{ $produto_do_pedido->unidades }}</td>
                      <td>{{ $produto_do_pedido->preco_unitario }}</td>
                      <td>{{ $produto_do_pedido->preco_total }}</td>
                    @endforeach



                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                </div>
                <!-- /.col -->
                <div class="col-6">

                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                      <tr>
                        <th>Total:</th>
                        <td>R$ {{ number_format($pedido->total, 2, ',', '.') }}</td>
                      </tr>
                    </tbody></table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

    </div>
  </div>
</div>



@endsection
