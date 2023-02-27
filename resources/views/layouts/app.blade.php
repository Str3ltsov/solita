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
    <link href="{{ asset('build/assets/app-67dcdfd2.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome-free-6.3.0-web/css/all.css') }}" rel="stylesheet">
    <style>
        .ck-editor__editable {
            min-height: 500px;
        }
    </style>
    @stack('styles')
</head>
<body style="min-height: 100vh; min-width: 100vw">
    <!-- Layout -->
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <!-- Scripts -->
    <script src="{{ asset('build/assets/app-20b9e4fb.js') }}"></script>
    <script src="{{ asset('jquery-3.6.3/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('bootstrap-5.2.3-dist/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('fontawesome-free-6.3.0-web/js/all.js') }}"></script>
    <script src="{{ asset('ckeditor5-build-classic/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                }
            })
            .catch(error => console.error(error));
    </script>
    @stack('scripts')
</body>
</html>
