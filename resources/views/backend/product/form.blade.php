@extends('layouts.backend.app')

@section('title','Pages Add')
@push('css')
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
                    <h1 class="m-0">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
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
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h4>Users Registrations</h4>
                                </div>
                                <div class="col">
                                    <a href="{{ route('app.category.index') }}" class="btn btn-success float-right">Go
                                        to
                                        List</a>
                                </div>
                            </div>
                        </div>
                        
                        <form role="form" id="userFrom" method="Post"
                            action="{{ isset($category) ? route('app.category.update',$category->id) : route('app.category.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <h1>Hello</h1>
                        </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script>
    //In your Javascript (external .js resource or <script> tag)
    $(document).ready(function () {
        $('.dropify').dropify();
    });

</script>
@endpush