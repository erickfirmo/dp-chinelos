@extends('admin.layouts.admin')
@section('title', 'Editar')
@section('description', $produto->nome)
@section('content')


<div class="container-fluid"> 
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

                  <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" style="width:100%;">{{ $produto->descricao }}</textarea>
                  </div>

                <!-- fim col 1-->
                </div>

                <div class="col-md-4">

                <div class="box-image-product">

                    @foreach($imagens_do_produto as $imagem_do_produto)
                      @foreach($imagens as $key => $imagem)
                        @if($imagem->id == $imagem_do_produto)

                        <img src='{{ asset("storage/images/{$imagem->url}") }}' alt='#' class="img-fluid box-main-image">
                        
                        @endif
                      @endforeach
                    @endforeach
                    




                    <div class="row">
                      <div class="col-md-4">
                        <img src='{{ asset("storage/images/001557201806015b10903d483cb.jpeg") }}' alt='#' class="img-fluid box-thumbnail">
                      </div>

                      <div class="col-md-4">
                        <img src='{{ asset("storage/images/001557201806015b10903d483cb.jpeg") }}' alt='#' class="img-fluid box-thumbnail">
                      </div>

                      <div class="col-md-4">
                        <img src='{{ asset("storage/images/001557201806015b10903d483cb.jpeg") }}' alt='#' class="img-fluid box-thumbnail">
                      </div>
                    </div>
                  </div>
                  
                  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Adicionar imagem</button>
                  <!-- Modal -->


                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title">Imagens do Produto</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                          <input type="file" name="file[]" id="#" multiple>
                          <select class="image-picker show-html">
                          
                            @foreach($imagens as $imagem)
                              <option data-img-src='{{ asset("storage/images/{$imagem}") }}' data-img-class="first" data-img-alt="Page {{$imagem}}" value="{{$imagem}}">  Page {{$imagem->id}}}  </option>
                            @endforeach
                          </select>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal">Adicionar</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                        
                      </div> 
                    </div>
                  </div>
                  
                  
                  
                </div>
                <!--Fim col 2-->


              </div>
            </div>
          </form>
        <!--- fim card -->
        </div>

      </div>
    <!-- fim col -->
    </div>
  <!-- fim row -->
  </div>
<!-- fim container -->
</div>



@endsection
