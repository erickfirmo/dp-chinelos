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
	   <div class="agile-contact-grids">
		<form action="{{ route('pedido.store') }}" method="POST">
					<div class="row">
						<div class="col-md-6">
						<i></i>
						<h3>Escolha a forma do envio</h3>
						{{ csrf_field() }}
							<div class="styled-input-date">
								<label>CEP</label>
								<input type="text" class="form-control" name="cep" value="{{ old('cep') }}" required>
								
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="styled-input-date">
										<label>Endereço</label><br>
										<input type="text" name="endereco" class="form-control"  value="{{ old('endereco') }}" required>
										<span></span>
									</div>
								</div>
								<div class="col-md-4">
								<div class="styled-input-date">
									<label>Número</label><br>
									<input type="number" name="numero" class="form-control"  value="{{ old('numero') }}" required>
									<span></span>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="styled-input-date">
										<label>Complemento</label><br>
										<input type="text" name="complemento" class="form-control"  value="{{ old('complemento') }}" required>
										<span></span>
									</div>
								</div>
								<div class="col-md-6">
								<div class="styled-input-date">
									<label>Referência</label><br>
									<input type="text" name="referencia" class="form-control"  value="{{ old('referencia') }}" required>
									<span></span>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="styled-input-date">
										<label>Bairro</label><br>
										<input type="text" name="bairro" class="form-control"  value="{{ old('bairro') }}" required>
										<span></span>
									</div>
								</div>
								<div class="col-md-6">
								<div class="styled-input-date">
									<label>Cidade</label><br>
									<input type="text" name="cidade" class="form-control"  value="{{ old('cidade') }}" required>
									<span></span>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="styled-input-date">
										<label>Estado</label><br>
											<select name="estado">
											<option value="AC">Acre</option>
											<option value="AL">Alagoas</option>
											<option value="AP">Amapá</option>
											<option value="AM">Amazonas</option>
											<option value="BA">Bahia</option>
											<option value="CE">Ceará</option>
											<option value="DF">Distrito Federal</option>
											<option value="ES">Espírito Santo</option>
											<option value="GO">Goiás</option>
											<option value="MA">Maranhão</option>
											<option value="MT">Mato Grosso</option>
											<option value="MS">Mato Grosso do Sul</option>
											<option value="MG">Minas Gerais</option>
											<option value="PA">Pará</option>
											<option value="PB">Paraíba</option>
											<option value="PR">Paraná</option>
											<option value="PE">Pernambuco</option>
											<option value="PI">Piauí</option>
											<option value="RJ">Rio de Janeiro</option>
											<option value="RN">Rio Grande do Norte</option>
											<option value="RS">Rio Grande do Sul</option>
											<option value="RO">Rondônia</option>
											<option value="RR">Roraima</option>
											<option value="SC">Santa Catarina</option>
											<option value="SP" default>São Paulo</option>
											<option value="SE">Sergipe</option>
											<option value="TO">Tocantins</option>
											</select>
										<span></span>
									</div>
								</div>
							</div>
							
						</div>
						<div class="col-md-6">
						<i></i>
						<h3>Escolha a forma de pagamento</h3>

						<div class="row">



							<div class="col-md-12">
								<div class="colr">
										<label class="radio">
											Cartão de Crédito
											<input type="radio"  name="forma_de_pagamento"  value="credito"><i></i>
										</label>
								</div>
							</div>

							<div class="col-md-12">
								<div class="colr">
									<label class="radio">
										Débito Automático
										<input type="radio"  name="forma_de_pagamento"  value="debito"><i></i>
									</label>
								</div>
							</div>


							<div class="col-md-12">
								<div class="colr">
									<label class="radio">
										A Vista
										<input type="radio"  name="forma_de_pagamento"  value="avista"><i></i>
									</label>
								</div>
							</div>


							<div class="col-md-12">										
								<div class="colr">
										<label class="radio">
											Boleto Bancário
											<input type="radio"  name="forma_de_pagamento"  value="boleto"><i></i>
										</label>
								</div>
							</div>


							<div class="col-md-12">
									<label class="radio">
										Transferência Bancária
										<input type="radio"  name="forma_de_pagamento"  value="transferencia"><i></i>
									</label>
							</div>









						</div>
						<br>


						

						


						
								
								
							
							<button class="btn btn-lg btn-success" type="submit">ENVIAR PEDIDO</button>
						
						
							
 
						</div>
					</div>
				</form>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
 <!-- // -->


 <div class="contact-w3-agile1 map" data-aos="flip-right">	
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
</div>

@include('site.partials._info_icons')


@endsection