@extends('layouts.app')
@section('content')
	<!-- Start Bradcaump area -->
	<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('assets/frontend') }}/images/bg/2.jpg) no-repeat scroll center center / cover ;">
		<div class="ht__bradcaump__wrap">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">Checkout</h2>
							<nav class="bradcaump-inner">
								<a class="breadcrumb-item" href="index.html">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb-item active">Checkout</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Bradcaump area -->
	<!-- Start Checkout Area -->
	<section class="our-checkout-area ptb--120 bg__white">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-8">
					<form class="ckeckout-left-sidebar" action="{{ route('place.order') }}" method="POST">
						@csrf
						<!-- Start Checkbox Area -->
						<div class="checkout-form">
							<h2 class="section-title-3">Billing details</h2>
							<div class="checkout-form-inner">
								<div class="billing-address-default">

									<div class="single-checkout-box">
										<input type="text" name="firstname" placeholder="First Name*">
										<input type="text" name="lastname" placeholder="Last Name*">
									</div>
									<div class="single-checkout-box">
										<input type="email" name="email" placeholder="Emil*">
										<input type="text" name="phone" placeholder="Phone*">
									</div>
									<div class="single-checkout-box select-option">
										<select name="country">
											<option value="bangladesh">Bangladesh</option>
											<option value="india">India</option>
											<option value="pakistan">Pakistan</option>
											<option value="china">China</option>
										</select>
										<input type="text" name="province" placeholder="province/Distric">
									</div>
									<div class="single-checkout-box">
										<input type="text" name="line1" placeholder="line1">
										<input type="text" name="zipcode" placeholder="Zip Code*">
									</div>
									<div class="single-checkout-box">
										<input type="text" name="city" placeholder="city">
										<input type="text" name="line2" placeholder="line2(Optinal)">
									</div>

								</div>
								<div style="margin-bottom: 50px;" class="single-checkout-box checkbox">
									<input id="sDACheckBox" name="is_shipping_different" type="checkbox" onclick="sDAFunction()">
									<label for="sDACheckBox"><span></span>Shopping Different Address ?</label>
								</div>
								{{-- Shipping Diffrent Address Start --}}
								<div style="display: none" id="sDAForm">
									<div class="billing-address-diffrent">
										<div class="single-checkout-box">
											<input type="text" name="s_firstname" placeholder="First Name*">
											<input type="text" name="s_lastname" placeholder="Last Name*">
										</div>
										<div class="single-checkout-box">
											<input type="email" name="s_email" placeholder="Emil*">
											<input type="text" name="s_phone" placeholder="Phone*">
										</div>
										<div class="single-checkout-box select-option">
											<select name="s_country">
												<option value="bangladesh">Bangladesh</option>
												<option value="india">India</option>
												<option value="pakistan">Pakistan</option>
												<option value="china">China</option>
											</select>
											<input type="text" name="s_province" placeholder="province/Distric">
										</div>
										<div class="single-checkout-box">
											<input type="text" name="s_line1" placeholder="line1">
											<input type="text" name="s_zipcode" placeholder="Zip Code*">
										</div>
										<div class="single-checkout-box">
											<input type="text" name="s_city" placeholder="city">
											<input type="text" name="s_line2" placeholder="line2(Optinal)">
										</div>

									</div>
								</div>
								{{-- Shipping Diffrent Address End --}}
								@guest
									<div class="single-checkout-box checkbox">
										<input id="checkNewAccount" type="checkbox" name="new_account" onclick="newAccountCheck()">
										<label for="checkNewAccount"><span></span>Create a Account ?</label>
									</div>
									<div id="newAccountPasswordForm" style="display: none" class="single-checkout-box">
										<input type="password" name="new_password" placeholder="Enter Password*">
									</div>
								@endguest
							</div>
						</div>
						<!-- End Checkbox Area -->
						<!-- Start Payment Box -->
						{{-- <div class="payment-form">
							<h2 class="section-title-3">payment details</h2>
							<p>Lorem ipsum dolor sit amet, consectetur kgjhyt</p>
							<div class="payment-form-inner">
								<div class="single-checkout-box">
									<input type="text" placeholder="Name on Card*">
									<input type="text" placeholder="Card Number*">
								</div>
								<div class="single-checkout-box select-option">
									<select>
										<option>Date*</option>
										<option>Date</option>
										<option>Date</option>
										<option>Date</option>
										<option>Date</option>
									</select>
									<input type="text" placeholder="Security Code*">
								</div>
							</div>
						</div> --}}
						<!-- End Payment Box -->
						<!-- Start Payment Way -->
						<div class="border-2">
							<div class="row">
								<div class="col-md-6">
									<strong>PAYMENT METHOD:</strong>
									<hr>
									<div style="margin-left: 25px;">
										<div class="single-checkout-box checkbox">
											<input name="payment_method" value="cod" id="cod" type="radio">
											<label for="cod"><span></span>Cash On Delivery</label>
										</div>
										<div class="single-checkout-box checkbox">
											<input name="payment_method" value="paypal" id="paypal" type="radio">
											<label for="paypal"><span></span>Paypal Payment</label>
										</div>
										<div class="single-checkout-box checkbox">
											<input name="payment_method" value="debitcreadit" id="debitcreadit" type="radio">
											<label for="debitcreadit"><span></span>Debit/Creadit Card</label>
										</div>
										<div class="single-checkout-box checkbox">
											<input name="payment_method" value="ssl" id="ssl" type="radio">
											<label for="ssl"><span></span>SSL Commerce</label>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<strong>PAYMENT METHOD:</strong>
									<hr>
									<div style="margin-left: 10px;">
										<p>Flat Rate</p>
										<p>Fixed $15</p>
									</div>
								</div>
							</div>
						</div>

						<div class="checkout-btn">
							<button class="btn btn-primary" type="submit">CONFIRM & BUY NOW</button>
						</div>
						<!-- End Payment Way -->
					</form>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="checkout-right-sidebar">
						<div class="our-important-note">
							<h2 class="section-title-3">Note :</h2>
							<p class="note-desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut laborekf et dolore magna aliqua.</p>
							<ul class="important-note">
								<li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
								<li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet</a></li>
								<li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
								<li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
								<li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet</a></li>
							</ul>
						</div>
						<div class="puick-contact-area mt--60">
							<h2 class="section-title-3">Quick Contract</h2>
							<a href="phone:+8801722889963">+012 345 678 102 </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Checkout Area -->
@endsection
@push('js')
	<script>
	 function newAccountCheck() {
	  var checkBox = document.getElementById("checkNewAccount");
	  var newAccountPasswordForm = document.getElementById("newAccountPasswordForm");
	  if (checkBox.checked == true) {
	   newAccountPasswordForm.style.display = "block";
	  } else {
	   newAccountPasswordForm.style.display = "none";
	  }
	 }

	 function sDAFunction() {
	  var checkBox = document.getElementById("sDACheckBox");
	  var sDAForm = document.getElementById("sDAForm");
	  if (checkBox.checked == true) {
	   sDAForm.style.display = "block";
	  } else {
	   sDAForm.style.display = "none";
	  }
	 }
	</script>
@endpush
