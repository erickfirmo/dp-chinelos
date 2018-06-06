@extends('admin.layouts.admin')
@section('title', 'Galeria')
@section('description', 'Imagens')
@section('content')

<div class="container-fluid">


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
          @foreach($imagens as $imagem)
            <div class="col-md-2 col-sm-2 col-4 box-thumbnail">
              <img src='{{ asset("storage/images/{$imagem->url}") }}' alt='{{ $imagem->nome }}' class="img-fluid thumbnail-galery">
            </div>
          @endforeach
          </div>



          <div class="row">
            {{ $imagens->links() }}
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
