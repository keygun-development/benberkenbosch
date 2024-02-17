<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('pageTitle') - Ben Berkenbosch</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="preload" href="{{ asset($hero) }}" as="image" />
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<div>
    <div class="min-h-[calc(100vh-15vh)]">
        <div id="header">
            @include('partials.header')
            @if(Auth::check())
                @include('partials.authNavigation')
            @endif
            @yield('cta')
        </div>
        <div id="app">
            @yield('content')
        </div>
    </div>
    <div id="footer">
        @include('partials.footer')
    </div>
</div>
</body>
</html>
