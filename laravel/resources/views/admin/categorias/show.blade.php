@extends('admin.layouts.admin')
@section('title', 'Produtos')
@section('description', $produto->nome)
@section('content')


<div class="container-fluid">
 
<div id="info-icon" class="row">
  <div class="clearfix hidden-md-up"></div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon elevation-1"><i class="fa fa-cubes"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Unidades em estoque</span>
        <span class="info-box-number">{{ $produto->quantidade }}</span>
      </div>
    </div>
  </div>
</div>


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
