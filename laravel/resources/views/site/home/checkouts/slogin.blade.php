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
		<div class="col-md-12">
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
					@if($errors->any())
						<div class="alert alert-danger alert-dismissible in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<h4><i class="icon fa fa-ban"></i> Erro!</h4>
							<ul class="list-unstyled">
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>            
								@endforeach
							</ul>
						</div>
					@endif
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
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
 <!-- // -->


 <div class="contact-w3-agile1 map" data-aos="flip-right">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.187876554052!2d-46.48907098494924!3d-23.59759408466489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce67cf5a90cd07%3A0xb8b396174865e4b1!2sAv.+Mateo+Bei%2C+1650+-+Cidade+S%C3%A3o+Mateus%2C+S%C3%A3o+Paulo+-+SP%2C+03949-010!5e0!3m2!1spt-BR!2sbr!4v1533162886732" class="map" style="border:0" allowfullscreen=""></iframe>
</div>

@include('site.partials._info_icons')


@endsection