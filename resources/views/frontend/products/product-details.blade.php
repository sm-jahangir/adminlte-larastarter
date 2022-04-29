@extends('layouts.app')
@push('css')
	<style>
		.card {
			border: none
		}

		.product {
			background-color: #eee
		}

		.brand {
			font-size: 13px
		}

		.act-price {
			color: red;
			font-weight: 700
		}

		.dis-price {
			text-decoration: line-through
		}

		.about {
			font-size: 14px
		}

		.color {
			margin-bottom: 10px
		}

		label.radio {
			cursor: pointer
		}

		label.radio input {
			position: absolute;
			top: 0;
			left: 0;
			visibility: hidden;
			pointer-events: none
		}

		label.radio span {
			padding: 2px 9px;
			border: 2px solid #ff0000;
			display: inline-block;
			color: #ff0000;
			border-radius: 3px;
			text-transform: uppercase
		}

		label.radio input:checked+span {
			border-color: #ff0000;
			background-color: #ff0000;
			color: #fff
		}

		.btn-danger {
			background-color: #ff0000 !important;
			border-color: #ff0000 !important
		}

		.btn-danger:hover {
			background-color: #da0606 !important;
			border-color: #da0606 !important
		}

		.btn-danger:focus {
			box-shadow: none
		}

		.cart i {
			margin-right: 10px
		}

	</style>
@endpush
@section('mainContent')
	<div class="container mt-5 mb-5">
		<div class="row d-flex justify-content-center">
			<div class="col-md-10">
				<div class="card">
					<div class="row">
						<div class="col-md-6">
							<div class="images p-3">
								<div class="text-center p-4"> <img id="main-image" src="https://i.imgur.com/Dhebu4F.jpg" width="250" /> </div>
								<div class="thumbnail text-center"> <img onclick="change_image(this)" src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70"> </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="product p-4">
								<div class="d-flex justify-content-between align-items-center">
									<div class="d-flex align-items-center">
										<i class="fa fa-long-arrow-left"></i>
										<span class="ml-1">{{ $product->brand->name }}</span>
									</div>
									<i class="fa fa-shopping-cart text-muted"></i>
								</div>
								<div class="mt-4 mb-3">
									@foreach ($product->categories as $category)
										<span class="text-uppercase text-muted brand">{{ $category->name }}</span>,
									@endforeach
									<h5 class="text-uppercase">{{ $product->title }}</h5>
									<div class="price d-flex flex-row align-items-center"> <span class="act-price">${{ $product->sale_price }}</span>
										<div class="ml-2"> <small class="dis-price">${{ $product->price }}</small> <span>40% OFF</span> </div>
									</div>
								</div>
								<p class="about">{{ $product->excerpt }}</p>
								<div class="sizes mt-5">
									<h6 class="text-uppercase">Size</h6>

									@foreach ($product->sizes as $size)
										<label class="radio"> <input type="radio" name="size" value="{{ $size->id }}"> <span>{{ $size->name }}</span> </label>
									@endforeach
								</div>
								<div class="sizes mt-1">
									<h6 class="text-uppercase">Colors</h6>
									@foreach ($product->colors as $color)
										<label class="radio"> <input type="radio" name="color" value="{{ $color->id }}"> <span>{{ $color->name }}</span> </label>
									@endforeach
								</div>
								<div class="cart mt-4 align-items-center">
									<button class="btn btn-danger text-uppercase mr-2 px-4" id="addcart" data-id="{{ $product->id }}">Add to cart</button>
									<button class="btn btn-danger text-uppercase mr-2 ms-2 px-4">Buy Now</button>
									<i class="fa fa-heart text-muted"></i>
									<i class="fa fa-share-alt text-muted"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@push('js')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
	 $(document).ready(function() {
	  $('#addcart').on('click', function() {
	   var id = $(this).data('id');
	   alert(id)
	  })
	 })
	</script>
	<script>
	 function change_image(image) {
	  var container = document.getElementById("main-image");
	  container.src = image.src;
	 }
	 document.addEventListener("DOMContentLoaded", function(event) {});
	</script>
@endpush
