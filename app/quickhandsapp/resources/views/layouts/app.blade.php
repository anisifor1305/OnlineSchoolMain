<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/header/header.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/primary-font/primary-font.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/footer/footer.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="header__panel header__panel--mid">
            <div class="header__panel-main header__panel-main--mid">
                <div class="header__panel-block-btn">
                <a class="header__panel-btn__logo" href="/"> 
                    <img class="jet_logo" src="{{ asset('images/logo_without_text.svg')}}" alt=""> 
                    <img class="jet" src="{{ asset('images/only_text.svg')}}" alt=""> 
                    <!-- <img  src="{{ asset('images/logo.jpg')}}" alt="" height="30" width="30"> 
                    <img  src="{{ asset('images/line.svg')}}" alt="" height="30" width="30"> 
                    <p class="logo__text" href="/about"> физика <br> - это просто </p> -->
                </a>
                </div>
                <div class="header__panel-block-btn"><a class="header__panel-btn primary-font mobile-none" href="/pay">Купить курс </a></div>
                <div class="header__panel-block-btn"><a class="header__panel-btn primary-font mobile-none" href="/about"> Информация </a></div>
                @guest
                <a class="header__panel-btn primary-font mobile-none" href="{{ route('login') }}">{{ __('Войти') }}</a>
                <a class="header__panel-btn primary-font mobile-none" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                @else
                <div class="header__panel-block-btn"><a class="header__panel-btn primary-font mobile-none" href="/profile"> Профиль </a></div>
                @endguest

                @guest
                @else
                <div class="dropdown">
                    <a class="header__panel-btn primary-font">{{ Auth::user()->firstname }} <img class="burger" src="{{ asset('images/hamburger-menu.svg')}}" alt="" height="30" width="30"> </a>
                    <div class="dropdown-content">
                        <a class="dropdown_a"href="{{ route('profile') }}"> Профиль</a>
                        <a class="dropdown_a"href="/chats/1"> Вопрос преподавателю</a>
                        <a class="dropdown_a"href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Выйти') }}
                        </a>
                        <a class="mobile_on" href="{{ route('about') }}"> Информация </a>
                        <a class="mobile_on" href="{{ route('pay') }}"> Покупка курсов</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
