@extends('admin.layouts.admin')
@section('title', 'Painel')
@section('description', 'Início')
@section('content')

<div class="container-fluid">

<div class="row">
    <div class="col-12">
    @include('admin.partials._alert')
      <div id="card" class="card">
        <div class="card-header">
          <h3 class="card-title">Estatisticas</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ url('admin/produtos/create') }}">
                <button class="btn btn-success button-table"><i class="fa fa-plus"></i>&nbsp;&nbsp;Adicionar Produto</button>
              </a>
                <div class="input-group-append" style="width:250px; float:right;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">
                  &nbsp;&nbsp;
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
            
          </div>

          <br>
            
          <div class="table-responsive">
            


          </div>

          <div class="row">

          </div>


        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
