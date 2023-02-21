<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>{{ config('app.name', 'solita') }}</title>
    <!-- Styles -->
    <link href="{{ asset('build/assets/app-67cdfd2.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome-free-6.3.0-web/css/all.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('build/assets/app-20b9e4fb.js') }}"></script>
    <script src="{{ asset('bootstrap-5.2.3-dist/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('fontawesome-free-6.3.0-web/js/all.js') }}"></script>
    @stack('scripts')
</body>
</html>
