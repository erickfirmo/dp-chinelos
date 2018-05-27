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
            <br>
            
            <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('admin.produtos.update', $produto->id)}}" method="POST">
              {{method_field('PUT')}}
              <div class="box box-danger">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <label>Nome do Produto</label>
                        <input value="{{ $produto->nome }}" name="nome" type="text" class="form-control" style="width: 100%;">
                    </div>

                    <div class="form-group">
                      <label>Categoria</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option disabled selected value> -- </option>
                        <option>Times</option>
                        <option>Casamento</option>
                        <option>Formatura</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Quantidade</label>
                        <input value="{{ $produto->quantidade }}" name="quantidade" type="number" min="0" class="form-control" style="width: 100%;">
                    </div>
                    <div class="form-group">
                        <label>Preço</label>
                        <input value="{{ $produto->preco }}" name="preco" type="text" class="form-control mask-real" style="width: 100%;">
                    </div>
                  </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea  value="{{ $produto->descricao }}" name="descricao" class="form-control" style="width:100%;"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary r-button">Salvar</button>
                    
                    <a href="#">
                      <button class="btn btn-danger r-button">Excluir</button>
                    </a>

                    <a href="{{ url('admin/produtos/') }}">
                      <button type="button" class="btn btn-secondary r-button"></i>Cancelar</button>
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
