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


<div class="banner-bootom-w3-agileits">
	<div class="container">
			<div class="css-treeview col-md-3 product-men">
				<h4>CATEGORIAS</h4>
				<ul class="tree-list-pad">
						<li><a href="{{ url('/produtos') }}">Todos</a></li>
					@foreach($categorias as $categoria)
						<li><a href='{{ url("produtos/categoria/$categoria->id") }}'>{{ $categoria->nome }}</a></li>
					@endforeach
							
				</ul>
			</div>
			
	
	@foreach($produtos as $key => $produto)
		@if($produto->status->nome == 'Ativo')
				<div class="col-md-3 product-men">
					@include('site.partials._product_box')
				</div>
		@endif
	@endforeach
			
	<div class="clearfix"></div>
	</div>
</div>
		


@endsection