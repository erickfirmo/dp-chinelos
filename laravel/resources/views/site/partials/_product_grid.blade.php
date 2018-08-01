<div class="col-md-3 product-men">
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
			@if($produto->preco_lote)
			<div class="info-product-price">
				<span class="lote-info">R$ {{ number_format($produto->preco_lote, 2, ',', '')}} a partir de 1000 pares*</span>
			</div>
			@endif
			<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
				<form id="form_cart{{ $produto->id }}">
					<fieldset>
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
						<input type="hidden" name="produto_do_carrinho" value="{{ $produto->id }}"/>
						<input type="submit" name="submit" value="Comprar" class="button"/>
					</fieldset>
				</form>
			</div>								
		</div>
	</div>
</div>