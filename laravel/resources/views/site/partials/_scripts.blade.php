
<!-- js -->
<script type="text/javascript" src="{{ asset('vendor/site/assets/js/jquery-2.1.4.min.js') }}"></script>

<script src="{{ asset('vendor/site/assets/js/sweetalert/dist/sweetalert.min.js') }}"></script>

<script src="{{ asset('vendor/site/assets/js/modernizr.custom.js') }}"></script>

<script type="text/javascript" src="{{ asset('vendor/site/assets/js/imagezoom.js') }}"></script>

<script type="text/javascript" src="{{ asset('vendor/site/assets/js/jquery.flexslider.js') }}"></script>

<script>
// Can also be used with $(document).ready()
	$(window).load(function() {
		$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
		});
	});
</script>

	
<!-- script for responsive tabs -->						
<script src="{{ asset('vendor/site/assets/js/easy-responsive-tabs.js') }}"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="{{ asset('vendor/site/assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('vendor/site/assets/js/jquery.countup.js') }}"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('vendor/site/assets/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/site/assets/js/jquery.easing.min.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="{{ asset('vendor/site/assets/js/bootstrap.js') }}"></script>

<script>
	
	document.getElementByClass("resp-tab-item").setAttribute("style", "width 16%; !important");
</script>

<script src="{{ asset('vendor/site/assets/js/responsiveslides.min.js') }}"></script>

<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
		$("#slider3").responsiveSlides({
			auto: true,
			pager: true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			before: function () {
		$('.events').append("<li>before event fired.</li>");
		},
		after: function () {
			$('.events').append("<li>after event fired.</li>");
			}
			});
		});
</script>

<script src="{{ asset('vendor/site/assets/js/modernizr.custom.js') }}"></script>

	<!---->
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
						<script type="text/javascript" src="{{ asset('vendor/site/assets/js/jquery-ui.js') }}"></script>
					 <!---->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('vendor/site/assets/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/site/assets/js/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/site/assets/js/busca-cep.js') }}"></script>

<script type="text/javascript" src="{{ asset('vendor/site/assets/js/slider.js') }}"></script>


<script type="text/javascript">
	$(document).ready(function() {
							
		$().UItoTop({ easingType: 'easeOutQuart' });

	});
</script>


							
<script>

	$(document).ready(function() {

		



		$("input:checkbox").on('click', function() {
			var box = $(this);



			if (box.is(":checked")) {
				var group = "input:checkbox[name='" + box.attr("name") + "']";
				$(group).prop("checked", false);
				
				
				box.parent('label').siblings('label').removeClass('radio-size-clicked');
				box.parent('label').siblings('label').removeClass('radio-size-active');

				box.parent('label').addClass('radio-size-clicked')
				box.prop("checked", true);
			} else {
				box.prop("checked", false);
				box.parent('label').removeClass('radio-size-clicked')
				box.parent('label').removeClass('radio-size-active')
			}

		});

	



	$("form.add-produto").submit(function(e){
		e.preventDefault();
		var tamanho_do_produto = $(this).find("input[name='tamanho_do_produto']:checked").val();

		if(tamanho_do_produto) {	
			var _token = $(this).find("input[name='_token']").val();
			var nome_do_produto = $(this).find("input[name='nome_do_produto']").val();
			var categoria_do_produto = $(this).find("input[name='categoria_do_produto']").val();
			var tamanho_do_produto = $(this).find("input[name='tamanho_do_produto']:checked").val();
			var produto_id = $(this).find("input[name='produto_id']").val();
			var count_size = $(this).find("input[name='count_size']").val();
			var unidades_do_produto = $(this).find("input[name='unidades_do_produto']").val();



			$.ajax({
				url: "{{route('carrinho.store')}}",
				type:'POST',
				data: {_token:_token, produto_id:produto_id, nome_do_produto:nome_do_produto, categoria_do_produto:categoria_do_produto, tamanho_do_produto:tamanho_do_produto, count_size:count_size, unidades_do_produto:unidades_do_produto},
				success: function(data) {	

					if($.isEmptyObject(data.error)){
						var dado = data.radio_size_id;
						$('#'+dado).prop("checked", false);
						$('#count_cart').html(data.count_cart);
						$('#'+dado+'-label').removeClass('radio-size-clicked');
						$('#'+dado+'-label').addClass('radio-size-active');
						$('#total-cart').html(data.total_cart);
						$('#total-table').html(data.total_cart);
						swal("Adicionado ao Carrinho !", " ", "success", {
							buttons: false,
							type: "success",
     						timer: 2000
						});
						
					}else{
						alert('nao deu');
					} 
				}
			});

		} else {
			swal("Escolha um Tamanho !", " ", "warning", {
					buttons: false,
					type: "warning",
					  timer: 1600
				});
		}
   }); 
   

		

	
	


});
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
		{
    trigger : 'focus',
	 placement : 'top',
	 class : 'tooltip'
}
	 }); 
});
</script>


