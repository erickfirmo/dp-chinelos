@extends('site.layouts.site')
@section('title', 'DP Chinelos | Home')
@section('description', 'Loja Oficial')
@section('content')

@include('site.partials._modal_1')
@include('site.partials._modal_2')








       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>{{ $produto->nome }}</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="#">Home</a><i>|</i></li>
								
								<li>{{ $produto->categorias->nome }}<i>|</i></li>
								
								<li>{{ $produto->nome }}</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<ul class="slides">	
						<li data-thumb='{{ asset("storage/images/{$produto->imagem_principal}") }}'>
							<div class="thumb-image"> <img src='{{ asset("storage/images/{$produto->imagem_principal}") }}' data-imagezoom="true" class="img-responsive"> </div>
						</li>
						@if($produto->imagem_2 != null)
						<li data-thumb='{{ asset("storage/images/{$produto->imagem_2}") }}'>
							<div class="thumb-image"> <img src='{{ asset("storage/images/{$produto->imagem_2}") }}' data-imagezoom="true" class="img-responsive"> </div>
						</li>
						@endif
						@if($produto->imagem_3 != null)	
						<li data-thumb='{{ asset("storage/images/{$produto->imagem_3}") }}'>
							<div class="thumb-image"> <img src='{{ asset("storage/images/{$produto->imagem_3}") }}' data-imagezoom="true" class="img-responsive"> </div>
						</li>
						@endif
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3>{{ $produto->nome }}</h3>
					<p><span class="item_price">R$ {{ str_replace('.', ',', number_format($produto->preco, 2, '.', '')) }}</span> <del>R$ {{ str_replace('.', ',', number_format(($produto->preco+9), 2, '.', '')) }}</del></p>
					<p><span class="lote-info-single">R$ 6,00 a partir de 1000 pares*</span></p>
					<div class="rating1">
						
					</div>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Unidades :</h5>
							<input type="number" value="1" min="1" name="quantidade" id="#" class="input frm-field required sect">
						</div>
					</div>
               <br>
					
               <div class="color-quality">
						<div class="color-quality-right">
							<h5>Numeração :</h5>
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">37/38</option>
								<option value="null">39/40</option> 
								<option value="null">41/42</option>					
								<option value="null">43/44</option>								
							</select>
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
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Wing Sneakers">
																	<input type="hidden" name="amount" value="650.00">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Comprar" class="button">
																</fieldset>
															</form>
														</div>
																			
					</div>
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
							  <h6>{{ $produto->nome }}</h6>
							   <p>{{ $produto->descricao }}</p>
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
			@if((($produto->status->nome == 'Ativo') and ($produto->categorias->nome == $categoria_do_produto)) and $produto->nome != $nome_do_produto)
				<div class="col-md-3 product-men">
					<div class="men-pro-item simpleCart_shelfItem">
						<div class="men-thumb-item">
							<img src='{{ asset("storage/images/{$produto->imagem_principal}") }}' alt="" class="pro-image-front">
							<img src='{{ asset("storage/images/{$produto->imagem_principal}") }}' alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href='{{ url("produto/$produto->id") }}' class="link-product-add-cart">Ver Produto</a>
									</div>
								</div>
								<span class="product-new-top">Novo</span>
								
						</div>
						<div class="item-info-product ">
							<h4><a href="single.html">{{ $produto->nome }}</a></h4>
							<div class="info-product-price">
								<span class="item_price">R$ {{ str_replace('.', ',', number_format($produto->preco, 2, '.', '')) }}</span>
								<del>R$ {{ str_replace('.', ',', number_format(($produto->preco + 9), 2, '.', '')) }}</del>
							</div>
							<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="{{ $produto->nome }}" />
														<input type="hidden" name="amount" value="{{ $produto->preco }}" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Comprar" class="button" />
													</fieldset>
												</form>
											</div>
																
						</div>
					</div>
				</div>
			@endif
		@endforeach
					  
                       
						 
					
							<div class="clearfix"> </div>
					<!--//slider_owl-->
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








@include('site.partials._footer')


@endsection