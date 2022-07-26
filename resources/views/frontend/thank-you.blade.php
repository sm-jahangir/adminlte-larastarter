@extends('layouts.app')
@section('content')
	<!-- Start Bradcaump area -->
	<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('assets/frontend') }}/images/bg/2.jpg) no-repeat scroll center center / cover ;">
		<div class="ht__bradcaump__wrap">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">Thank You Page</h2>
							<nav class="bradcaump-inner">
								<a class="breadcrumb-item" href="/">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb-item active">Thank You Page</span>
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
			<div style="border: 1px solid #ddd; padding: 92px;">
				<h2>Thank You For Pursing product</h2>
				<p>If You Want to Buy More Product <a href="{{ route('products.index') }}">Shop Now</a></p>
				<button class="btn btn-primary">Go To Dashboard</button>
			</div>
		</div>
	</div>
	<!-- cart-main-area end -->
@endsection
