@extends('site.layouts.site')
@section('title', 'DP Chinelos | Home')
@section('description', 'Loja Oficial')
@section('content')

@include('site.partials._modal_1')
@include('site.partials._modal_2')
@include('site.partials._carousel')






    					
<!-- /new_arrivals --> 
<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">NOSSOS<span> MODELOS</span></h3>
		    <hr class="hr-default">		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
						<li style="width: {{ (100 / (count($categorias) + 1) ) }}% !important; font-size: 12px; padding: 10px 0;"> TODOS</li>

							@foreach($categorias as $categoria)
								<li style="width: {{ (100 / (count($categorias) + 1)) }}% !important; font-size: 12px; padding: 10px 0;"> {{ $categoria }}</li>
								
							@endforeach
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->

					<div class="tab1">
						@foreach($produtos as $produto)
							@if($produto->status->nome == 'Ativo')
					
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
											<h4><a href='{{ url("produto/$produto->id") }}'>{{ $produto->nome }}</a></h4>
											<div class="info-product-price">
												<span class="item_price">R$ {{ str_replace('.', ',', number_format($produto->preco, 2, '.', '')) }}</span>
												<del>R$ {{ str_replace('.', ',', number_format(($produto->preco + 9), 2, '.', '')) }}</del>
											</div>
											@if($produto->preco_lote)
											<div class="info-product-price">
												<span class="lote-info">R$ {{ number_format($produto->preco_lote, 2, ',', '')}} a partir de 1000 pares*</span>
											</div>
											@endif
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
												<form id="form_cart{{ $produto->id }}">
													<fieldset>
														<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
														<input type="hidden" name="produto_do_carrinho" value="{{ $produto->id }}"/>
														<input type="submit" name="submit" value="Comprar" class="button"/>
													</fieldset>
												</form>
											</div>								
										</div>
									</div>
								</div>
							@endif
						@endforeach
							<div class="clearfix"></div>
						</div>
						<!--//tab-->

				@foreach($categorias as $categoria)
					
					<div class="tab1">
						@foreach($produtos as $produto)
							@if(($produto->status->nome == 'Ativo') and ($produto->categorias->nome == $categoria))
					
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
											<h4><a href='{{ url("produto/$produto->id") }}'>{{ $produto->nome }}</a></h4>
											<div class="info-product-price">
												<span class="item_price">R$ {{ str_replace('.', ',', number_format($produto->preco, 2, '.', '')) }}</span>
												<del>R$ {{ str_replace('.', ',', number_format(($produto->preco + 9), 2, '.', '')) }}</del>
											</div>
											@if($produto->preco_lote)
											<div class="info-product-price">
												<p><span class="lote-info">R$ 6,00 a partir de 1000 pares*</span></p>
											</div>
											@endif
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
												<form id="form_cart{{ $produto->id}}">
													<fieldset>
														<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
														<input type="hidden" name="produto_do_carrinho" value="{{ $produto->id }}"/>
														<input type="submit" name="submit" value="Comprar" class="button"/>
													</fieldset>
												</form>
											</div>								
										</div>
									</div>
								</div>
							@endif
						@endforeach
							<div class="clearfix"></div>
						</div>
						<!--//tab-->
					@endforeach

					</div>
				</div>	
			</div>
		</div>
	<!-- //new_arrivals --> 





@include('site.partials._banner_parallax')


<!-- Contato -->
<div class="banner_bottom_agile_info">
	<div class="container">
	   <div class="agile-contact-grids">
				<div class="agile-contact-left">
					<div class="col-md-6 address-grid">
						<h4> Informações<span></span></h4>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Telefone</p><span>(11) 2222-3333</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-whatsapp" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Whatsapp</p><span>(11) 92222-3333</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Email </p><a href="mailto:info@example.com">contato@dpchinelos.com.br</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Endereço</p><span>Rua Harry Dannemberg, 000 - Vila Carmosina</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
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
					<div class="col-md-6 contact-form">
						<h4 class="white-w3ls">Contato<span></span></h4>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Nome</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<textarea name="Message" required=""></textarea>
								<label>Mensagem</label>
								<span></span>
							</div>	 
							<input type="submit" value="ENVIAR">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>
 <!--//contact-->


 <div class="contact-w3-agile1 map" data-aos="flip-right">
			
		   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
	   </div>


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