@extends('admin.layouts.admin')
@section('title', 'Categorias')
@section('description', 'Lista de Categorias')
@section('content')

<div class="container-fluid">



<div class="row">
    <div class="col-12">
    @include('admin.partials._alert')
      <div id="card" class="card">
        <div class="card-header">
          <h3 class="card-title">Lista de Categorias</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ url('admin/categorias/create') }}">
                <button class="btn btn-secondary button-table"><i class="fa fa-reply"></i>&nbsp;&nbsp;Voltar</button>
              </a>
              <a href="{{ url('admin/categorias/create') }}">
                <button class="btn btn-primary button-table"><i class="fa fa-plus"></i>&nbsp;&nbsp;Adicionar Categoria</button>
              </a>
            </div>
            
          </div>

          <br>
            
          <div class="col-md-12">
            <table id="example1" class="table table-default table-striped">
              <thead>
              <tr>
                <th>Nome da Categoria</th>
                <th>Ações</th>
              </tr>
              </thead>
              <tbody>
                @foreach($categorias as $categoria)
                  @if($categoria->nome !== 'Todos')
                  <tr class="clickable-tr pointer" data-href='{{ url("admin/categorias/$categoria->id") }}'>
                    <td>{{ $categoria->nome }}</td>
                    <td>
                      <a href='{{ url("admin/categorias/$categoria->id/edit") }}'>
                        <button class="btn btn-secondary button-table">Ver/Editar</button>
                      </a>
                    </td>
                  </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
          </div>

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
