<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>{{ config('app.name', 'solita') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    {{--    <link href="{{ asset('build/assets/app-67dcdfd2.css') }}" rel="stylesheet"> --}}
    {{--    <link href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.css') }}" rel="stylesheet"> --}}
    {{--    <link href="{{ asset('fontawesome-free-6.3.0-web/css/all.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/backtotop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <style>
        .ck-editor__editable {
            min-height: 400px;
        }
    </style>
    @stack('styles')
</head>

<body style="min-height: 100vh; min-width: 100vw">
    <!-- Preloader -->
    @include('layout.preloader')
    <!-- Offcanvas area -->
    @include('layout.off_canvas_area')
    <!-- Header -->
    @include('layout.header')
    <!-- Main content -->
    @yield('content')
    <!-- Footer -->
    @include('layout.footer')
    <!-- Back to top -->
    @include('layout.back_to_top')
    <!-- Scripts -->
    {{--    <script src="{{ asset('build/assets/app-20b9e4fb.js') }}"></script> --}}
    {{--    <script src="{{ asset('jquery-3.6.3/jquery-3.6.3.min.js') }}"></script> --}}
    {{--    <script src="{{ asset('bootstrap-5.2.3-dist/js/bootstrap.bundle.js') }}"></script> --}}
    {{-- <script src="{{ asset('ckeditor5-36.0.1-8lty87utdzw3/build/ckeditor.js') }}"></script> --}}
    <script src="{{ asset('fontawesome-free-6.3.0-web/js/all.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <script src="{{ asset('assets/js/backtotop.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/particles-app.js') }}"></script>
    <script src="{{ asset('assets/js/particles-start.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
