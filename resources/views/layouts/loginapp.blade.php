<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Improlab') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .nav-color-bg{
            background-color: #0e1e24 !important;
        }
        .navbar-light .navbar-nav .nav-link{
            color: #fff !important;
        }
        .logo-box{
            max-width:200px;
            margin: 0 auto;
        }
        .logo-box img{
            width:100%;
        }
        .reg{
            display:block;
            padding:30px 0px;
            border:0;
        }
        .reg-nav{
            color:#fff !important;
            width:100px !important;

        }
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
