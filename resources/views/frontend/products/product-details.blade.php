@extends('layouts.app')
@section('content')
	<div>
		<!-- Start Bradcaump area -->
		<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('assets/frontend/images/bg/2.jpg') }}) no-repeat scroll center center / cover ;">
			<div class="ht__bradcaump__wrap">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="bradcaump__inner text-center">
								<h2 class="bradcaump-title">Product Details</h2>
								<nav class="bradcaump-inner">
									<a class="breadcrumb-item" href="/">Home</a>
									<span class="brd-separetor">/</span>
									<a class="breadcrumb-item" href="{{ route('products.index') }}">Product</a>
									<span class="brd-separetor">/</span>
									<span class="breadcrumb-item active">{{ $product->title }}</span>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Bradcaump area -->
		<!-- Start Product Details -->
		<section class="htc__product__details pt--120 pb--100 bg__white">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
						<div class="product__details__container">
							<!-- Start Small images -->
							<ul class="product__small__images" role="tablist">
								<li role="presentation" class="pot-small-img active">
									<a href="#img-tab-1" role="tab" data-toggle="tab">
										<img width="120px" height="140px" src="{{ asset('storage/products/') . '/' . $product->featured_image }}" alt="small-image">
									</a>
								</li>
								@foreach ($product->images as $key => $gallery)
									<li role="presentation" class="pot-small-img">
										<a href="#img-tab-{{ $key + 2 }}" role="tab" data-toggle="tab">
											<img width="120px" height="140px" src="{{ asset('storage/product_gallery') . '/' . $gallery->image }}" alt="small-image">
										</a>
									</li>
								@endforeach
							</ul>
							<!-- End Small images -->
							<div class="product__big__images">
								<div class="portfolio-full-image tab-content">
									<div role="tabpanel" class="tab-pane fade in active product-video-position" id="img-tab-1">
										<img src="{{ asset('storage/products/') . '/' . $product->featured_image }}" alt="full-image">
										<div class="product-video">
											<a class="video-popup" href="{{ $product->video_link }}">
												<i class="zmdi zmdi-videocam"></i> View Video
											</a>
										</div>
									</div>
									@foreach ($product->images as $key => $gallery)
										<div role="tabpanel" class="tab-pane fade product-video-position" id="img-tab-{{ $key + 2 }}">
											<img src="{{ asset('storage/product_gallery') . '/' . $gallery->image }}" alt="full-image">
											<div class="product-video">
												<a class="video-popup" href="{{ $product->video_link }}">
													<i class="zmdi zmdi-videocam"></i> View Video
												</a>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
						<div class="htc__product__details__inner">
							<div class="pro__detl__title">
								<h2>{{ $product->title }}</h2>
							</div>
							<div class="pro__details">
								<p>{{ $product->excerpt }}</p>
							</div>
							<ul class="pro__dtl__prize">
								<li class="old__prize">${{ $product->price }}</li>
								<li>${{ $product->sale_price }}</li>
							</ul>
							<div class="pro__dtl__color">
								<h2 class="title__5">Choose Colour</h2>
								<ul class="pro__choose__color">
									<select class="form-control" style="width: 18%" name="" id="">
										@foreach ($product->colors as $color)
											<option value="">{{ $color->name }}</option>
										@endforeach
									</select>
									{{-- <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i></a></li>
									<li class="perpal"><a href="#"><i class="zmdi zmdi-circle"></i></a></li>
									<li class="yellow"><a href="#"><i class="zmdi zmdi-circle"></i></a></li> --}}
								</ul>
							</div>
							<div class="pro__dtl__size">
								<h2 class="title__5">Size</h2>
								<ul class="pro__choose__size">
									<select class="form-control" style="width: 18%" name="" id="">
										@foreach ($product->sizes as $size)
											<option value="">{{ $size->name }}</option>
										@endforeach
									</select>
								</ul>
							</div>
							<div class="product-action-wrap">
								<div class="prodict-statas"><span>Quantity :</span></div>
								<div class="product-quantity">
									<form id='myform' method='POST' action='#'>
										<div class="product-quantity">
											<div class="cart-plus-minus">
												<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
											</div>
										</div>
									</form>
								</div>
							</div>
							<ul class="pro__dtl__btn">
								<li class="buy__now__btn"><a href="#">Buy Now</a></li>
								<li class="buy__now__btn"><a href="#">Add to Cart</a></li>
								<li><a href="#"><span class="ti-heart"></span></a></li>
								<li><a href="#"><span class="ti-email"></span></a></li>
							</ul>
							<div class="pro__social__share">
								<h2>Share :</h2>
								<ul class="pro__soaial__link">
									<li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
									<li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
									<li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
									<li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Product Details -->
		<!-- Start Product tab -->
		<section class="htc__product__details__tab bg__white pb--120">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
						<ul class="product__deatils__tab mb--60" role="tablist">
							<li role="presentation" class="active">
								<a href="#description" role="tab" data-toggle="tab">Description</a>
							</li>
							<li role="presentation">
								<a href="#sheet" role="tab" data-toggle="tab">Featured</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="product__details__tab__content">
							<!-- Start Single Content -->
							<div role="tabpanel" id="description" class="product__tab__content fade in active">
								<div class="product__description__wrap">
									<div class="product__desc">
										<h2 class="title__6">Details</h2>
										<p>{!! $product->description !!}</p>
									</div>
								</div>
							</div>
							<!-- End Single Content -->
							<!-- Start Single Content -->
							<div role="tabpanel" id="sheet" class="product__tab__content fade">
								<div class="pro__feature">
									<h2 class="title__6">Featured List</h2>
									<ul class="feature__list">
										<li><a href="#"><i class="zmdi zmdi-play-circle"></i>No Featured list added in the backend</a></li>

									</ul>
								</div>
							</div>
							<!-- End Single Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Product tab -->
	</div>
@endsection
