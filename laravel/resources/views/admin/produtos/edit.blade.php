@extends('admin.layouts.admin')
@section('title', 'Editar')
@section('description', $produto->nome)
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
            <h3 class="card-title">Editar Produto</h3>
          </div>
            
            <!-- /.card-header -->
          <div class="card-body">
            <form id="product-save-form" action="{{ route('admin.produtos.update', $produto->id)}}" method="POST">
              {{method_field('PUT')}}
              <div class="box box-danger">
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <label>Nome do Produto</label>
                        <input value="{{ $produto->nome }}" name="nome" type="text" class="form-control" style="width: 100%;">
                    </div>

                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria_id" class="form-control select2" style="width: 100%;">
                        <option disabled> -- </option>
                        @foreach($categorias as $key => $categoria)
                          <option value='{{ $key }}' 
                          @if($key == $produto->categorias->id)
                            selected="selected"
                          @endif
                          >{{ $categoria }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <select name="status_id" class="form-control select2" style="width: 100%;">
                        <option disabled> -- </option>
                        @foreach($status as $key => $status)
                          <option value='{{ $key }}' 
                          @if($key == $produto->status->id)
                            selected="selected"
                          @endif
                          >{{ $status }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label>Unidades</label>
                        <input value="{{ $produto->unidades }}" name="quantidade" type="number" min="0" class="form-control" style="width: 100%;">
                    </div>
                    <div class="form-group">
                        <label>Preço</label>
                        <input data-thousands="" data-decimal="." maxlength="9" value="{{ $produto->preco }}" name="preco" type="text" class="form-control mask-real" style="width: 100%;">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <img src="http://www.amplicel.com/wp-content/themes/highstand/assets/images/default.jpg" alt="#" class="img-fluid">
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea name="descricao" class="form-control" style="width:100%;">{{ $produto->descricao }}</textarea>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <div class="row">
              <div class="col-md-12">

                <button id="product-save-button" type="submit" class="btn btn-primary r-button">Salvar</button>
            

                <a href="{{ url('admin/produtos/') }}">
                  <button type="button" class="btn btn-secondary r-button"></i>Cancelar</button>
                </a>

                <form id="product-exclude-form" action="{{ route('admin.produtos.destroy', $produto->id) }}" method="POST">
                  {{method_field('DELETE')}}
                  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                  
                </form>
                <button id="product-exclude-button" type="submit" class="btn btn-danger button-table">Excluir</button>
                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
