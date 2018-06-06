@extends('admin.layouts.admin')
@section('title', 'Adicionar Categoria')
@section('description', 'Nova Categoria')
@section('content')



<div class="container-fluid">
  


<div class="row">
    <div class="col-12">

    @include('admin.partials._alert')
      <div id="card" class="card">

      
        <div class="card-header">
          <h3 class="card-title">Nova Categoria</h3>
        </div>
          <br>

          
          <!-- /.card-header -->
          <div class="card-body">

            <form action="{{ route('admin.categorias.store') }}" method="POST">
              <div class="box box-danger">
                <div class="row">
                  <div class="col-md-8">
                      <div class="form-group">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <label>Nome da Categoria</label>
                        <input name="nome" type="text" class="form-control" style="width: 100%;">
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                  
                  <button type="submit" class="btn btn-primary r-button">Salvar</button>
                  
                      <a href="{{ url('admin/categorias/') }}">
                        <button type="button" class="btn btn-secondary r-button">Cancelar</button>
                      </a>
                  </div>
                </div>
              </div>
            </form>
            
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
