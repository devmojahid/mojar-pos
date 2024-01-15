<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset("assets/backend/css/font-awesome-pro.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/backend/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/backend/plugins/toastify/toastify.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/backend/plugins/tom-select/tom-select.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/backend/css/main.css") }}">
    @stack("styles")
    <link rel="stylesheet" href="{{ asset("assets/backend/css/custom.css") }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include("layouts.partials.header")
        @include("layouts.partials.sidebar")
        <main class="content-wrapper custom-content-wrapper">
            @yield('content')
        </main>
        @include("layouts.partials.footer")
    </div>

    <script src="{{ asset("assets/backend/js/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/backend/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/toastify/toastify.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/tom-select/tom-select.complete.min.js") }}"></script>
    <script src="{{ asset("assets/backend/js/main.js") }}"></script>
    @include("layouts.partials.allert")
    @stack("scripts")
    <script src="{{ asset("assets/backend/js/custom.js") }}"></script>
</body>
</html>
