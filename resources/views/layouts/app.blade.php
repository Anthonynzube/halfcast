<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('APP_NAME', 'HalfCast') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('css/vendor/bootstrap.min.css') }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset ('css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/vendor/dlicon.css') }}">
    <!-- Others CSS -->
    <link rel="stylesheet" href="{{ asset ('css/plugins/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/easyzoom.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/fullpage.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('APP_NAME', 'HalfCast') }}
                </a> -->
                <a href="/" class="navbar-brand">
                    <img src="{{ asset ('images/logo/logo.png') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><h4>{{ __('Login') }}</h4></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><h4>{{ __('Register') }}</h4></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
