<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/plugins/fontawesome-free/css/all.min.css">
    @stack('pluginscss')
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/dist/css/adminlte.min.css">

    {{-- Lara-Izitoast : Laravel Notification Package Styles--}}
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('css')

</head>

<body class="hold-transition sidebar-mini">
    <div id="app" class="wrapper">
        <x-backend.header-component />
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        
        <x-backend.sidebar-component />

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <x-backend.footer-component />
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('assets/backend') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    @stack('pluginsjs')
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/backend') }}/dist/js/adminlte.min.js"></script>

    {{-- Lara-Izitoast : Laravel Notification Package Styles--}}
    <script src="{{ asset('js/iziToast.js') }}"></script>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js')

    
    @include('vendor.lara-izitoast.toast')
</body>

</html>
