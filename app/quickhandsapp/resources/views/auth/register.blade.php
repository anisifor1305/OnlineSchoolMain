@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зарегистрируйтесь</title>
    <link rel="stylesheet" href="{{ asset('css/styles/style_register.css') }}">
</head>
<div class="container register-container">
    <div class="row justify-content-center">
        <div class="col-md-10 regform">
            <div class="auth-card shadow-lg p-4 rounded">
                <h2 class="auth-title">{{ __('Регистрация') }}</h2>
                
                <div class="auth-body">
                    <form method="POST" class='registration_form' action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3 row">
                            <label for="firstname" class="col-md-3 col-form-label text-md-end">{{ __('Имя') }}</label>

                            <div class="col-md-9">
                                <input id="firstname" type="text" class="form-control custom-input @error('name') is-invalid @enderror" name="firstname" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="lastname" class="col-md-3 col-form-label text-md-end">{{ __('Фамилия') }}</label>
                            
                            <div class="col-md-9">
                                <input id="lastname" type="text" class="form-control custom-input @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Электронная почта') }}</label>
                            
                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control custom-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Пароль') }}</label>
                            
                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control custom-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-end">{{ __('Повторите пароль') }}</label>
                            
                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control custom-input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-3"></div>
                            <div class="col-md-9 d-flex justify-content-start">
                                <button type="submit" class="auth-button">
                                    {{ __('Зарегистрироваться') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection