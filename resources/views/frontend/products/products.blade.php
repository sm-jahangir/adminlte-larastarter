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
								<a href="#" class="btn btn-primary btn-sm addCart" data-id="{{ $product->id }}">ADD TO CART</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
@push('js')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
	 $(document).ready(function() {
	  $('.addCart').on('click', function() {
	   var id = $(this).data('id');
	   if (id) {
	    $.ajax({
	     url: '/addtocart' + '/' + id,
	     type: 'GET',
	     dataType: 'json',
	     success: function(data) {
	      const Toast = Swal.mixin({
	       toast: true,
	       position: 'top-end',
	       showConfirmButton: false,
	       timer: 3000,
	       timerProgressBar: true,
	       didOpen: (toast) => {
	        toast.addEventListener('mouseenter', Swal.stopTimer)
	        toast.addEventListener('mouseleave', Swal.resumeTimer)
	       }
	      })
	      if ($.isEmptyObject(data.error)) {
	       Toast.fire({
	        icon: 'success',
	        title: data.success
	       })
	      } else {
	       Toast.fire({
	        icon: 'error',
	        title: data.success
	       })
	      }
	     },
	    });
	   } else {
	    alert('danger')
	   }
	  })
	 })
	</script>
@endpush
