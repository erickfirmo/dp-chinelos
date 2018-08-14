@extends('site.layouts.site')
@section('title', 'DP Chinelos | Home')
@section('description', 'Loja Oficial')
@section('content')

@include('site.partials._modal_1')
@include('site.partials._modal_2')

<div class="page-head_agile_info_w3l" style="min-height: 20px; max-height: 100px; padding: 15px 0;">
	<div class="container">
		<h3>CARRINHO</h3>
		
	</div>
 </div>

 <div class="container-fluid">
	 <br>
	 <div class="row">
		<div class="col-md-6 cart-option-left">
			<a href='{{ url("/produtos") }}'>
				<button class="btn btn-lg btn-danger">CONTINUAR COMPRANDO</button>
			</a>
		</div>
		<div class="col-md-6 cart-option-right">
		 	<a href='{{ url("/produtos") }}'>
				<button class="btn btn-lg btn-success">CONCLUIR PEDIDO</button>
			</a>
		</div>

	 </div>
 </div>


<div class="banner-bootom-w3-agileits">
	<div class="container-fluid">
		<div class="col-md-12">
			<div>
				@if($cart == null)
					<h3>Nenhum produto no carrinho</h3>

				@else 
					<table id="cart-table" class="table">
						<tbody>
							@foreach($cart as $product_cart)
								<tr>
									<td>
										<div class="row">
											<div class="col-md-4">
												<img class="product-thumbnail" src='{{ asset("storage/images/{$product_cart["imagem_principal"]}") }}'>
											</div>
											<div class="col-md-8">
												<h3 class="product-title"><a href="#">{{$product_cart['nome']}}</a></h3>
												<br>
												<p><b>Tamanho: </b>{{ $product_cart['tamanho']}}</p>
												<br>
												<p class="fabricante">Produto vendido e entregue por: <span>DP Chinelos<span></p>
											
										</div>
									</td>
									<td>
										<div class="row">
											<div class="col-md-12 color-quality-right">
												<br>
												<label>&nbsp;&nbsp;&nbsp;Unidades <br><input type="number" value="{{$product_cart['unidades']}}" name="" id="" class="input frm-field required sect"></label><br>
												<span class="remove-product-cart">Excluir</span>
												<form class="edit-unidades">
												
												</form>

												<form class="remove-product-cart">
												
												</form>
												
											</div>
										</div>
									</td>
									<td>
										<br>
										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<p><b>Preço Unitário: </b>R$ {{ number_format($product_cart['preco_total'], 2, ',', '')}}</p>
											</div>
											<div class="col-md-2"></div>
										</div>
										<br>
										<br>
										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<p><b>Preço Unitário: </b>R$ {{ number_format($product_cart['preco_total'], 2, ',', '')}}</p>
											</div>
											<div class="col-md-2"></div>
										</div>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
			</div>
		</div>
	</div>
</div>



<a href="#home" class="scroll" id="toTop" style="display: block;">
	<span id="toTopHover" style="opacity: 1;"> </span>
</a>

@endsection