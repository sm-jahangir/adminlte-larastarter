@extends('layouts.backend.app')

@section('content')
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">User Page</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">User Page</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->
		<!-- Main content -->
		<div class="content">
			<div class="container-fluid">
				<h2 class="mb-4">
					Laravel 7 Import and Export CSV & Excel to Database Example
				</h2>
				<form action="{{ route('app.user.import') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
						<div class="custom-file text-left">
							<input type="file" name="file" class="custom-file-input" id="customFile">
							<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Import data</button>
					<a class="btn btn-success" href="{{ route('app.user.export') }}">Export data</a>
				</form>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	</div>
@endsection
