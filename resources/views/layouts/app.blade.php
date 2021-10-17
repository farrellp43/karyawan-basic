<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Karyawan &middot; @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Icon --}}
    <link rel="shortcut icon" href="{{ url('images/favicon.png') }}" type="image/png">

    {{-- Style --}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/components.css') }}">

    @stack('scripts')

</head>

<body>
    @yield('content')

    {{-- Script JS --}}
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url('js/stisla.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
</body>

</html>