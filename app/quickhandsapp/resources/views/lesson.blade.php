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

<body>
    <div>
        <div class="rowadaptiv_с">
            <div class="column_с">
                <div class="topblock_c">
                    <div class="toptext_c">
                        <div class="buttonblock_c"><a href="/profile"class="button_c button1_c">Содержание программы</a></div>
                        <div class="buttonblock_c"><a href="/lesson/{{$courseId}}{{$videoStep-1}}" class="button_c button2_c">К предыдущему</a></div>
                        <div class="buttonblock_c"><a href="/lesson/{{$courseId}}{{$videoStep+1}}" class="button_c button3_c">К следующему</a></div>
                    </div>
                    <div class="name_c">Физика (лекции)</div>
                </div>
                <div class="videoblock_c">
                    <div class="videotext_c">Урок 1. {{$name}}</div>
                    <div ><iframe class="video_c" src="{{$link}}" frameBorder="0" allow="clipboard-write" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                    <div>
                        <div class="commenttext_c">Написать вопрос преподавателю:</div>
                        <div class="text-field_c">
                            <input class="text-field__input_c" type="text" name="login" id="login" placeholder="Ваш вопрос" value="">
                        </div>
                    </div>
                    <div class="name2_c">Физика (лекции)</div>
                </div>
                <div class="content_c">
                    <div class="contentname_c">Содержание программы</div>
                    <div class="row_с">
                        <a class="vbuttonblock_c" href="#">
                            <div class="vbutton_c">
                                <div>
                                    <img class="vbimage_c" src="./images/bannerstyle/bg.png" alt="">
                                    <img class="eye_c" src="./images/weye (2).png" alt="">
                                    <div class="checked_c">Просмотрено</div>
                                    <img class="play_c" src="./images/play (1).png" alt="">
                                </div>
                                <div class="lessonnumber_c">Урок 1</div>
                                <div class="lessonname_c">Знакомство с механикой</div>
                            </div>
                        </a>
                        <a class="vbuttonblock_c" href="#">
                            <div class="vbutton_c">
                                <div>
                                    <img class="vbimage_c" src="./images/bannerstyle/bg.png" alt="">
                                    <img class="eye_c" src="./images/weye (2).png" alt="">
                                    <div class="checked_c">Просмотрено</div>
                                    <img class="play_c" src="./images/play (1).png" alt="">
                                </div>
                                <div class="lessonnumber_c">Урок 1</div>
                                <div class="lessonname_c">Знакомство с механикой</div>
                            </div>
                        </a>
                        <a class="vbuttonblock_c" href="#">
                            <div class="vbutton_c">
                                <div>
                                    <img class="vbimage_c" src="./images/bannerstyle/bg.png" alt="">
                                    <img class="eye_c" src="./images/weye (2).png" alt="">
                                    <div class="checked_c">Просмотрено</div>
                                    <img class="play_c" src="./images/play (1).png" alt="">
                                </div>
                                <div class="lessonnumber_c">Урок 1</div>
                                <div class="lessonname_c">Знакомство с механикой</div>
                            </div>
                        </a>
                        <a class="vbuttonblock_c" href="#">
                            <div class="vbutton_c">
                                <div>
                                    <img class="vbimage_c" src="./images/bannerstyle/bg.png" alt="">
                                    <img class="eye_c" src="./images/weye (2).png" alt="">
                                    <div class="checked_c">Просмотрено</div>
                                    <img class="play_c" src="./images/play (1).png" alt="">
                                </div>
                                <div class="lessonnumber_c">Урок 1</div>
                                <div class="lessonname_c">Знакомство с механикой</div>
                            </div>
                        </a>
                        <a class="vbuttonblock_c" href="#">
                            <div class="vbutton_c">
                                <div>
                                    <img class="vbimage_c" src="./images/bannerstyle/bg.png" alt="">
                                    <img class="eye_c" src="./images/weye (2).png" alt="">
                                    <div class="checked_c">Просмотрено</div>
                                    <img class="play_c" src="./images/play (1).png" alt="">
                                </div>
                                <div class="lessonnumber_c">Урок 1</div>
                                <div class="lessonname_c">Знакомство с механикой</div>
                            </div>
                        </a>
                        <a class="vbuttonblock_c" href="#">
                            <div class="vbutton_c">
                                <div>
                                    <img class="vbimage_c" src="./images/bannerstyle/bg.png" alt="">
                                    <img class="eye_c" src="./images/weye (2).png" alt="">
                                    <div class="checked_c">Просмотрено</div>
                                    <img class="play_c" src="./images/play (1).png" alt="">
                                </div>
                                <div class="lessonnumber_c">Урок 1</div>
                                <div class="lessonname_c">Знакомство с механикой</div>
                            </div>
                        </a>
                        <a class="vbuttonblock_c" href="#">
                            <div class="vbutton_c">
                                <div>
                                    <img class="vbimage_c" src="./images/bannerstyle/bg.png" alt="">
                                    <img class="eye_c" src="./images/weye (2).png" alt="">
                                    <div class="checked_c">Просмотрено</div>
                                    <img class="play_c" src="./images/play (1).png" alt="">
                                </div>
                                <div class="lessonnumber_c">Урок 1</div>
                                <div class="lessonname_c">Знакомство с механикой</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="addition_c">
                <div class="addition1_c">Материалы</div>
                <div ><a class="addition2_c" href="#">Ссылка на учебные материалы</a></div>
                <div ><a class="addition2_c" href="#">Ссылка на учебные материалы</a></div>
                <div ><a class="addition2_c" href="#">Ссылка на учебные материалы</a></div>
                <div class="addition3_c">Преподаватель</div>
                <div class="addition4_c">Ганиев Илья</div>
            </div>
        </div>
    </div>
@endsection