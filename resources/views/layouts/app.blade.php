<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">


	<!-- All css files are included here. -->
	<!-- Bootstrap fremwork main css -->
	<link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/bootstrap.min.css">
	<!-- Owl Carousel main css -->
	<link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/owl.theme.default.min.css">
	<!-- This core.css file contents all plugings css file. -->
	<link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/core.css">
	<!-- Theme shortcodes/elements style -->
	<link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/shortcode/shortcodes.css">
	<!-- Theme main style -->
	<link rel="stylesheet" href="{{ asset('assets/frontend') }}/style.css">
	<!-- Responsive css -->
	<link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/responsive.css">
	<!-- User style -->
	<link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/custom.css">


	<!-- Modernizr JS -->
	<script src="{{ asset('assets/frontend') }}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<!-- Body main wrapper start -->
	<div class="wrapper fixed__footer">
		<x-header-component />
		<!-- Start Feature Product -->
		@yield('content')
		<x-footer-component />
	</div>
	<!-- Body main wrapper end -->
	<!-- QUICKVIEW PRODUCT -->

	<!-- END QUICKVIEW PRODUCT -->
	<!-- Placed js at the end of the document so the pages load faster -->

	<!-- jquery latest version -->
	<script src="{{ asset('assets/frontend') }}/js/vendor/jquery-1.12.0.min.js"></script>
	<!-- Bootstrap framework js -->
	<script src="{{ asset('assets/frontend') }}/js/bootstrap.min.js"></script>
	<!-- All js plugins included in this file. -->
	<script src="{{ asset('assets/frontend') }}/js/plugins.js"></script>
	<script src="{{ asset('assets/frontend') }}/js/slick.min.js"></script>
	<script src="{{ asset('assets/frontend') }}/js/owl.carousel.min.js"></script>
	<!-- Waypoints.min.js. -->
	<script src="{{ asset('assets/frontend') }}/js/waypoints.min.js"></script>
	<!-- Main js file that contents all jQuery plugins activation. -->
	<script src="{{ asset('assets/frontend') }}/js/main.js"></script>

</body>

</html>
