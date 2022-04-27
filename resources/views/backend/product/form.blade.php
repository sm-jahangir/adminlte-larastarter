@extends('layouts.backend.app')

@section('title', 'Pages Add')
@push('css')
	{{-- BS Stepper --}}
	<link rel="stylesheet" href="{{ asset('assets/backend/plugins/bs-stepper/css/bs-stepper.min.css') }}">
	{{-- Select2 --}}
	<link rel="stylesheet" href="{{ asset('assets/backend/plugins/select2/css/select2.min.css') }}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
	<style>
		.dropify-wrapper .dropify-message p {
			font-size: initial;
		}

	</style>
@endpush
@section('content')
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Product Create</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Product Create</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col col-md-12">
						<div class="card card-default">
							<div class="card-body p-0">
								<div class="bs-stepper">
									<div class="bs-stepper-header" role="tablist">
										<!-- your steps here -->
										<div class="step" data-target="#general-part">
											<button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
												<span class="bs-stepper-circle">1</span>
												<span class="bs-stepper-label">General</span>
											</button>
										</div>
										<div class="line"></div>
										<div class="step" data-target="#specification-part">
											<button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
												<span class="bs-stepper-circle">2</span>
												<span class="bs-stepper-label">Specification</span>
											</button>
										</div>
										<div class="line"></div>
										<div class="step" data-target="#price-part">
											<button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
												<span class="bs-stepper-circle">3</span>
												<span class="bs-stepper-label">Price</span>
											</button>
										</div>
										<div class="line"></div>
										<div class="step" data-target="#image-part">
											<button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
												<span class="bs-stepper-circle">4</span>
												<span class="bs-stepper-label">Images</span>
											</button>
										</div>
										<div class="line"></div>
										<div class="step" data-target="#seo-part">
											<button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
												<span class="bs-stepper-circle">5</span>
												<span class="bs-stepper-label">SEO</span>
											</button>
										</div>
										<div class="line"></div>
										<div class="step" data-target="#information-part">
											<button type="button" class="step-trigger" role="tab" aria-controls="information-part"
												id="information-part-trigger">
												<span class="bs-stepper-circle">6</span>
												<span class="bs-stepper-label">Various information</span>
											</button>
										</div>
									</div>
									<hr>
									<div class="bs-stepper-content">
										<form action="{{ route('app.product.index') }}" method="GET">

											<!-- General steps content here -->
											<div id="general-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
												<div class="form-group">
													<label for="productInputTitle">Product Title</label>
													<input type="text" class="form-control" name="title" id="productInputTitle"
														placeholder="Enter Product Title" />
												</div>
												<div class="form-group">
													<label for="productShortDescription">Short Description</label>
													<textarea class="form-control" name="excerpt" id="productShortDescription" cols="30" rows="5"></textarea>
												</div>
												<div class="form-group">
													<label for="productDescription">Description</label>
													<textarea class="form-control" name="description" id="productDescription" cols="30" rows="5"></textarea>
												</div>
												<button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
											</div>
											<!-- Specification steps content here -->
											<div id="specification-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">

												<div class="form-group">
													<label>Product SKU</label>
													<input class="form-control" placeholder="Enter Your SKU" type="text" name="sku" id="sku">
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Color</label>
															<select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Color"
																style="width: 100%;" data-select2-id="8" tabindex="-1" aria-hidden="true">
																<option>Red</option>
																<option>Yellow</option>
																<option>Green</option>
																<option>White</option>
																<option>Apple Green</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Size</label>
															<select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Color"
																style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
																<option>L</option>
																<option>M</option>
																<option>X</option>
																<option>XL</option>
																<option>XXL</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Product Collection</label>
															<select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Color"
																style="width: 100%;" data-select2-id="10" tabindex="-1" aria-hidden="true">
																<option>New Arrival</option>
																<option>Best Sellers</option>
																<option>Special Offer</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Label</label>
															<select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Color"
																style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
																<option>Hot</option>
																<option>New</option>
																<option>Sale</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="weight">Product Weight</label>
															<input type="text" class="form-control" name="weight" id="weight" placeholder="Enter Weight in Gram">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="height">Height</label>
															<input type="text" class="form-control" name="height" id="height" placeholder="Enter height in cm">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="length">Product length</label>
															<input type="text" class="form-control" name="length" id="length" placeholder="Enter length in cm">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="wide">wide</label>
															<input type="text" class="form-control" name="wide" id="wide" placeholder="Enter wide in cm">
														</div>
													</div>
												</div>
												<button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
												<button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
											</div>
											<!-- Price steps content here -->
											<div id="price-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="productInputPrice">Product Price</label>
															<input type="text" class="form-control" name="price" id="productInputPrice"
																placeholder="Enter Product Price" />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="productInputSalePrice">Product Sale Price</label>
															<input type="text" class="form-control" name="sale_price" id="productInputSalePrice"
																placeholder="Enter Product Sale Price" />
														</div>
													</div>
												</div>
												<button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
												<button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
											</div>
											<!-- Images steps content here -->
											<div id="image-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">

												<div class="form-group">
													<label for="image">Product Image(Optional)</label>
													<input type="file" name="image" id="image" class="dropify" data-default-file="">
												</div>
												<div class="form-group">
													<label for="gallery">Product Gallery (Optional)</label>
													<input type="file" name="gallery" id="gallery" multiple>
												</div>
												<button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
												<button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
											</div>
											<!-- SEO steps content here -->
											<div id="seo-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">

												<div class="form-group">
													<label for="productInputPrice">Slug will be generate automatically using Title</label>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="meta_keywords">Meta Keywords</label>
															<input type="text" class="form-control" name="meta_keywords" id="meta_keywords"
																placeholder="Enter Product Price" />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="meta_description">Meta Description</label>
															<input type="text" class="form-control" name="meta_description" id="meta_description"
																placeholder="Enter Product Sale Price" />
														</div>
													</div>
												</div>
												<button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
												<button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
											</div>
											<div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
												<div class="row">
													<div class="col-md-3">
														<label for="featured">Featured Product</label>
														<input type="checkbox" name="my-checkbox" data-bootstrap-switch data-off-color="danger"
															data-on-color="success">
													</div>
													<div class="col-md-3">
														<label for="trending">trending Product</label>
														<input type="checkbox" name="trending" data-bootstrap-switch data-off-color="danger"
															data-on-color="success">
													</div>
													<div class="col-md-3">
														<label for="popular">popular Product</label>
														<input type="checkbox" name="popular" data-bootstrap-switch data-off-color="danger"
															data-on-color="success">
													</div>
													<div class="col-md-3">
														<label for="featured">Product Status</label>
														<input type="checkbox" name="status" checked data-bootstrap-switch>
													</div>
												</div>
												<br>
												<br>
												<button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /.card-body -->
						</div>
					</div>
					<!-- /.col-md-6 -->
				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	</div>
@endsection

@push('js')
	{{-- BS Stepper --}}
	<script src="{{ asset('assets/backend/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
	{{-- Select 2 --}}
	<script src="{{ asset('assets/backend/plugins/select2/js/select2.full.min.js') }}"></script>
	<!-- Bootstrap Switch -->
	<script src="{{ asset('assets/backend/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
	<script>
	 //In your Javascript (external .js resource or <script> tag)
	 $(document).ready(function() {
	  $('.dropify').dropify();
	 });
	 // BS-Stepper Init
	 document.addEventListener('DOMContentLoaded', function() {
	  window.stepper = new Stepper(document.querySelector('.bs-stepper'))
	 })
	 //  Switch
	 $("input[data-bootstrap-switch]").each(function() {
	  $(this).bootstrapSwitch('state', $(this).prop('checked'));
	 })

	 //  Select2 Init

	 $(document).ready(function() {
	  //Initialize Select2 Elements
	  $('.select2').select2()

	  //Initialize Select2 Elements
	  $('.select2bs4').select2({
	   theme: 'bootstrap4'
	  })
	 });
	</script>
@endpush
