<!-- header -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
	
		<div class="col-md-2 col-sm-2 logo_agile">
			<img src="{{ asset('vendor/site/assets/images/logo.png') }}" style="width:120px; height:auto; margin-top: 0px;">
		</div>


		<div class="col-md-1 col-sm-1 triangle-topleft">

		</div>

		<!-- header-bot -->

		<!-- <div class="col-md-4 header-middle">
			<br>

			<form action="#" method="post">
					<input type="search" name="search" placeholder="Pesquisar" required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div> -->

		


		<div class="col-md-8 col-sm-8 nav-container">
		<nav class="navbar navbar-default">
			


















		
			  <div class="container-fluid">

			  
		
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					
			<div id="carrinho">
				<a href="{{ url('/carrinho') }}">
					<span id="count_cart">
						{{ $count_cart }}
					</span>
					<i class="fa fa-shopping-basket"></i>
				</a>

				
				
				<ul id="toggle-cart">
				@if($cart == null)
				<h4>Nenhum produto no carrinho</h4>

				@else
					<div id="table-cart" class="table-wrapper-scroll-y">
						<div class="col-md-12">
						<table class="table">
							<tbody>
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
								<a href="#">
									<button class="btn btn-danger">Carrinho</button>
								</a>
							</div>

							
						</div>
						
					</div>
					
				@endif
					</ul>

					
			</div>
				
			</div>
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>


				  











				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">

					<li class="menu__item menu__item--current"><a class="menu__link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
					<li class="active menu__item menu__item--current"><a class="menu__link" href="{{ url('/sobre') }}">Sobre <span class="sr-only">(current)</span></a></li>
					<li class="active menu__item menu__item--current"><a class="menu__link" href='{{ url("produtos") }}'>Todos <span class="sr-only">(current)</span></a></li>

					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-12 multi-gd-img">
										<ul class="multi-column-dropdown">

											@foreach($categorias as $categoria)
											<li><a href='{{ url("produtos/categoria/$categoria->id") }}'>{{ $categoria->nome }}</a></li>
											@endforeach
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>

					
					<li class=" menu__item"><a class="menu__link" href="{{ url('/contato') }}">Contato</a></li>
				  </ul>
				</div>
			  </div>


			</nav>

		


		</div>
		
			
        
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->