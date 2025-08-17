@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/header/header.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/styles_i.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/styles_p.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/styles_c.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/primary-font/primary-font.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/banner.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/footer/footer.css')}}">
    <!-- Используем современный шрифт -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet"> 
</head>


<div id='main-lesson' link={{$link}} videoStep={{$videoStep}} courseId={{$courseId}} name='{{$name}}' videoNames='{{$videoNames}}'></div>

@endsection