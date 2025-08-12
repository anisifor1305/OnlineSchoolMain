@extends('layouts.app')

@section('content')
    <head>
        <script>
            var csrf_token =  '<?php echo csrf_token(); ?>';
            window.csrfToken = '<?php echo csrf_token(); ?>';
        </script>
        <link rel="stylesheet" href="{{ asset('css/styles/chat.css')}}">
    </head>
    <div class="container">
        <div id="main" data-user="{{ json_encode($user) }}"></div>
    </div>
    
@endsection