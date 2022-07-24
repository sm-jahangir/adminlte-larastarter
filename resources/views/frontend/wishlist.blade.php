@extends('layouts.app')
@section('content')
	<!-- Start Bradcaump area -->
	<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('assets/frontend') }}/images/bg/2.jpg) no-repeat scroll center center / cover ;">
		<div class="ht__bradcaump__wrap">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">Cart</h2>
							<nav class="bradcaump-inner">
								<a class="breadcrumb-item" href="index.html">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb-item active">Cart</span>
								{{-- <a href="{{ Cart::destroy() }}">Clear Cart</a> --}}
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Bradcaump area -->
	<!-- cart-main-area start -->
	<div class="cart-main-area ptb--120 bg__white">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="wishlist-content">
						<form action="#">
							<div class="wishlist-table table-responsive">

								<h2>Wishlist Items: {{ Cart::instance('wishlist')->content()->count() }}</h2>
								<a href="{{ route('wishlist.destroy') }}" class="btn btn-primary btn-sm" style="float: right">Clear Wishlist</a>
								<table>
									<thead>
										<tr>
											<th class="product-remove"><span class="nobr">Remove</span></th>
											<th class="product-thumbnail">Image</th>
											<th class="product-name"><span class="nobr">Product Name</span></th>
											<th class="product-price"><span class="nobr"> Unit Price </span></th>
											<th class="product-stock-stauts"><span class="nobr"> Stock Status
												</span></th>
											<th class="product-add-to-cart"><span class="nobr">Add To Cart</span>
											</th>
										</tr>
									</thead>
									<tbody>
										@foreach (Cart::instance('wishlist')->content() as $row)
											<tr>
												<form action="{{ route('wishlist.remove', $row->rowId) }}" method="POST">
													@method('DELETE')
													@csrf
													<td class="product-remove"><button type="submit" class="btn btn-primary btn-sm">X</button></td>
												</form>
												<td class="product-thumbnail"><a href="#"><img src="{{ $row->options->has('image') ? asset('storage/products/') . '/' . $row->options->image : "asset('assets/frontend/images/product/4.png')" }}" alt="" /></a></td>
												<td class="product-name"><a href="#">{{ $row->name }}</a></td>
												<td class="product-price"><span class="amount">{{ $row->price }}</span></td>
												<td class="product-stock-status"><span class="wishlist-in-stock">In
														Stock</span></td>
												<td class="product-add-to-cart">
													<form action="{{ route('move.cart', $row->id) }}" method="post">
														@csrf
														<input type="hidden" name="rowId" value="{{ $row->rowId }}">
														<button class="border-0" type="submit">Add to Cart</button>
													</form>
												</td>
											</tr>
										@endforeach
									</tbody>
									<tfoot>
										<tr>
											<td colspan="6">
												<div class="wishlist-share">
													<h4 class="wishlist-share-title">Share on:</h4>
													<div class="social-icon">
														<ul>
															<li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
															<li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
															<li><a href="#"><i class="zmdi zmdi-tumblr"></i></a>
															</li>
															<li><a href="#"><i class="zmdi zmdi-pinterest"></i></a>
															</li>
															<li><a href="#"><i class="zmdi zmdi-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- cart-main-area end -->
@endsection
