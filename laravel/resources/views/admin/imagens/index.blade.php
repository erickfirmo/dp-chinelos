@extends('admin.layouts.admin')
@section('title', 'Galeria de Imagens')
@section('description', 'Galeria de Imagens')
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
          <h3 class="card-title">Imagens</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ url('admin/imagens/create') }}">
                <button class="btn btn-success button-table"><i class="fa fa-plus"></i>&nbsp;&nbsp;Adicionar Imagem</button>
              </a>
                <div class="input-group-append" style="width:250px; float:right;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">
                  &nbsp;&nbsp;
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
            
          </div>

          <div class="row">

          @foreach($images as $image)
            <div class="col-md-2">
              <img src='{{ asset("storage/images/{$image->url}") }}' alt='{{ $image->nome }}' class="img-fluid">
            </div>
          @endforeach

          

            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
