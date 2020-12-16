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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container px-5">
                {{-- navbar brand  --}}
                <a class="navbar-brand" href="{{ url('/') }}">
                    Instagram
                </a>

                {{-- toggler icon  --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- navbar item  --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav" style="margin-left: 30%; ">
                        <input type="search" placeholder="search" class="border border-secondary rounded text-center">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
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
                        @else
                                {{-- home  --}}
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <img src={{ asset('icons/icon_instagram.webp') }} alt="home icon" style="max-width: 100%; height: 25px">
                                </a>
                            </li>

                            {{-- direct inbox  --}}
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <img src={{ asset('icons/direct.png') }} alt="home icon" style="max-width: 100%; height: 25px">
                                </a>
                            </li>

                            {{-- explore  --}}
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <img src={{ asset('icons/icons8-compass-24.png') }} alt="home icon" style="max-width: 100%; height: 25px">
                                </a>
                            </li>

                            {{-- love  --}}
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <img src={{ asset('icons/love2.png') }} alt="home icon" style="max-width: 100%; height: 25px;">
                                </a>
                            </li>

                            {{-- Profile image  --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="">
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="">
                                        Saved
                                    </a>
                                    <a class="dropdown-item" href="">
                                        Settings
                                    </a>

                                    <a class="dropdown-item" href="">
                                        Switch Account
                                    </a>
                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container p-5">
            @yield('content')
        </main>
    </div>
</body>
</html>
