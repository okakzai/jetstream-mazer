<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/app.css') }}">
    @livewireStyles
</head>
<body>
    <div id="app">
        @include('layouts.sidebar')

        <div id="main">
            @include('layouts.header')

            <div class="content-wrapper">
                @yield('content')
            </div>

            @include('layouts.footer')
        </div>
    </div>

    <script src="{{ asset('template/mazer/compiled/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/mazer/compiled/js/app.js') }}"></script>
    @livewireScripts
</body>
</html>
