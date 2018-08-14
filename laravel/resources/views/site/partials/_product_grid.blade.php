<div class="new_arrivals_agile_w3ls_info"> 
	<div class="container">
		<h3 class="wthree_text_info">NOSSOS MODELOS</h3>
		<hr>	
		<div id="horizontalTab">
			<ul class="resp-tabs-list">
			<li style="width: {{ (100 / (count($categorias) + 1)) }}% !important; font-size: 12px; padding: 10px 0;">TODOS</li>	

				@foreach($categorias as $categoria)
					<li style="width: {{ (100 / (count($categorias) + 1)) }}% !important; font-size: 12px; padding: 10px 0;">{{ $categoria->nome }}</li>	
				@endforeach
			</ul>
			<div class="resp-tabs-container">


				<div class="tab1">
				@foreach($produtos as $produto)
					@if($produto->status->nome == 'Ativo')
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
										
										<form id="form_cart{{ $produto->id }}">
											<div class="info-product-price">
												<span class="item_price">R$ {{ str_replace('.', ',', number_format($produto->preco, 2, '.', '')) }}</span>
												<del>R$ {{ str_replace('.', ',', number_format(($produto->preco + 9), 2, '.', '')) }}</del>
											</div>
											<div class="info-product-price">
												<span class="lote-info" >
													@if(($produto->preco_lote) and ($produto->unidades_lote))
														R$ {{ number_format($produto->preco_lote, 2, ',', '')}} a partir de {{ $produto->unidades_lote }} pares*<br>
													@else
														<br>
													@endif
													<div class="row">
														@foreach($produto->tamanhos as $tamanho_do_produto)
															
																	<label class="label-size check-mini" for="{{$produto->id.$tamanho_do_produto->tamanho.$count_size}}" id="{{$produto->id.$tamanho_do_produto->tamanho.$count_size}}-label">
																		{{ $tamanho_do_produto->tamanho }}
																		<input class="radio-size hide" type="checkbox" value="{{ $tamanho_do_produto->tamanho }}" name="tamanho_do_produto" id="{{$produto->id.$tamanho_do_produto->tamanho.$count_size}}">
																	
																		
																	</label>
															
														@endforeach

														
													</div>
												</span>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item button2">
												<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
												<input type="hidden" name="produto_id" value="{{ $produto->id }}"/>
												<input type="hidden" name="nome_do_produto" value="{{ $produto->nome }}"/>
												<input type="hidden" name="categoria_do_produto" value="{{ $produto->categoria_id }}"/>
												<input type="hidden" name="count_size" value="{{ $count_size++ }}"/>

												<input type="hidden" name="unidades_do_produto" value="{{ 1 }}"/>
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<fieldset>
															<button type="submit" name="submit" class="btn btn-success btn-produto" data-toggle="tooltip" data-placement="top" title="Adicionar ao Carrinho">
																<i class="fa fa-shopping-basket">
																</i>
															</button>
														<fieldset>
													</div>
													<div class="col-md-6 col-sm-6">
														<fieldset>
															<a href='{{ url("produto/$produto->id") }}'>
																<button type="button" class="btn btn-success btn-produto" data-toggle="tooltip" data-placement="top" title="Ver Produto">
																	<i class="fa fa-eye"></i>
																</button>
															</a>
														<fieldset>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-md-12 col-sm-12">
														<fieldset>
															<a href='{{ url("produto/$produto->id") }}'>
																<button type="button" class="btn btn-success btn-produto btn-buy" data-toggle="tooltip" data-placement="top" title="Comprar">
																	COMPRAR
																</button>
															</a>
														<fieldset>
													</div>
												</div>
											</div>
										</form>							
									</div>
								</div>
							
					</div>
					@endif
				@endforeach
					<div class="clearfix"></div>
				</div>
				
				<!-- -->			
				@foreach($categorias as $categoria)
					<div class="tab1">
					@foreach($produtos as $produto)
						@if($produto->status->nome == 'Ativo' and $produto->categorias->nome == $categoria->nome)
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
										
										<form id="form_cart{{ $produto->id }}">
											<div class="info-product-price">
												<span class="item_price">R$ {{ str_replace('.', ',', number_format($produto->preco, 2, '.', '')) }}</span>
												<del>R$ {{ str_replace('.', ',', number_format(($produto->preco + 9), 2, '.', '')) }}</del>
											</div>
											<div class="info-product-price">
												<span class="lote-info" >
													@if(($produto->preco_lote) and ($produto->unidades_lote))
														R$ {{ number_format($produto->preco_lote, 2, ',', '')}} a partir de {{ $produto->unidades_lote }} pares*<br>
													@else
														<br>
													@endif
													<div class="row">
														@foreach($produto->tamanhos as $tamanho_do_produto)
															
																	<label class="label-size check-mini" for="{{$produto->id.$tamanho_do_produto->tamanho.$count_size}}" id="{{$produto->id.$tamanho_do_produto->tamanho.$count_size}}-label">
																		{{ $tamanho_do_produto->tamanho }}
																		<input class="radio-size hide" type="checkbox" value="{{ $tamanho_do_produto->tamanho }}" name="tamanho_do_produto" id="{{$produto->id.$tamanho_do_produto->tamanho.$count_size}}">
																	
																		
																	</label>
															
														@endforeach

														
													</div>
												</span>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item button2">
												<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
												<input type="hidden" name="produto_id" value="{{ $produto->id }}"/>
												<input type="hidden" name="nome_do_produto" value="{{ $produto->nome }}"/>
												<input type="hidden" name="categoria_do_produto" value="{{ $produto->categoria_id }}"/>
												<input type="hidden" name="count_size" value="{{ $count_size++ }}"/>

												<input type="hidden" name="unidades_do_produto" value="{{ 1 }}"/>
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<fieldset>
															<button type="submit" name="submit" class="btn btn-success btn-produto" data-toggle="tooltip" data-placement="top" title="Adicionar ao Carrinho">
																<i class="fa fa-shopping-basket">
																</i>
															</button>
														<fieldset>
													</div>
													<div class="col-md-6 col-sm-6">
														<fieldset>
															<a href='{{ url("produto/$produto->id") }}'>
																<button type="button" class="btn btn-success btn-produto" data-toggle="tooltip" data-placement="top" title="Ver Produto">
																	<i class="fa fa-eye"></i>
																</button>
															</a>
														<fieldset>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-md-12 col-sm-12">
														<fieldset>
															<a href='{{ url("produto/$produto->id") }}'>
																<button type="button" class="btn btn-success btn-produto btn-buy" data-toggle="tooltip" data-placement="top" title="Comprar">
																	COMPRAR
																</button>
															</a>
														<fieldset>
													</div>
												</div>
											</div>
										</form>							
									</div>
								</div>
							
						</div>
						@endif
					@endforeach
						<div class="clearfix"></div>
					</div>
				@endforeach
			</div>
		</div>	
	</div>
</div>