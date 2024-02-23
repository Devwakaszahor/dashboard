<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}">
    <!-- Page Title  -->
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{url('assets/css/dashlite.css')}}">
    <link id="skin-default" rel="stylesheet" href="{{url('assets/css/theme.css')}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <style>
        #hero img {
            height: 100vh;
        }

        .carousel-caption {
            text-align: center;
        }

        .support-title {
            color: red;
            animation-name: slide-down;
            animation-duration: 2s;
            animation-fill-mode: forwards;
        }
        .appname{
    margin-left: 30px;
    font-size: 25px;
    font-weight: bolder;
    font-style: italic;
        }
    </style>
</head>

<body>
    <header id="header">

        <!-- NAVBAR Section for the site, future pages to be added later -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand text-danger font-weight-bold appname" href="{{url('/')}}">
                    OnTime Cars &nbsp;
                </a>
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{url('dashboard')}}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Dashboard
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
        <div id="hero" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img src="https://images.unsplash.com/photo-1601308314913-5b3a9f8f2bfe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1241&q=80" class="d-block w-100" alt="Plane to travel">
                    <div class="carousel-caption d-none d-md-block" id="text-title">
                        <h1 class="display-1" id="title-text">On Time Cars</h1>
                        <p class="support-title">Just a call away from you!</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

</body>

</html>