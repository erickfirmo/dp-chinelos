@extends('site.layouts.site')
@section('title', 'DP Chinelos | Home')
@section('description', 'Loja Oficial')
@section('content')

@include('site.partials._modal_1')
@include('site.partials._modal_2')

<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
		
			@if($category == TRUE)
			<h3>{{$category->nome}}<span></span></h3>

			@else
			<h3>PRODUTOS <span></span></h3>

			@endif
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Loja</a><i>|</i></li>
								<li>Produtos<i>|</i></li>
								<li>Chinelos</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		<div class="col-md-3 products-left">
			<br>
			<div class="css-treeview">
				<h4>CATEGORIAS</h4>
				<ul class="tree-list-pad">
						<li><a href="{{ url('/produtos') }}">Todos</a></li>
					@foreach($categorias as $categoria)
						<li><a href='{{ url("produtos/categoria/$categoria->id") }}'>{{ $categoria->nome }}</a></li>
					@endforeach
							
				</ul>
			</div>
			
			<div class="clearfix"></div>
			<br>
			<div class="css-treeview">
				<h4>MEU CARRINHO</h4>
				<ul class="tree-list-pad">
						<li><a href="#">Todas</a></li>
					@foreach($categorias as $categoria)
						<li><a href="#">{{ $categoria->nome }}</a></li>
					@endforeach
							
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div>
		<div class="col-md-9 products-right">
			
			<div class="men-wear-top">
				
				<div class="clearfix"></div>
			</div>
			
			@foreach($produtos as $produto)
				@if($produto->status->nome == 'Ativo')
						<div class="col-md-4 product-men">
							@include('site.partials._product_box')
						</div>
				@endif
			@endforeach
			
				
				<div class="clearfix"></div>
		</div>
	</div>
		


@endsection