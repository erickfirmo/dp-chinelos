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
					<li class="active menu__item menu__item--current"><a class="menu__link" href="{{ url('/produtos') }}">Produtos <span class="sr-only">(current)</span></a></li>

					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/top2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="#"></a></li>
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

			
			<div id="carrinho">
				<a href="{{ url('/carrinho') }}">
					<span id="count_cart">
						{{ $count_cart }}
					</span>
					<i class="fa fa-shopping-basket"></i>
				</a>
			</div>

		</div>
		
			
        
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->