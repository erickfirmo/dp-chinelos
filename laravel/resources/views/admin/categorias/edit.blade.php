@extends('admin.layouts.admin')
@section('title', 'Editar')
@section('description', $categoria->categoria)
@section('content')


<div class="container-fluid"> 

  <div class="row">
      <div class="col-12">

      @include('admin.partials._alert')
        <div id="card" class="card">
          <div class="card-header">
            <h3 class="card-title">Editar Categoria</h3>
          </div>
            
            <!-- /.card-header -->
          <div class="card-body">
            <form id="category-save-form" action="{{ route('admin.categorias.update', $categoria->id)}}" method="POST">
              {{method_field('PUT')}}
              <div class="box box-danger">
                <div class="row">

                  <div class="col-md-8">
                    <div class="form-group">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <label>Nome da Categoria</label>
                        <input value="{{ $categoria->nome }}" name="nome" type="text" class="form-control" style="width: 100%;">
                    </div>
                  </div>

                </div>
              </div>
            </form>

            <div class="row">
              <div class="col-md-12">
                <button id="category-save-button" type="submit" class="btn btn-primary r-button">Salvar</button>
            
                <a href="{{ url('admin/categorias/') }}">
                  <button type="button" class="btn btn-secondary r-button"></i>Cancelar</button>
                </a>

                <form id="category-exclude-form" action="{{ route('admin.categorias.destroy', $categoria->id) }}" method="POST">
                  {{method_field('DELETE')}}
                  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                </form>
                <button id="category-exclude-button" type="submit" class="btn btn-danger button-table">Excluir</button>


              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
