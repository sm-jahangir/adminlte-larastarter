@extends('layouts.app')
@section('content')
	<!-- Start Bradcaump area -->
	<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('assets/frontend') }}/images/bg/2.jpg) no-repeat scroll center center / cover ;">
		<div class="ht__bradcaump__wrap">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">Contact US</h2>
							<nav class="bradcaump-inner">
								<a class="breadcrumb-item" href="index.html">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb-item active">Contact US</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Bradcaump area -->
	<!-- Start Contact Area -->
	<section class="htc__contact__area ptb--120 bg__white">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
					<div class="htc__contact__container">
						<div class="htc__contact__address">
							<h2 class="contact__title">contact info</h2>
							<div class="contact__address__inner">
								<!-- Start Single Adress -->
								<div class="single__contact__address">
									<div class="contact__icon">
										<span class="ti-location-pin"></span>
									</div>
									<div class="contact__details">
										<p>Location : <br> 77, seventh avenue, Brat road USA.</p>
									</div>
								</div>
								<!-- End Single Adress -->
							</div>
							<div class="contact__address__inner">
								<!-- Start Single Adress -->
								<div class="single__contact__address">
									<div class="contact__icon">
										<span class="ti-mobile"></span>
									</div>
									<div class="contact__details">
										<p> Phone : <br><a href="#">+012 345 678 102 </a></p>
									</div>
								</div>
								<!-- End Single Adress -->
								<!-- Start Single Adress -->
								<div class="single__contact__address">
									<div class="contact__icon">
										<span class="ti-email"></span>
									</div>
									<div class="contact__details">
										<p> Mail :<br><a href="#">info@example.com</a></p>
									</div>
								</div>
								<!-- End Single Adress -->
							</div>
						</div>
						<div class="contact-form-wrap">
							<div class="contact-title">
								<h2 class="contact__title">Get In Touch</h2>
							</div>
							<form id="contact-form" action="mail.php" method="post">
								<div class="single-contact-form">
									<div class="contact-box name">
										<input type="text" name="name" placeholder="Your Nme*">
										<input type="email" name="email" placeholder="Mail*">
									</div>
								</div>
								<div class="single-contact-form">
									<div class="contact-box subject">
										<input type="text" name="subject" placeholder="Subject*">
									</div>
								</div>
								<div class="single-contact-form">
									<div class="contact-box message">
										<textarea name="message" placeholder="Massage*"></textarea>
									</div>
								</div>
								<div class="contact-btn">
									<button type="submit" class="fv-btn">SEND</button>
								</div>
							</form>
						</div>
						<div class="form-output">
							<p class="form-messege"></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
					<div class="map-contacts">
						<div id="googleMap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1823.455565481407!2d90.7196564!3d23.9282008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754315015c64cd3%3A0xf10e58a635b910a!2sZaman%20Shopping%20Complex!5e0!3m2!1sbn!2sbd!4v1651229089640!5m2!1sbn!2sbd" width="600" height="650"
								style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Area -->
@endsection
