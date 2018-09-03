<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ 'DP Chinelos | Loja Oficial' }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="chinelos, chnelos estampados" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('vendor/site/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{ asset('vendor/site/assets/css/flexslider.css') }}" type="text/css" media="screen" />
    <link href="{{ asset('vendor/site/assets/css/theme-style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('vendor/site/assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('vendor/site/assets/css/font-awesome.css') }}" rel="stylesheet"> 
    <link href="{{ asset('vendor/site/assets/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css'/>
	<link href="{{ asset('vendor/site/assets/css/jquery-ui.css') }}" rel='stylesheet' type='text/css'/>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body id="home">
	<div id="header">
		@include('site.partials._topbar')
		@include('site.partials._navbar')
    </div>
    <div id="app">
        @yield('content')
    </div>
@include('site.partials._footer')
@include('footer')
@include('site.partials._scripts')
</body>
</html>
