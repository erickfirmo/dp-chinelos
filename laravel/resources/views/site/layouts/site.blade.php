<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'DP Chinelos | Loja Oficial' }}</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="chinelos, chnelos estampados" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//tags -->
    <link href="{{ asset('vendor/site/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	 <link rel="stylesheet" href="{{ asset('vendor/site/assets/css/flexslider.css') }}" type="text/css" media="screen" />
    <link href="{{ asset('vendor/site/assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('vendor/site/assets/css/font-awesome.css') }}" rel="stylesheet"> 
    <link href="{{ asset('vendor/site/assets/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css'/>
	 <link href="{{ asset('vendor/site/assets/css/jquery-ui.css') }}" rel='stylesheet' type='text/css'/>
	 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

	 <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	 <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
	

    
</head>
<body>
		@include('site.partials._topbar')
		@include('site.partials._header')
    <div id="app">
        @yield('content')
    </div>



	 
<!-- js -->
<script type="text/javascript" src="{{ asset('vendor/site/assets/js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
<script src="{{ asset('vendor/site/assets/js/modernizr.custom.js') }}"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>


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

	<!-- //cart-js --> 
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
<script type="text/javascript" src="{{ asset('vendor/site/assets/js/single-product.js') }}"></script>

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
    
</body>
</html>
