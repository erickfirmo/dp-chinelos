@extends('admin.layouts.admin')
@section('title', 'Produtos')
@section('description', 'Produtos da Loja')
@section('content')


<div class="container-fluid">
  <!-- HEADER -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Meus Produtos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Loja</a></li>
          <li class="breadcrumb-item active">Produtos</li>
          <li class="breadcrumb-item active">Lista de Produtos</li>
        @if (Auth::guest())
        @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
            </a>

            <ul class="dropdown-menu" role="menu">
              <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link logout" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Sair
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
        @endif
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="clearfix hidden-md-up"></div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-info elevation-1"><i class="fa fa-cubes"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Nº de Produtos</span>
        <span class="info-box-number">000</span>
      </div>
    </div>
  </div>
</div>


<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lista de Produtos</h3>
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
              <a href="#">
                <button class="btn btn-success button-table"><i class="fa fa-plus"></i>&nbsp;&nbsp;Adicionar Produtos</button>
              </a>
            </div>
          </div>

          <br>
            
          <table id="example1" class="table table-bordered table-hover">


          


            <thead>
            <tr>
              <th>Id</th>
              <th>Produto</th>
              <th>Descrição</th>
              <th>Quantidade</th>
              <th>Preço</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 4.0
              </td>
              <td>Win 95+</td>
              <td> 4</td>
              <td>X</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 5.0
              </td>
              <td>Win 95+</td>
              <td>5</td>
              <td>C</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 5.5
              </td>
              <td>Win 95+</td>
              <td>5.5</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 6
              </td>
              <td>Win 98+</td>
              <td>6</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet Explorer 7</td>
              <td>Win XP SP2+</td>
              <td>7</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>AOL browser (AOL desktop)</td>
              <td>Win XP</td>
              <td>6</td>
              <td>A</td>
            </tr>
            
            </tbody>
            <tfoot>
            <tr>
            <th>Id</th>
            <th>Produto</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Preço</th>
            </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
