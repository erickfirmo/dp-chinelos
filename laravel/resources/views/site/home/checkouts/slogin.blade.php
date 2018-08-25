@extends('site.layouts.site')
@section('title', 'DP Chinelos | Sobre')
@section('description', 'Loja Oficial')
@section('content')

@include('site.partials._modal_1')
@include('site.partials._modal_2')

@extends('site.layouts.site')
@section('title', 'DP Chinelos | Sobre')
@section('description', 'Loja Oficial')
@section('content')

@include('site.partials._modal_1')
@include('site.partials._modal_2')


<!-- Endereço e forma de pagamento -->
<div class="banner_bottom_agile_info">

	<div class="container">
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
	</div>
</div>
 <!-- // -->


 <div class="contact-w3-agile1 map" data-aos="flip-right">	
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
</div>

@include('site.partials._info_icons')


@endsection