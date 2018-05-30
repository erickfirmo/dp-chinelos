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
          <h3 class="card-title">Imagens</h3>
        </div>
        <div class="card-body">
          <div class="row">

            <div class="col-md-8">
              <form action="{{ route('admin.imagens.store') }}" method="POST" enctype="multipart/form-data">
                  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                  
                  <button type="submit" class="btn btn-success">Fazer Upload</button>
                  <input type="file" name="file[]" multiple>&nbsp;
              </form>
            </div>
            <div class="col-md-4">
              <div class="input-group-append" style="width:250px; float:right;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">
                &nbsp;&nbsp;
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>

          <br>
          
          <div class="row box-galery">
          @foreach($images as $image)
            <div class="col-md-2 col-sm-2 col-4 box-image">
              <img src='{{ asset("storage/images/{$image->url}") }}' alt='{{ $image->nome }}' class="img-fluid thumbnail-galery">
            </div>
          @endforeach
          </div>



          <div class="row">
            {{ $images->links() }}
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
