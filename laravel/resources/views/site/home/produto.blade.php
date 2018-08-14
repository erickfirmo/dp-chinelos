@extends('site.layouts.site')
@section('title', 'DP Chinelos')
@section('description', 'Loja Oficial')
@section('content')

@include('site.partials._modal_1')
@include('site.partials._modal_2')









  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<ul class="slides">	
						<li data-thumb='{{ asset("storage/images/{$single_product->imagem_principal}") }}'>
							<div class="thumb-image"> <img src='{{ asset("storage/images/{$single_product->imagem_principal}") }}' data-imagezoom="true" class="img-responsive"> </div>
						</li>
						@if($single_product->imagem_2 != null)
						<li data-thumb='{{ asset("storage/images/{$single_product->imagem_2}") }}'>
							<div class="thumb-image"> <img src='{{ asset("storage/images/{$single_product->imagem_2}") }}' data-imagezoom="true" class="img-responsive"> </div>
						</li>
						@endif
						@if($single_product->imagem_3 != null)	
						<li data-thumb='{{ asset("storage/images/{$single_product->imagem_3}") }}'>
							<div class="thumb-image"> <img src='{{ asset("storage/images/{$single_product->imagem_3}") }}' data-imagezoom="true" class="img-responsive"> </div>
						</li>
						@endif
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3>{{ $single_product->nome }}</h3>
					<p><span class="item_price">R$ {{ str_replace('.', ',', number_format($single_product->preco, 2, '.', '')) }}</span> <del>R$ {{ str_replace('.', ',', number_format(($single_product->preco+9), 2, '.', '')) }}</del></p>
					<p>
						<span class="lote-info-single">
						@if(($single_product->preco_lote) and ($single_product->unidades_lote))
							R$ {{ number_format($single_product->preco_lote, 2, ',', '')}} a partir de {{ $single_product->unidades_lote }} pares*
						@else
							<br>
						@endif
						</span>
					</p>
					<div class="rating1">
						
					</div>

					<form id="form_cart{{ $single_product->id }}">
						<div class="color-quality">
							<div class="color-quality-right">
								<h5>Unidades :</h5>
								<input type="number" value="1" min="1" name="unidades_do_produto" class="input frm-field required sect">
							</div>
						</div>
						<br>
						
						<div class="color-quality">
							<div class="color-quality-right">
								<h5>Tamanhos :</h5>

								@foreach($single_product->tamanhos as $tamanho_do_produto)
									<label class="label-size check-lg" for="{{$single_product->id.$tamanho_do_produto->tamanho}}" id="{{$single_product->id.$tamanho_do_produto->tamanho}}-label">
										{{ $tamanho_do_produto->tamanho }}
										<input class="radio-size hide" type="checkbox" value="{{ $tamanho_do_produto->tamanho }}" name="tamanho_do_produto" id="{{$single_product->id.$tamanho_do_produto->tamanho}}">
									</label>
								@endforeach
								
							</div>
						</div>
						
						<div class="occasional">
							<h5>Forma de pagamento :</h5>
							<div class="colr ert">
								<label class="radio"><input type="radio" name="radio" checked=""><i></i>Cartão de Crédito</label>
							</div>
							<div class="colr">
								<label class="radio"><input type="radio" name="radio"><i></i>Débito Automático</label>
							</div>
							<div class="colr">
								<label class="radio"><input type="radio" name="radio"><i></i>A Vista</label>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="occasion-cart">
							<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							
								<fieldset>
									<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
									<input type="hidden" name="produto_id" value="{{ $single_product->id }}"/>
									<input type="hidden" name="nome_do_produto" value="{{ $single_product->nome }}"/>
									<input type="hidden" name="categoria_do_produto" value="{{ $single_product->categoria_id }}"/>
									<input type="submit" name="submit" value="Comprar" class="button"/>
								</fieldset>
							</div>
						</div>
					</form>
								
					<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
						                                   <li class="share">Compartilhe : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
					
		      </div>
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals --> 
	<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li style="width: 15%; font-size: 12px; padding: 10px 0;">Descrição</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  <h6>{{ $single_product->nome }}</h6>
							   <p>{{ $single_product->descricao }}</p>
							</div>
						</div>
						<!--//tab_one-->
						
					</div>
				</div>	
			</div>
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->


	
		<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">Produtos <span>Relacionados</span></h3>

         @foreach($produtos as $produto)
				@if(($produto->status->nome == 'Ativo') and $produto->categorias->nome == $categoria_do_produto)
					@include('site.partials._product_grid')
				@endif
			@endforeach 
					
			<div class="clearfix"> </div>
		</div>
	</div>
 </div>
<!--//single_page-->




@include('site.partials._info_icons')

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>










@endsection