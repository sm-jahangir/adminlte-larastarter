@extends('layouts.app')
@push('css')
	<style type="text/css">
		.panel-title {
			display: inline;
			font-weight: bold;
		}

		.display-table {
			display: table;
		}

		.display-tr {
			display: table-row;
		}

		.display-td {
			display: table-cell;
			vertical-align: middle;
			width: 61%;
		}
	</style>
@endpush
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
					<form role="form" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form" class="ckeckout-left-sidebar require-validation" action="{{ route('place.order') }}" method="POST">
						@csrf
						<!-- Start Checkbox Area -->
						<div class="checkout-form">
							<div style="display: flex;">
								<h2 class="section-title-3">Billing details</h2>
								<strong style="margin-left: 30px;
								margin-top: 10px;
								color: red;">Better Services for login</strong>
								<a class="btn btn-sm btn-primary" href="/login" style="margin-left: 10px; margin-top: 10px;">Login</a>
							</div>
							<div class="checkout-form-inner">
								<div class="billing-address-default">

									<div class="single-checkout-box">
										<input type="text" name="firstname" placeholder="First Name*">
										<input type="text" name="lastname" placeholder="Last Name*">
									</div>
									<div class="single-checkout-box">
										@if (Auth::user())
											<input type="email" name="email" readonly value="{{ Auth::user()->email }}" placeholder="Emil*">
										@else
											<input type="email" name="email" placeholder="Emil*">
										@endif

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
						<div class="border-2">
							<div class="row">
								<div class="col-md-6">
									<strong>PAYMENT METHOD:</strong>
									<hr>
									<div style="margin-left: 25px;">
										<div class="single-checkout-box checkbox">
											<input name="payment_method" value="cod" id="codPaymentCheckbox" type="radio" checked onclick="codPayment()">
											<label for="codPaymentCheckbox"><span></span>Cash On Delivery</label>
										</div>
										<div class="single-checkout-box checkbox">
											<input name="payment_method" value="paypal" id="paypalPaymentCheckbox" type="radio" onclick="paypalPayment()">
											<label for="paypalPaymentCheckbox"><span></span>Paypal Payment</label>
										</div>
										<div class="single-checkout-box checkbox">
											<input name="payment_method" value="debitcreadit" id="debitcreaditPaymentCheckbox" type="radio" onclick="debitcreditPayment()">
											<label for="debitcreaditPaymentCheckbox"><span></span>Debit/Creadit Card</label>
										</div>
										<div class="single-checkout-box checkbox">
											<input name="payment_method" value="ssl" id="sslPaymentCheckbox" type="radio" onclick="sslPayment()">
											<label for="sslPaymentCheckbox"><span></span>SSL Commerce</label>
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
						<br><br>
						<div style="display: none; border: 1px solid #ddd; padding: 18px; border-radius: 10px; box-shadow: 2px 2px 2px 1px rgb(0 0 0 / 20%);" id="CardForm">
							<div class='form-row row'>
								<div class='col-xs-12 form-group required'>
									<label class='control-label'>Name on Card</label> <input class='form-control' size='4' type='text' placeholder="Test">
								</div>
							</div>
							<div class='form-row row'>
								<div class='col-xs-12 form-group card required'>
									<label class='control-label'>Card Number</label> <input autocomplete='off' class='form-control card-number' value="4242424242424242" size='20' type='text' placeholder="4242424242424242">
								</div>
							</div>
							<div class='form-row row'>
								<div class='col-xs-12 col-md-4 form-group cvc required'>
									<label class='control-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' value="123" size='4' type='text'>
								</div>
								<div class='col-xs-12 col-md-4 form-group expiration required'>
									<label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month' placeholder='MM' value="12" size='2' type='text'>
								</div>
								<div class='col-xs-12 col-md-4 form-group expiration required'>
									<label class='control-label'>Expiration Year</label> <input class='form-control card-expiry-year' placeholder='YYYY' value="2025" size='4' type='text'>
								</div>
							</div>
						</div>
						<br><br>


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
	 //  Card form
	 function codPayment() {
	  document.getElementById("CardForm").style.display = 'none';
	 }

	 function paypalPayment() {
	  document.getElementById("CardForm").style.display = 'none';
	 }

	 function debitcreditPayment() {
	  var checkBox = document.getElementById("debitcreaditPaymentCheckbox");
	  var CardFormed = document.getElementById("CardForm");
	  if (checkBox.checked == true) {
	   CardFormed.style.display = "block";
	  } else {
	   CardFormed.style.display = "none";
	  }
	 }

	 function sslPayment() {
	  document.getElementById("CardForm").style.display = 'none';
	 }
	</script>

	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript">
	 $(function() {
	  var $form = $(".require-validation");
	  $('form.require-validation').bind('submit', function(e) {
	   var $form = $(".require-validation"),
	    inputSelector = ['input[type=email]', 'input[type=password]',
	     'input[type=text]', 'input[type=file]',
	     'textarea'
	    ].join(', '),
	    $inputs = $form.find('.required').find(inputSelector),
	    $errorMessage = $form.find('div.error'),
	    valid = true;
	   $errorMessage.addClass('hide');
	   $('.has-error').removeClass('has-error');
	   $inputs.each(function(i, el) {
	    var $input = $(el);
	    if ($input.val() === '') {
	     $input.parent().addClass('has-error');
	     $errorMessage.removeClass('hide');
	     e.preventDefault();
	    }
	   });
	   if (!$form.data('cc-on-file')) {
	    e.preventDefault();
	    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
	    Stripe.createToken({
	     number: $('.card-number').val(),
	     cvc: $('.card-cvc').val(),
	     exp_month: $('.card-expiry-month').val(),
	     exp_year: $('.card-expiry-year').val()
	    }, stripeResponseHandler);
	   }
	  });

	  function stripeResponseHandler(status, response) {
	   if (response.error) {
	    $('.error')
	     .removeClass('hide')
	     .find('.alert')
	     .text(response.error.message);
	   } else {
	    /* token contains id, last4, and card type */
	    var token = response['id'];
	    $form.find('input[type=text]').empty();
	    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
	    $form.get(0).submit();
	   }
	  }
	 });
	</script>
@endpush
