@extends('layouts.app')
@section('content')
	<section class="categories-slider-area bg__white">
		<div class="container">
			<div class="row">
				<!-- Start Left Feature -->
				<x-mainslider-component />
				<x-maincategory-component />
				<!-- End Left Feature -->
			</div>
		</div>
	</section>
	<!-- End Feature Product -->
	<div class="only-banner ptb--100 bg__white">
		<div class="container">
			<div class="only-banner-img">
				<a href="shop-sidebar.html"><img src="{{ asset('assets/frontend') }}/images/bg/banner-1.jpg" alt="new product"></a>
			</div>
		</div>
	</div>
	<!-- Start Our Product Area -->
	<x-jewelry-watches-component />
	<!-- End Our Product Area -->
	<div class="only-banner ptb--100 bg__white">
		<div class="container">
			<div class="only-banner-img">
				<a href="shop-sidebar.html"><img src="{{ asset('assets/frontend') }}/images/bg/banner-2.jpg" alt="new product"></a>
			</div>
		</div>
	</div>
	<!-- Start Our Product Area -->
	{{-- Bags And Shoes --}}
	<x-bag-shoes-component />
	<!-- End Our Product Area -->
	<div class="only-banner bg__white">
		<div class="container">
			<div class="only-banner-img">
				<a href="shop-sidebar.html"><img src="{{ asset('assets/frontend') }}/images/bg/banner-3.jpg" alt="new product"></a>
			</div>
		</div>
	</div>
	<!-- Start Our Product Area -->
	{{-- Toys and kit --}}
	<x-toys-kit-component />


	<!-- End Our Product Area -->
	<!-- Start Blog Area -->
	<section class="htc__blog__area bg__white pb--130">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section__title section__title--2 text-center">
						<h2 class="title__line">Latest News</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incididunt ut
							labore et dolore magna aliqua. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="blog__wrap clearfix mt--60 xmt-30">
					<!-- Start Single Blog -->
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="blog foo">
							<div class="blog__inner">
								<div class="blog__thumb">
									<a href="blog-details.html">
										<img src="{{ asset('assets/frontend') }}/images/blog/product-1.jpg" alt="blog images">
									</a>
									<div class="blog__post__time">
										<div class="post__time--inner">
											<span class="date">14</span>
											<span class="month">sep</span>
										</div>
									</div>
								</div>
								<div class="blog__hover__info">
									<div class="blog__hover__action">
										<p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit
												consectetu.</a></p>
										<ul class="bl__meta">
											<li>By :<a href="#">Admin</a></li>
											<li>Product</li>
										</ul>
										<div class="blog__btn">
											<a class="read__more__btn" href="blog-details.html">read more</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Blog -->
					<!-- Start Single Blog -->
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="blog foo">
							<div class="blog__inner">
								<div class="blog__thumb">
									<a href="blog-details.html">
										<img src="{{ asset('assets/frontend') }}/images/blog/product-2.png" alt="blog images">
									</a>
									<div class="blog__post__time">
										<div class="post__time--inner">
											<span class="date">14</span>
											<span class="month">sep</span>
										</div>
									</div>
								</div>
								<div class="blog__hover__info">
									<div class="blog__hover__action">
										<p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit
												consectetu.</a></p>
										<ul class="bl__meta">
											<li>By :<a href="#">Admin</a></li>
											<li>Product</li>
										</ul>
										<div class="blog__btn">
											<a class="read__more__btn" href="blog-details.html">read more</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Blog -->
					<!-- Start Single Blog -->
					<div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
						<div class="blog foo">
							<div class="blog__inner">
								<div class="blog__thumb">
									<a href="blog-details.html">
										<img src="{{ asset('assets/frontend') }}/images/blog/product-3.jpg" alt="blog images">
									</a>
									<div class="blog__post__time">
										<div class="post__time--inner">
											<span class="date">14</span>
											<span class="month">sep</span>
										</div>
									</div>
								</div>
								<div class="blog__hover__info">
									<div class="blog__hover__action">
										<p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit
												consectetu.</a></p>
										<ul class="bl__meta">
											<li>By :<a href="#">Admin</a></li>
											<li>Product</li>
										</ul>
										<div class="blog__btn">
											<a class="read__more__btn" href="blog-details.html">read more</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Blog -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog Area -->
@endsection
