@extends('admin.layouts.admin')
@section('title', 'Adicionar Produto')
@section('description', 'Novo Produto')
@section('content')



<div class="container-fluid">
  

<div class="row">
    <div class="col-12">
    @include('admin.partials._alert')
      <div id="card" class="card">
        <div class="card-header">
          <h3 class="card-title">Novo Produto</h3>
        </div>
          <br>
          <!-- /.card-header -->
          <div class="card-body">

            <form action="{{ route('admin.produtos.store') }}" method="POST" enctype="multipart/form-data">
              <div class="box box-danger">
                <div class="row">

                  <div class="col-md-8">
                    <div class="form-group">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                      <label>Nome do Produto</label>
                      <input name="nome" type="text" class="form-control" style="width: 100%;" autofocus>
                    </div>

                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria_id" class="form-control select2" style="width: 100%;">
                          <option disabled selected value> -- </option>
                          @foreach($categorias as $key => $categoria)
                            <option value='{{ $key }}'>{{ $categoria }}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <select name="status_id" class="form-control select2" style="width: 100%;">
                          <option disabled selected value> -- </option>
                          @foreach($status as $key => $status)
                            <option value='{{ $key }}'>{{ $status }}</option>
                          @endforeach
                      </select>
                    </div>
                
                    <div class="form-group">
                      <label>Unidades</label>
                      <input name="unidades" type="number" min="0" class="form-control" style="width: 100%;">
                    </div>

                    <div class="form-group">
                      <label>Preço</label>
                      <input data-thousands="" data-decimal="." maxlength="9" name="preco" type="text" class="form-control mask-real" style="width: 100%;">
                    </div>

                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" style="width:100%;"></textarea>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <!-- main image -->

                    <div class="box-image-product">
                    <img src="{{ asset('vendor/adminlte/dist/img/noimage.jpeg') }}" alt='#' class="img-fluid box-main-image" id="img1">
                  </div>
                  <label>Imagem 1</label>
                  <input id="imagem_principal" type="file" name="file1">&nbsp;

                
                  <div class="box-image-product">
                    <img src="{{ asset('vendor/adminlte/dist/img/noimage.jpeg') }}" alt='#' class="img-fluid box-main-image" id="img2">
                  </div>
                  <label>Imagem 2</label>
                  <input id="imagem_2" type="file" name="file2">&nbsp;

                  <div class="box-image-product">
                    <img src="{{ asset('vendor/adminlte/dist/img/noimage.jpeg') }}" alt='#' class="img-fluid box-main-image" id="img3">
                  </div>
                  <label>Imagem 3</label>
                  <input id="imagem_3" type="file" name="file3">&nbsp;

                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Adicionar imagem</button>
                    
                  </div>
                </div>
                
                <br>

                <div class="row">
                  <div class="col-md-12">
                  
                  <button type="submit" class="btn btn-primary r-button">Salvar</button>
                  
                      <a href="{{ url('admin/produtos/') }}">
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


@endsection
