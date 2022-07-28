@extends('layouts.user-dashboard')
@section('content')
	<div class="row">
		<div class="col-2">
			<div class="nav flex-column">
				<a class="nav-link btn btn-primary" href="/user/dashboard">Home</a>
			</div>
		</div>
		<div class="col-10">
			<!-- Main content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col col-md-12">

							<div class="card">
								<div class="card-header">
									<div class="row">
										<div class="col">
											<h4>Orders List</h4>
										</div>
									</div>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table id="datatable" class="align-middle mb-0 table table-borderless table-striped table-hover">
											<thead>
												<tr>
													<th class="text-center">#</th>
													<th class="text-center">Sub Total</th>
													<th class="text-center">Discount</th>
													<th class="text-center">Tax</th>
													<th class="text-center">Total</th>
													<th class="text-center">Name</th>
													<th class="text-center">Mobile</th>
													<th class="text-center">Email</th>
													<th class="text-center">ZipCode</th>
													<th class="text-center">Status</th>
													<th class="text-center">Order Date</th>
													<th class="text-center">Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($orders as $key => $order)
													<tr>
														<td class="text-center text-muted">#{{ $key + 1 }}</td>
														<td class="text-center">{{ $order->subtotal }}</td>
														<td class="text-center">{{ $order->discount }}</td>
														<td class="text-center">{{ $order->tax }}</td>
														<td class="text-center">{{ $order->total }}</td>
														<td class="text-center">{{ $order->firstname . ' ' . $order->lastname }}</td>
														<td class="text-center">{{ $order->mobile }}</td>
														<td class="text-center">{{ $order->email }}</td>
														<td class="text-center">{{ $order->zipcode }}</td>
														<td class="text-center">{{ $order->status }}</td>
														<td class="text-center">{{ $order->created_at->diffForHumans() }}</td>
														<td class="text-center">
															<a class="btn btn-info btn-sm" href="{{ route('user.orders.details', $order->id) }}"><i class="fas fa-edit"></i>
																<span>Details</span>
															</a>
														</td>
													</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
		</div>
	</div>
@endsection
