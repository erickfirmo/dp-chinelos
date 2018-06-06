@extends('admin.layouts.admin')
@section('title', 'Categorias')
@section('description', 'Categorias de Produtos')
@section('content')

<div class="container-fluid">



<div class="row">
    <div class="col-12">
    @include('admin.partials._alert')
      <div id="card" class="card">
        <div class="card-header">
          <h3 class="card-title">Categorias</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ url('admin/categorias/create') }}">
                <button class="btn btn-success button-table"><i class="fa fa-plus"></i>&nbsp;&nbsp;Adicionar Categoria</button>
              </a>
                <div class="input-group-append" style="width:250px; float:right;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">
                  &nbsp;&nbsp;
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
            
          </div>

          <br>
            
          <table id="example1" class="table table-default table-striped">

            <thead>
            <tr>
              <th>Id</th>
              <th>Nome da Categoria</th>
              <th>Ações</th>
            </tr>
            </thead>
            <tbody>
              @foreach($categorias as $categoria)
              <tr class="clickable-tr pointer" data-href='{{ url("admin/categorias/$categoria->id") }}'>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nome }}</td>
                <td>
                  <a href='{{ url("admin/categorias/$categoria->id/edit") }}'>
                    <button class="btn btn-primary button-table">Ver/Editar</button>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Id</th>
              <th>Nome da Categoria</th>
              <th>Ações</th>
            </tr>
            </tfoot>
          </table>

          <div class="row">
              {{ $categorias->links() }}

          </div>


        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
