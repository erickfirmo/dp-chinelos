<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>DP Chinelos | Painel Admin</title>
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/daterangepicker/daterangepicker-bs3.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/iCheck/all.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/image-picker/image-picker.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/style.css') }}">
</head>


<body class="hold-transition sidebar-mini">
  

<div class="wrapper">

  @include('admin.partials._sidebar')
  
  @include('admin.partials._navbar')
  <div class="content-wrapper" style="min-height: 733px;">
        @include('admin.partials._header')
        @yield('content')
        
  </div>
</div>

<aside class="control-sidebar control-sidebar-dark"></aside>
    
<footer class="main-footer">
  <div class="float-right d-sm-none d-md-block">
    <span>www.dpchinelos.com.br | www.erickfirmo.com.br</span>
  </div>
  <strong>&copy; 2018 - <a href="#">Érick Firmo</a> | Desenvolvedor Web</strong>. Todos os Direitos Reservados.
</footer>

 <!-- jQuery -->
<script src="{{ asset('vendor/adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Popper.js -->
<script src="{{ asset('vendor/adminlte/plugins/popper/umd/popper.min.js') }}"></script>
<!-- Bootstrap 4-->
<script src="{{ asset('vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('vendor/adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('vendor/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('vendor/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- Custom mask -->
<script src="{{ asset('vendor/adminlte/plugins/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/plugins/jquery-mask-money/dist/jquery.maskMoney.min.js') }}"></script>

<script src="{{ asset('vendor/adminlte/plugins/jquery-mask-plugin/dist/custom-mask.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('vendor/adminlte/plugins/select2/select2.full.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.js') }}"></script>
<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="{{ asset('vendor/adminlte/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jVectorMap -->
<script src="{{ asset('vendor/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{ asset('vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS 1.0.2 -->
<script src="{{ asset('vendor/adminlte/plugins/chartjs-old/Chart.min.js') }}"></script>
<!-- date-range-picker and moment -->
<script src="{{ asset('vendor/adminlte/plugins/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('vendor/adminlte/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('vendor/adminlte/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{ asset('vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('vendor/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('vendor/adminlte/plugins/fastclick/fastclick.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('vendor/adminlte/plugins/select2/select2.full.min.js') }}"></script>

<script src="{{ asset('vendor/adminlte/dist/js/clickable-row.js') }}"></script>

<script src="{{ asset('vendor/adminlte/plugins/sweetalert/dist/sweetalert.min.js') }}"></script>

<script src="{{ asset('vendor/adminlte/plugins/sweetalert/dist/custom-sweetalert.js') }}"></script>

<script src="{{ asset('vendor/adminlte/plugins/image-picker/image-picker.min.js') }}"></script>


</body>
</html>


    