<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('images/favicon.ico">') }}">
    <title>@yield('title') | Suryodaya Inc. </title>
    <link rel="stylesheet" href="{{ asset('src/css/vendors_css.css') }}">
    <!-- Style-->  
    <link rel="stylesheet" href="{{ asset('src/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/skin_color.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/brands.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/regular.min.css">
	@stack('styles')
     
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
  @include('admin.partials.main-header')
  @include('admin.partials.main-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
      @yield('bradcrumb')
		<!-- Main content -->
		@yield('content')
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
	@include('admin.partials.footer')
	<!-- Vendor JS -->
	<script src="{{ asset('src/js/vendors.min.js') }}"></script>
	<script src="{{ asset('src/js/pages/chat-popup.js') }}"></script>
  	<script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('assets/vendor_components/raphael/raphael.min.js') }}"></script>
	<script src="{{ asset('assets/vendor_components/morris.js/morris.min.js') }}"></script>
	<script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>	
	<script src="{{ asset('assets/vendor_plugins/weather-icons/WeatherIcon.js') }}"></script>
	<script src="{{ asset('assets/vendor_components/moment/min/moment.min.js') }}"></script>
	<script src="{{ asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
	<script src="{{ asset('assets/vendor_components/jquery.peity/jquery.peity.js') }}"></script>
	
	<!-- Lion Admin App -->
	<script src="{{ asset('src/js/demo.js') }}"></script>
	<script src="{{ asset('src/js/template.js') }}"></script>
	<script src="{{ asset('src/js/pages/dashboard.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
	@stack('scripts')
	
</body>

</html>
