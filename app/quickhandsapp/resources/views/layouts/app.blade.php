<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/header/header.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/styles_i.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/styles_p.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/primary-font/primary-font.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/banner.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/footer/footer.css')}}">
    <!-- Используем современный шрифт -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet"> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="header__panel header__panel--mid">
            <div class="header__panel-main header__panel-main--mid">
                <div class="header__panel-block-btn">
                <a class="header__panel-btn__logo" href="/"> 
                    <img  src="{{ asset('images/logo.jpg')}}" alt="" height="30" width="30"> 
                    <img  src="{{ asset('images/line.svg')}}" alt="" height="30" width="30"> 
                    <p class="logo__text" href="/about"> физика <br> - это просто </p>
                </a>
                </div>
                <div class="header__panel-block-btn"><a class="header__panel-btn primary-font mobile-none" href="/about"> О нас </a></div>
                <div class="header__panel-block-btn"><a class="header__panel-btn primary-font mobile-none" href="/pay">Купить курс </a></div>
                <div class="header__panel-block-btn"><a class="header__panel-btn primary-font mobile-none" href="/course"> Информация </a></div>
                <div class="header__panel-block-btn"><a class="header__panel-btn primary-font mobile-none" href="/profile"> Профиль </a></div>
<ul class="navbar-nav">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile') }}"> Профиль</a>>
                                    <a class="dropdown-item" href="{{ route('chats') }}"> Чаты</a>>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                
                            </li>
                        @endguest
                    </ul>

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
