<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
</body>
</html>
