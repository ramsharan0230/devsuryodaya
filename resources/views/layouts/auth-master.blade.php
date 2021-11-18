<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lion-admin-templates.multipurposethemes.com/bs5/template/vertical/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Nov 2021 06:12:07 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    <title>@yield('title') | Suryodaya Inc.</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('src/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('src/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('src/css/skin_color.css') }}">

</head>
	
<body class="hold-transition theme-primary bg-img">
	
	<div class="container h-p100">
		@yield('content')
	</div>


	<!-- Vendor JS -->
	<script src="{{ asset('src/js/vendors.min.js') }}"></script>
	<script src="{{ asset('src/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>	

</body>

</html>
