@extends('admin.layouts.admin')
@section('title', 'Produtos')
@section('description', $produto->nome)
@section('content')


<div class="container-fluid">
 

<div class="row">
    <div class="col-12">
    @include('admin.partials._alert')
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
              <a href='{{ url("admin/produtos/$produto->id/edit") }}'>
                    <button class="btn btn-primary button-table">Editar</button>
              </a>
              
              <form action="{{ route('admin.produtos.destroy', $produto->id) }}" method="POST">
                {{method_field('DELETE')}}
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <button class="btn btn-danger button-table">Excluir</button>
              
              </form>
            </div>
          </div>

          <br>
            
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
