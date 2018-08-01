@extends('site.layouts.site')
@section('title', 'DP Chinelos | Home')
@section('description', 'Loja Oficial')
@section('content')

@include('site.partials._modal_1')
@include('site.partials._modal_2')

<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>PRODUTOS <span></span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i>|</i></li>
								<li>Produtos</li>
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
			<div class="filter-price">
				<h3>Filtrar<span> Preço</span></h3>
					<ul class="dropdown-menu6">
						<li>                
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>			
					</ul>
			</div>
			<div class="css-treeview">
				<h4>CATEGORIAS</h4>
				<ul class="tree-list-pad">
					@foreach($categorias as $categoria)
									<li><a href="mens.html">{{ $categoria }}</a></li>
					@endforeach
							
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div>
		<div class="col-md-9 products-right">
			<h5>COMPRAR <span>PREÇO</span></h5>
			
			<div class="men-wear-top">
				
				<div class="clearfix"></div>
			</div>
			
			@foreach($produtos as $produto)
							@if($produto->status->nome == 'Ativo')
					
								<div class="col-md-4 product-men">
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
											@if($produto->preco)
											<div class="info-product-price">
												<span class="lote-info">R$ 6,00 a partir de 1000 pares*</span>
											</div>
											@endif
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
	</div>
		
		

@include('site.partials._footer')


@endsection