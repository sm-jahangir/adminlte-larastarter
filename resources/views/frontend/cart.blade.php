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
					<form action="#">
						<div class="table-content table-responsive">
							<table>
								<thead>
									<tr>
										<th class="product-thumbnail">Image</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
										<th class="product-remove">Remove</th>
									</tr>
								</thead>
								<tbody>
									@foreach (Cart::content() as $row)
										<tr>
											<td class="product-thumbnail"><a href="#"><img src="{{ $row->options->has('image') ? asset('storage/products/') . '/' . $row->options->image : "asset('assets/frontend/images/product/4.png')" }}" alt="product img" /></a></td>
											<td class="product-name">
												<strong>{{ $row->name }}</strong><br>
												<strong>Size: {{ $row->options->has('size') ? $row->options->size : '' }}</strong>
											</td>
											<td class="product-price"><span class="amount">{{ $row->price }}</span></td>
											<td class="product-quantity"><input type="number" value="{{ $row->qty }}" /></td>
											<td class="product-subtotal">{{ $row->total }}</td>
											<form action="{{ url('cart', [$row->rowId]) }}" method="POST">
												@method('DELETE')
												@csrf
												<td><button type="submit" class="btn btn-primary btn-sm">X</button></td>
											</form>

										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="row">
							<div class="col-md-8 col-sm-7 col-xs-12">
								<div class="buttons-cart">
									<input type="submit" value="Update Cart" />
									<a href="#">Continue Shopping</a>
								</div>
								<div class="coupon">
									<h3>Coupon</h3>
									<p>Enter your coupon code if you have one.</p>
									<input type="text" placeholder="Coupon code" />
									<input type="submit" value="Apply Coupon" />
								</div>
							</div>
							<div class="col-md-4 col-sm-5 col-xs-12">
								<div class="cart_totals">
									<h2>Cart Totals</h2>
									<table>
										<tbody>
											<tr class="cart-subtotal">
												<th>Subtotal</th>
												<td><span class="amount"><?php echo Cart::subtotal(); ?></span></td>
											</tr>
											<tr class="cart-subtotal">
												<th>Tax</th>
												<td><span class="amount"><?php echo Cart::tax(); ?></span></td>
											</tr>
											<tr class="shipping">
												<th>Shipping</th>
												<td>
													<ul id="shipping_method">
														<li>
															<input type="radio" />
															<label>
																Flat Rate: <span class="amount">£7.00</span>
															</label>
														</li>
														<li>
															<input type="radio" />
															<label>
																Free Shipping
															</label>
														</li>
														<li></li>
													</ul>
													<p><a class="shipping-calculator-button" href="#">Calculate Shipping</a></p>
												</td>
											</tr>
											<tr class="order-total">
												<th>Total</th>
												<td>
													<strong><span class="amount"><?php echo Cart::total(); ?></span></strong>
												</td>
											</tr>
										</tbody>
									</table>
									<div class="wc-proceed-to-checkout">
										<a href="checkout.html">Proceed to Checkout</a>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- cart-main-area end -->
@endsection
