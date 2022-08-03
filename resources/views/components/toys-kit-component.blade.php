<section class="htc__product__area ptb--100 bg__white">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="product-categories-all">
					<div class="product-categories-title">
						<h3>Toys & Kit Baby</h3>
					</div>
					<div class="product-categories-menu">
						<ul>
							@foreach ($toyskits->childs as $toyskit)
								<li><a href="#">{{ $toyskit->name }}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="product-style-tab">
					<div class="product-tab-list">
						<!-- Nav tabs -->
						<ul class="tab-style" role="tablist">
							<li class="active">
								<a href="#home7" data-toggle="tab">
									<div class="tab-menu-text">
										<h4>Featured </h4>
									</div>
								</a>
							</li>
							<li>
								<a href="#home8" data-toggle="tab">
									<div class="tab-menu-text">
										<h4>Popular </h4>
									</div>
								</a>
							</li>
							<li>
								<a href="#home9" data-toggle="tab">
									<div class="tab-menu-text">
										<h4>Treanding</h4>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="tab-content another-product-style jump">
						<div class="tab-pane active" id="home7">
							<div class="row">
								<div class="product-slider-active owl-carousel">
									@foreach ($featuredProduct as $featuredproduct)
										<div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
											<div class="product">
												<div class="product__inner">
													<div class="pro__thumb">
														<a href="#">
															<img width="270" height="270" src="{{ asset('storage/products') . '/' . $featuredproduct->featured_image }}" alt="product images">
														</a>
													</div>
													<div class="product__hover__info">
														<ul class="product__action">
															<li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
															<li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
															<li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
														</ul>
													</div>
												</div>
												<div class="product__details">
													<h2><a href="product-details.html">{{ $featuredproduct->title }}</a></h2>
													<ul class="product__price">
														<li class="old__price">${{ $featuredproduct->price }}</li>
														<li class="new__price">${{ $featuredproduct->sale_price }}</li>
													</ul>
												</div>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
						<div class="tab-pane" id="home8">
							<div class="row">
								<div class="product-slider-active owl-carousel">
									@foreach ($popularProduct as $popularproduct)
										<div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
											<div class="product">
												<div class="product__inner">
													<div class="pro__thumb">
														<a href="#">
															<img width="270" height="270" src="{{ asset('storage/products') . '/' . $popularproduct->featured_image }}" alt="product images">
														</a>
													</div>
													<div class="product__hover__info">
														<ul class="product__action">
															<li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
															<li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
															<li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
														</ul>
													</div>
												</div>
												<div class="product__details">
													<h2><a href="product-details.html">{{ $popularproduct->title }}</a></h2>
													<ul class="product__price">
														<li class="old__price">${{ $popularproduct->price }}</li>
														<li class="new__price">${{ $popularproduct->sale_price }}</li>
													</ul>
												</div>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
						<div class="tab-pane" id="home9">
							<div class="row">
								<div class="product-slider-active owl-carousel">
									@foreach ($trendingProduct as $treanding_product)
										<div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
											<div class="product">
												<div class="product__inner">
													<div class="pro__thumb">
														<a href="#">
															<img width="270" height="270" src="{{ asset('storage/products') . '/' . $treanding_product->featured_image }}" alt="product images">
														</a>
													</div>
													<div class="product__hover__info">
														<ul class="product__action">
															<li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
															<li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
															<li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
														</ul>
													</div>
												</div>
												<div class="product__details">
													<h2><a href="product-details.html">{{ $treanding_product->title }}</a></h2>
													<ul class="product__price">
														<li class="old__price">${{ $treanding_product->price }}</li>
														<li class="new__price">${{ $treanding_product->sale_price }}</li>
													</ul>
												</div>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
