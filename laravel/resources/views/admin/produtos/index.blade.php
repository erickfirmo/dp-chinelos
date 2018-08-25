@extends('admin.layouts.admin')
@section('title', 'Produtos')
@section('description', 'Lista de Produtos')
@section('content')

<div class="container-fluid">

<div class="row">
    <div class="col-12">
    @include('admin.partials._alert')
      <div id="card" class="card">
        <div class="card-header">
          <h3 class="card-title">Lista de Produtos</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">

            <a href="{{ url('admin/produtos/') }}">
                  <button class="btn btn-secondary button-table"><i class="fa fa-reply"></i>&nbsp;&nbsp;Voltar</button>
                </a>
              <a href="{{ url('admin/produtos/create') }}">
                <button class="btn btn-primary button-table"><i class="fa fa-plus"></i>&nbsp;&nbsp;Adicionar Produto</button>
              </a>
              <button style="width:250px; float:right; margin: 0 4px;" class="btn btn-danger button-table"><i class="fa fa-download"></i> PDF</button>&nbsp;&nbsp;
              <button style="width:250px; float:right; margin: 0 4px;" class="btn btn-success button-table"><i class="fa fa-download"></i> Planilha</button>
              <div class="input-group-append" style="width:250px; float:right;">

                  <!--<input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">
                  &nbsp;&nbsp;
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>-->
                </div>
            </div>
            
          </div>

          <br>

          <div class="col-md-12"> 
            <div class="table-responsive">
              <table id="example1" class="table table-default table-striped">

                <thead>
                  <tr>
                  <th>Id</th>
                  <th>Produto</th>
                  <th>Imagem</th>
                  <th>Unidades</th>
                  <th>Categoria</th>
                  <th>Status</th>
                  <th>Preço</th>
                  <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($produtos as $produto)
                  <tr class="clickable-tr pointer" data-href='{{ url("admin/produtos/$produto->id") }}'>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td><img src='{{ asset("storage/images/{$produto->imagem_principal}") }}' alt="#" class="product-thumbnail"></td>
                    <td>{{ $produto->unidades }}</td>
                    <td>{{ $produto->categorias->nome }}</td>
                    <td>
                      @if($produto->status->nome == 'Ativo')
                        <span class="badge badge-success right">{{ $produto->status->nome }} </span>

                      @elseif($produto->status->nome == 'Inativo')
                        <span class="badge badge-danger right">{{ $produto->status->nome }} </span>

                      @endif
                    </td>
                    <td>R$ {{ str_replace('.', ',', number_format($produto->preco, 2, '.', '')) }}</td>

                    <td>
                      <a href='{{ url("admin/produtos/$produto->id/edit") }}'>
                        <button class="btn btn-secondary button-table">Ver/Editar</button>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>


          </div>

          

          <div class="row">
              {{ $produtos->links() }}

          </div>
        </div>



        </div>
      </div>
    </div>
  </div>
</div>


@endsection
