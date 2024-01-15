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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset("assets/backend/css/font-awesome-pro.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("assets/backend/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/backend/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/backend/css/custom.css") }}">
</head>
<body>
    <div class="wrapper">
        <main>
            @yield('content')
        </main>
    </div>

    <!-- jQuery -->
    <script src="{{ asset("assets/backend/js/jquery.min.js") }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset("assets/backend/js/bootstrap.min.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("assets/backend/js/main.js") }}"></script>
    <script src="{{ asset("assets/backend/js/custom.js") }}"></script>
</body>
</html>
