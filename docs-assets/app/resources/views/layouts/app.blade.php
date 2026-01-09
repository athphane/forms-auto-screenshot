<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Forms Screenshot Demo</title>

    <link rel="stylesheet" href="{{ asset('vendors/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">

    @vite(['resources/sass/web/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="{{ asset('js/jquery-bootstrap.js') }}"></script>
    <script src="{{ asset('js/vendors.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/translations.js') }}"></script>
</body>
</html>
