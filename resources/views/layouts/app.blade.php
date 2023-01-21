<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('pageTitle') - Ben Berkenbosch</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body>
<div>
    <div class="min-h-screen max-h-screen" id="header">
        @include('partials.header')
        @yield('cta')
    </div>
    <div class="h-screen" id="app">
        @yield('content')
    </div>
    <div id="footer">
        @include('partials.footer')
    </div>
</div>
</body>
@vite(['resources/js/app.js'])
</html>
