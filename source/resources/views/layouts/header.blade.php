<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/search_box.js') }}" defer></script>
    <script src="{{ asset('js/btn_like.js') }}" defer></script>
    <script src="{{ asset('js/btn_ranking.js') }}" defer></script>
    <script src="{{ asset('js/change_rank_design.js') }}" defer></script>
   

    <!-- Fonts -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/linklist-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/post-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ranking-page.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm header">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="./images/logo.png" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="search-area"><i class="fas fa-search fa-lg icon-btn" id="search-btn"></i>
                            <input class="search-box" id="search-box">
                        </li>
                        <li class="post-icon-box"><a href="{{ url('/post') }}"><i
                                    class="fas fa-pen fa-lg icon-btn"></i></a></li>
                        <li class="nav-item dropdown user-icon-box">
                            <a id="navbarDropdown" href="{{ url('#') }}" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-user-alt fa-2x icon-btn"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right margin10" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('linklist') }}">
                                    link list
                                </a>
                                <a class="dropdown-item" href="{{ url('ranking') }}">
                                    ranking
                                </a>
                                <a class="dropdown-item" href="{{ url('contact') }}">
                                    contact
                                </a>
                                <a class="dropdown-item" href="{{ url('setting') }}">
                                    setting
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <!-- @guest
                                @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @endif

                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                        @else -->
                            <!-- <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li> -->
                        <!-- @endguest -->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 justify-content-center">
            @yield('content')
        </main>
    </div>
</body>

</html>
