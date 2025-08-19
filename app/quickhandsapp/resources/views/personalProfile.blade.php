@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/header/header.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/styles/styles_i.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('css/styles/styles_p.css')}}">
    <!-- <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/primary-font/primary-font.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/banner.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/footer/footer.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet"> 
</head>
<script>
    const firstname= '{{ $firstname }}';
    const lastname= '{{ $lastname }}';
    const email= '{{ $email }}';
</script>
<div id="main-profile" coursesInfo='{{ $coursesInfo }}' stepNumbers='{{$steps}}'></div>
    
@endsection

