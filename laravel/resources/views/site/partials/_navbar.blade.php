<nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->

    
    <div class="navbar-header" style="padding-left: 80px;">
      
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="box-header">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('vendor/site/assets/images/logo.png') }}" style="width:110px; height:auto; margin-top: 0px;">

      </a>

      <div class="arrow-right"></div>
      </div>
    </div>

    
    <div id="carrinho" style="float:right;">
      <a style="float:right;" href="{{ url('/carrinho') }}">
					<span id="count_cart">
						{{ isset($count_cart) ? $count_cart : 0 }}
					</span>
					<i class="fa fa-shopping-basket"></i>
        </a> 


<ul id="toggle-cart">
	<div class="arrow-up"></div>
	@if(!isset($cart))
	<h4>Nenhum produto no carrinho</h4>

	@else
		<div id="table-cart" class="table-wrapper-scroll-y">
			<div class="col-md-12 table-responsive">
			<table class="table">
				<tbody>
					@if($cart != 0)
						@foreach($cart as $key => $product_cart)
							<tr>

								<td>
									<div class="row">
										<div class="col-md-12">
											<h5 class="product-title">{{$product_cart['nome']}}</h5>
											<img class="product-thumbnail img-thumbnail" src='{{ asset("storage/images/{$product_cart["imagem_principal"]}") }}'>	
										</div>
									</div>

									
									<div class="row">
										<div class="col-md-12">
											<br>
											<p><b>Tamanho: </b>{{$product_cart['tamanho']}}</p>
										</div>
									</div>

									
									<div class="row">
										<div class="col-md-12">
											<br>
											<p><b>Preço Unitário: </b>R$ {{ number_format($product_cart['preco_unitario'], 2, ',', '')}}</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<br>
											<p><b>Preço Total: </b>R$ {{ number_format($product_cart['preco_total'], 2, ',', '')}}</p>
										</div>
									</div>
									<div class="row">
											<div class="col-md-12">
										
											<form id="{{$product_cart['id'].$product_cart['tamanho']}}-cart" action='{{ route("cartedit") }}' method="post" class="set-unidades-form">
												<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
												<br>
												<label>Unidades <br><input type="number" style="padding: 5px 21px;" oninput="editUnidades('{{$product_cart['id'].$product_cart['tamanho']}}-cart')" value="{{$product_cart['unidades']}}" name="edit_unidades" class="input frm-field required sect edit-unidades"></label><br>
												<input type="hidden" name="prod" value="{{$key}}">

											</form>
										
											<form class="remove-product-cart" action='{{ route("carrinho.destroy", $key) }}' method="POST" >
												{{method_field('DELETE')}}
												<input name="_token" type="hidden" value="{{ csrf_token() }}"/>

												<span class="button-link">Excluir</span>
											</form>
										</div>
									</div>




								</td>
							
							</tr>




						@endforeach


					
					@else 

						<h4>Nenhum produto no carrinho</h4>



					@endif
				</tbody>
			</table>
			</div>
		</div>

		
		<div class="col-md-12">
			<div class="row">
				<div class="col-xs-7	col-sm-7	col-md-7	col-lg-7">
					<h4 class="product-title">Total: R$ {{number_format($total_cart, '2', ',', '')}}</h4>
				</div>
				<div class="col-xs-5	col-sm-5	col-md-5	col-lg-5">
						<a href="{{ url('/carrinho') }}">
						<button class="btn btn-danger">Carrinho</button>
					</a>
				</div>
			</div>
		</div>
	@endif
</ul>
				
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right navbar-list">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/sobre') }}">Sobre</a></li>
        
        <li><a href="{{ url('/produtos') }}">Produtos</a></li>

        <li class="dropdown">
          <a href="{{ url('/categorias')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
          @if(isset($categorias))


					
						@foreach($categorias as $categoria)
							<li><a href='{{ url("/produtos/categoria/$categoria->id") }}'>{{$categoria->nome}}</a></li>        
						@endforeach



					@endif
          </ul>
        </li>

        
        <li><a href="{{ url('/contato')}}">Contato</a></li>




        
      </ul>
    </div><!-- /.navbar-collapse -->


    
  
    
  </div><!-- /.container-fluid -->

</nav>
