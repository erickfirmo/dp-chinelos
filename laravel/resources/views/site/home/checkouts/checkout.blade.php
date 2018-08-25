@extends('site.layouts.site')
@section('title', 'DP Chinelos | Sobre')
@section('description', 'Loja Oficial')
@section('content')

@include('site.partials._modal_1')
@include('site.partials._modal_2')

<div class="page-head_agile_info_w3l" style="min-height: 20px; max-height: 100px; padding: 15px 0;">
	<div class="container">
		<h3>CHECKOUT</h3>
	</div>
 </div>
 
<!-- Endereço e forma de pagamento -->
<div class="banner_bottom_agile_info">
	<div class="container">
	   @if(Auth::check())
		<div class="agile-contact-grids">
		<form class="add-pedido">
					<div class="row">
						<div class="col-md-8">
						<i></i>
						<h3>Endereço de entrega</h3>
						<br><br>
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>

							<div class="styled-input-date">
								<label>CEP</label>
								<input id="cep" type="text" class="form-control" name="cep" onblur="pesquisacep(this.value);" required>
								
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="styled-input-date">
										<label>Endereço</label><br>
										<input type="text" name="endereco" id="rua" class="form-control" size="60" value="" required>
										<span></span>
									</div>
								</div>
								<div class="col-md-4">
								<div class="styled-input-date">
									<label>Número</label><br>
									<input type="number" name="numero" class="form-control"  required>
									<span></span>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="styled-input-date">
										<label>Complemento</label><br>
										<input type="text" name="complemento" class="form-control">
										<span></span>
									</div>
								</div>
								<div class="col-md-6">
								<div class="styled-input-date">
									<label>Referência</label><br>
									<input type="text" name="referencia" class="form-control">
									<span></span>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="styled-input-date">
										<label>Bairro</label><br>
									<input id="bairro" type="text" name="bairro" class="form-control"  required>
										<span></span>
									</div>
								</div>
								<div class="col-md-6">
								<div class="styled-input-date">
									<label>Cidade</label><br>
									<input id="cidade" type="text" name="cidade" class="form-control" required>
									<span></span>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="styled-input-date">
									<label>Estado</label>
										<input id="uf" size="2" type="text" name="estado" class="form-control" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="styled-input-date">
										<input id="ibge" size="10" type="hidden" name="ibge" class="form-control" required>
									</div>
								</div>
							</div>
							
						</div>
						<div class="col-md-4">
							<i></i>
							<h3>Escolha a forma de pagamento</h3>
							<br>
							<br>
							<br>
							<div class="row">
									<div class="col-md-12 radio-default">
												<label class="radio">
													Cartão de Crédito
													<input type="radio"  name="forma_de_pagamento"  value="credito"><i></i>
												</label>
									</div>
									<div class="col-md-12 radio-default">
											<label class="radio">
												Débito Automático
												<input type="radio"  name="forma_de_pagamento"  value="debito"><i></i>
											</label>
									</div>


									
									<div class="col-md-12 radio-default">
											<label class="radio">
												A Vista
												<input type="radio"  name="forma_de_pagamento"  value="avista"><i></i>
											</label>
									</div>


									<div class="col-md-12 radio-default">				
												<label class="radio">
													Boleto Bancário
													<input type="radio"  name="forma_de_pagamento"  value="boleto"><i></i>
												</label>
									</div>
									
									<div class="col-md-12 radio-default">
											<label class="radio">
												Transferência Bancária
												<input type="radio"  name="forma_de_pagamento"  value="transferencia"><i></i>
											</label>
									</div>



									<input type="hidden"  name="total_cart"  value="{{$total_cart}}"><i></i>



		
							</div>
						</div>

						
					</div>
					<br>
					<div class="row">
					<div class="col-md-2"></div>
							<div class="col-md-10">
							
							<button class="btn btn-lg btn-success" type="submit">ENVIAR PEDIDO</button>

							</div>
						</div>
				</form>
			<div class="clearfix"></div>
		</div>


		@else 
		<div class="row">
				<div class="col-md-6">
					<span>Já possui cadastro?</span>
					&nbsp;
					<a href="#" data-toggle="modal" data-target="#myModal">
						<button class="btn btn-lg btn-success">INDENTIFIQUE-SE</button>
					</a>
				</div>
				<div class="col-md-6">
				<h3 class="agileinfo_sign">Criar Conta</h3>
						<form action="{{ route('register') }}" method="post">
						{{ csrf_field() }}
						<div class="styled-input">
							<input type="text"  name="name" value="{{ old('name') }}"  class="form-control" required>
							<label>Nome</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text"  name="lastname" value="{{ old('lastname') }}" class="form-control" required>
							<label>Sobrenome</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text"  name="telefone" value="{{ old('telefone') }}" class="form-control" required>
							<label>Telefone</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text"  name="celular" value="{{ old('celular') }}" class="form-control"required>
							<label>Celular</label>
							<span></span>
						</div>
						<div class="styled-input">
						<input type="email" name="email" value="{{ old('email') }}" class="form-control"required>
							<label>Email</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="password" name="password" class="form-control"required>
							<label>Senha</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="password" name="password_confirmation"  class="form-control" required>
							<label>Confirmar Senha</label>
							<span></span>
						</div> 
						<br>
						<input class="btn btn-lg btn-success" type="submit" value="CRIAR CONTA">
					</form>


				</div>
			</div>
		</div>
	</div>
		<div class="clearfix"></div>



		@endif
	</div>
</div>
 <!-- // -->


 <div class="contact-w3-agile1 map" data-aos="flip-right">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.187876554052!2d-46.48907098494924!3d-23.59759408466489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce67cf5a90cd07%3A0xb8b396174865e4b1!2sAv.+Mateo+Bei%2C+1650+-+Cidade+S%C3%A3o+Mateus%2C+S%C3%A3o+Paulo+-+SP%2C+03949-010!5e0!3m2!1spt-BR!2sbr!4v1533162886732" class="map" style="border:0" allowfullscreen=""></iframe>
</div>

@include('site.partials._info_icons')


@endsection