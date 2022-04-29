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
	<div id="quickview-wrapper">
		<!-- Modal -->
		<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal__container" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="modal-product">
							<!-- Start product images -->
							<div class="product-images">
								<div class="main-image images">
									<img alt="big images" src="{{ asset('assets/frontend') }}/images/product/big-img/1.jpg">
								</div>
							</div>
							<!-- end product images -->
							<div class="product-info">
								<h1>Simple Fabric Bags</h1>
								<div class="rating__and__review">
									<ul class="rating">
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
									</ul>
									<div class="review">
										<a href="#">4 customer reviews</a>
									</div>
								</div>
								<div class="price-box-3">
									<div class="s-price-box">
										<span class="new-price">$17.20</span>
										<span class="old-price">$45.00</span>
									</div>
								</div>
								<div class="quick-desc">
									Designed for simplicity and made from high quality materials. Its sleek geometry and
									material combinations creates a modern look.
								</div>
								<div class="select__color">
									<h2>Select color</h2>
									<ul class="color__list">
										<li class="red"><a title="Red" href="#">Red</a></li>
										<li class="gold"><a title="Gold" href="#">Gold</a></li>
										<li class="orange"><a title="Orange" href="#">Orange</a></li>
										<li class="orange"><a title="Orange" href="#">Orange</a></li>
									</ul>
								</div>
								<div class="select__size">
									<h2>Select size</h2>
									<ul class="color__list">
										<li class="l__size"><a title="L" href="#">L</a></li>
										<li class="m__size"><a title="M" href="#">M</a></li>
										<li class="s__size"><a title="S" href="#">S</a></li>
										<li class="xl__size"><a title="XL" href="#">XL</a></li>
										<li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
									</ul>
								</div>
								<div class="social-sharing">
									<div class="widget widget_socialsharing_widget">
										<h3 class="widget-title-modal">Share this product</h3>
										<ul class="social-icons">
											<li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
											<li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a>
											</li>
											<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
											<li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
											<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="addtocart-btn">
									<a href="#">Add to cart</a>
								</div>
							</div><!-- .product-info -->
						</div><!-- .modal-product -->
					</div><!-- .modal-body -->
				</div><!-- .modal-content -->
			</div><!-- .modal-dialog -->
		</div>
		<!-- END Modal -->
	</div>
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
