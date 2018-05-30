@extends('admin.layouts.admin')
@section('title', 'Galeria')
@section('description', 'Imagens')
@section('content')



<div class="container-fluid">

  <div id="info-icon" class="row">
    <div class="clearfix hidden-md-up"></div>
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon elevation-1"><i class="fa fa-cubes"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Nº de Produtos</span>
          <span class="info-box-number">000</span>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      @include('admin.partials._alert')
      <div id="card" class="card">
        <div class="card-header">
          <h3 class="card-title">Novo Produto</h3>
        </div>    
            <!-- /.card-header -->
        <div class="card-body">
          <div class="box box-danger">
            <div class="row">
              <div class="col-md-8">
                <form action="{{ route('admin.imagens.store') }}" method="POST" enctype="multipart/form-data">
                  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                  <input class="form-control" type="file" name="file[]" multiple>&nbsp;
                  <button type="submit" class="btn btn-primary">Fazer Upload</button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>
@endsection
