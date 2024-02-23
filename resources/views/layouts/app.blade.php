<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}">
    <!-- Page Title  -->
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{url('assets/css/dashlite.css')}}">
    <link id="skin-default" rel="stylesheet" href="{{url('assets/css/theme.css')}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- JavaScript -->
    <script src="{{url('assets/js/bundle.js')}}"></script>
    <script src="{{url('assets/js/scripts.js')}}"></script>
    <script src="{{url('assets/js/charts/gd-default.js')}}"></script>
    <script src="{{url('assets/js/libs/datatable-btns.js')}}"></script>
</body>
</html>
