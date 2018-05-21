<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Admin' }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="vendor/adminlte/login/style.css">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!--libraries-->
    <!--<script src="../../libs/fonts/fontawesome/svg-with-js/js/fontawesome-all.min.js"></script>-->
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <!--<script src="libs/jquery/jquery-mask-plugin/dist/jquery.mask.min.js"></script>-->
    <script src="libs/popper.js/dist/umd/popper.js"></script>
    <script src="vendor/adminlte/login/main.js"></script>
</body>
</html>
