
@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизируйтесь</title>
    <link rel="stylesheet" href="{{ asset('css/styles/style_auth.css')}}">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <h2 class="auth-title">{{ __('Войти') }}</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="field-group">
                    <label for="email">{{ __('Электронная почта') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field-group">
                    <label for="password">{{ __('Пароль') }}</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field-group remember-me">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">{{ __('Запомнить меня') }}</label>
                </div>
                <button type="submit" class="auth-button">{{ __('Войти') }}</button>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-password">{{ __('Забыли пароль?') }}</a>
                @endif
            </form>
        </div>
    </div>
</body>
</html>
@endsection