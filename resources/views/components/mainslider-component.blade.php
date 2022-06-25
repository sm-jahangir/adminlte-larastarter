<div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 float-left-style">
	<!-- Start Slider Area -->
	<div class="slider__container slider--one">
		<div class="slider__activation__wrap owl-carousel owl-theme">
			<!-- Start Single Slide -->
			@foreach ($sliders as $row)
				<div class="slide slider__full--screen slider-height-inherit slider-text-{{ $row->position }}" style="background: rgba(0, 0, 0, 0) url({{ asset('storage/sliders') . '/' . $row->slider_bg }}) no-repeat scroll center center / cover ;">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
								<div class="slider__inner">
									<h1>{!! $row->title !!}</h1>
									<div class="slider__btn">
										<a class="htc__btn" href="{{ $row->button_1_link }}">{{ $row->button_1 }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			<!-- End Single Slide -->
		</div>
	</div>
	<!-- Start Slider Area -->
</div>
