@extends('admin.layouts.admin')
@section('title', 'Editar Produto')
@section('description', 'Editar Produto')
@section('content')



<div class="container-fluid">
  

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

          <form id="product-save-form" action="{{ route('admin.produtos.update', $produto->id)}}" method="POST" enctype="multipart/form-data">
            {{method_field('PUT')}}
              <div class="box box-danger">
                <div class="row">

                  <div class="col-md-8">
                    <div class="form-group">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                      <label>Nome do Produto</label>
                      <input name="nome" type="text" value="{{ old('nome') }}" class="form-control" maxlength="30" style="width: 100%;" autofocus>
                    </div>

                    <div class="row">
                    
                      
                  
                      

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Preço</label>
                          <input data-thousands="" data-decimal="." maxlength="9" name="preco" type="text" value="{{ old('preco') }}" class="form-control mask-real" style="width: 100%;">
                        </div>

                        <div class="form-group">
                          <label>Unidades em Estoque</label>
                          <input name="unidades" type="number" min="0" value="{{ old('unidades') }}" class="form-control" style="width: 100%;">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Preço por Lote</label>
                          <input data-thousands="" data-decimal="." maxlength="9" name="preco_lote" type="text" value="{{ old('preco_lote') }}" class="form-control mask-real" style="width: 100%;">
                        </div>
                        <div class="form-group">
                          <label>Unidades por Lote</label>
                          <input name="unidades_lote" type="number" min="0" value="{{ old('unidades_lote') }}" class="form-control" style="width: 100%;">
                        </div>
                      </div>


                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Tamanhos</label>
                          <br>
                          <div class="row">
                            @foreach($tamanhos as $key => $tamanho)

                            <div class="col-md-6">
                              <!-- boolean -->
                              <input name="tamanho_id[]" type="checkbox" value="{{ $key }}"
                              
                              @foreach($tamanhoDoProduto)


                              @endforeach
                              
                              
                              
                              @if($key == $produto->status->id)
                                selected="selected"
                              @endif
                              >&nbsp;&nbsp;&nbsp;&nbsp;{{ $tamanho }}
                            </div>
                            <br>
                            <br>
                            @endforeach
                          </div>
                        </div>
                      </div>
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
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" style="width:100%;"></textarea>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <!-- main image -->
                  
                    <label>Imagem Principal</label>
                    <div class="box-image-product">
                      <img src='{{ asset("storage/images/{$produto->imagem_principal}") }}' alt='#' class="img-fluid box-main-image" id="img1">
                    </div>
                    <input id="imagem_principal" type="file" name="file1">&nbsp;
  
                    <br><hr>
  
                    <label>Imagem 2</label>
                    <div class="box-image-product">
                    @if($produto->imagem_2 == null)
                      <img src="{{ asset('vendor/adminlte/dist/img/noimage.jpeg') }}" alt='#' class="img-fluid box-main-image" id="img2">
  
                      @else
  
                      <img src='{{ asset("storage/images/{$produto->imagem_2}") }}' alt='#' class="img-fluid box-main-image" id="img2">
  
                      @endif
                    </div>
                    <input id="imagem_2" type="file" name="file2">&nbsp;
  
                    <br><hr>
  
                    <label>Imagem 3</label>
                    <div class="box-image-product">
                      @if($produto->imagem_3 == null)
                        <img src="{{ asset('vendor/adminlte/dist/img/noimage.jpeg') }}" alt='#' class="img-fluid box-main-image" id="img3">
                      @else
                        <img src='{{ asset("storage/images/{$produto->imagem_3}") }}' alt='#' class="img-fluid box-main-image" id="img3">
                      @endif
                    </div>
                    <input id="imagem_3" type="file" name="file3">&nbsp; 

                    
                  </div>
                </div>
                
                <br>

                
              </div>
            </form>


            <div class="row">
                  <div class="col-md-12">
                  
                    <button id="product-save-button" type="submit" class="btn btn-primary r-button">Salvar</button>

                    <a href="{{ url('admin/produtos/') }}">
                    <button type="button" class="btn btn-secondary r-button">Cancelar</button>
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


@endsection
