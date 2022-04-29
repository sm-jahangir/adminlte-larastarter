@extends('layouts.app')
@section('mainContent')
	<div class="container">
		<h1 class="my-3">Home Page</h1>
		// Display the content in a View.
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Product</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Subtotal</th>
				</tr>
			</thead>

			<tbody>

				<?php foreach(Cart::content() as $row) :?>

				<tr>
					<td>
						<p><strong><?php echo $row->name; ?></strong></p>
						<p><?php echo $row->options->has('size') ? $row->options->size : ''; ?></p>
					</td>
					<td><input class="form-control w-25" type="text" value="<?php echo $row->qty; ?>"></td>
					<td>$<?php echo $row->price; ?></td>
					<td>$<?php echo $row->total; ?></td>
				</tr>

				<?php endforeach;?>

			</tbody>

			<tfoot>
				<tr>
					<td colspan="2">&nbsp;</td>
					<td>Subtotal</td>
					<td><?php echo Cart::subtotal(); ?></td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
					<td>Tax</td>
					<td><?php echo Cart::tax(); ?></td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
					<td>Total</td>
					<td><?php echo Cart::total(); ?></td>
				</tr>
			</tfoot>
		</table>
		{{-- <div class="list-group">
			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
				<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
				<div class="d-flex gap-2 w-100 justify-content-between">
					<div>
						<h6 class="mb-0">List group item heading</h6>
						<p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
					</div>
					<small class="opacity-50 text-nowrap">now</small>
				</div>
			</a>
			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
				<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
				<div class="d-flex gap-2 w-100 justify-content-between">
					<div>
						<h6 class="mb-0">Another title here</h6>
						<p class="mb-0 opacity-75">Some placeholder content in a paragraph that goes a little longer so it wraps to a new line.</p>
					</div>
					<small class="opacity-50 text-nowrap">3d</small>
				</div>
			</a>
			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
				<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
				<div class="d-flex gap-2 w-100 justify-content-between">
					<div>
						<h6 class="mb-0">Third heading</h6>
						<p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
					</div>
					<small class="opacity-50 text-nowrap">1w</small>
				</div>
			</a>
		</div> --}}
	</div>
@endsection
