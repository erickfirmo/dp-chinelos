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
          <h3 class="card-title">Upload de Imagens</h3>
        </div>    
            <!-- /.card-header -->
        <div class="card-body">
          <div class="box box-danger">
            <div class="row">
              <div class="col-md-8">
                <form action="{{ route('admin.imagens.store') }}" method="POST" enctype="multipart/form-data">
                  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                  <input type="file" name="file[]" multiple>&nbsp;
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
