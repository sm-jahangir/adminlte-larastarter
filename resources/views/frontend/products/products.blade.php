@extends('layouts.app')
@section('mainContent')
	<div class="container">
		<h1 class="mb-2">Products Page</h1>
		<div class="row row-cols-1 row-cols-md-3 g-4">
			@foreach ($products as $product)
				<div class="col">
					<div class="card">
						<a href="{{ route('products.show', $product->id) }}"><img src="https://via.placeholder.com/350x200" class="img-fluid" alt="..."></a>
						<div class="card-body">
							<a class="text-decoration-none" href="{{ route('products.show', $product->id) }}">
								<h5 class="card-title">Product title</h5>
							</a>
							<p class="card-text">Some quick example text to build on the card title and make.</p>
							<div class="d-flex justify-content-between align-items-center">
								<a href="#" class="btn btn-primary btn-sm">BUY NOW</a>
								<a href="#" class="btn btn-primary btn-sm">ADD TO CART</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