<script>

$(document).ready(function(){
	
	$('.button-link').on('click', function(){
    swal({
      dangerMode: true,
      title: "Remover produto",
      text: "Gostaria de remover este produto do carrinho ?",
      icon: "warning",
      buttons: true,
      buttons: ["NÃO REMOVER", "SIM, REMOVER DO CARRINHO"],
      
    })
    .then((willDelete) => {
      if (willDelete) {
			$(this).parent('form').submit();
      }
    });
  }); 
});

</script>







<script>


							

	$(document).ready(function() {



		$("input:checkbox").on('click', function() {
			var box = $(this);



			if (box.is(":checked")) {
				var group = "input:checkbox[name='" + box.attr("name") + "']";
				$(group).prop("checked", false);
				
				
				box.parent('label').siblings('label').removeClass('radio-size-clicked');
				box.parent('label').siblings('label').removeClass('radio-size-active');

				box.parent('label').addClass('radio-size-clicked')
				box.prop("checked", true);
			} else {
				box.prop("checked", false);
				box.parent('label').removeClass('radio-size-clicked')
				box.parent('label').removeClass('radio-size-active')
				
			}

		});

	



	
		

	
	


});


function editUnidades(f){
	$('#'+f).submit();

}




</script>


<script>

$(document).ready(function() {






$("form.add-pedido").submit(function(e){
e.preventDefault();

	var _token = $(this).find("input[name='_token']").val();
	var cep = $(this).find("input[name='cep']").val();
	var endereco = $(this).find("input[name='endereco']").val();
	var numero = $(this).find("input[name='numero']").val();
	var complemento = $(this).find("input[name='complemento']").val();
	var referencia = $(this).find("input[name='referencia']").val();
	var bairro = $(this).find("input[name='bairro']").val();
	var cidade = $(this).find("input[name='cidade']").val();
	var estado = $(this).find("input[name='estado']").val();
	var forma_de_pagamento = $(this).find("input[name='forma_de_pagamento']:checked").val();

	var total_cart = $(this).find("input[name='total_cart']").val();

	$.ajax({
		url: "{{route('pedido.store')}}",
		type:'POST',
		data: {
			_token:_token,
			cep:cep,
			endereco:endereco,
			numero:numero,
			complemento:complemento,
			referencia:referencia,
			bairro:bairro,
			cidade:cidade,
			estado:estado,
			forma_de_pagamento:forma_de_pagamento,
			total_cart:total_cart
		},
		success: function(data) {	
			swal("Pedido Realizado !", "Em breve entraremos em contato.", "success", {
					buttonConfirm: true,
					buttonConfirmText: "OK",
					type: "success",
				});

				
		}

	});

}); 

}); 











</script>



<script>

setInterval(function(){ location.reload(); }, 60000 * (60 * 2));
//refrash em 2 horas

</script>

