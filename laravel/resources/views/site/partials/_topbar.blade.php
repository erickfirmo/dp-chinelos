<!-- topbar -->
<div class="header" id="home">
	<div class="container">
		<ul>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Ligue : 11 2020-2020</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">contato@dpchinelos.com.br</a></li>
			
			@if (Auth::guest())
				<!--<li> <a href="{{ route('login') }}"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Entrar </a></li>
				<li> <a href="{{ route('register') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cadastre-se </a></li> -->
 				<li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Entrar </a></li>
				<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cadastre-se </a></li> 
			@else
				<li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
					<i class="far fa-user"></i>
						{{ Auth::user()->name }}
					</a>
				</li>


				<li>
					<a href="{{ route('logout') }}"
					onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						Sair
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</li>
				
				
			@endif
		</ul>
	</div>
</div>
<!-- //topbar -->