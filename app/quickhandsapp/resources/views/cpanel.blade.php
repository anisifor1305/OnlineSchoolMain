<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles/cpanel.css')}}">
    <title>CPanel OnlineSchool</title>
</head>
<body>
<div class="container">
    <h1>Панель администратора</h1>
    <div class="maintype_cont">
        <p>Для тестирования, не разработчик - не юзайте</p>
        <a href="/setcourse/1">Установка курса со степом 2</a>
    </div>
    
    <h1>Забанить пользователя</h1>
    <form action="/banuser" method="post">
        @csrf
        <label for="userid">ID пользователя:</label><br>
        <input type="number" id="userid" name="userid"><br><br>
        <button type="submit">Забанить</button>
    </form>
    
    <h1>Разбанить пользователя</h1>
    <form action="/unbanuser" method="post">
        @csrf
        <label for="userid">ID пользователя:</label><br>
        <input type="number" id="userid" name="userid"><br><br>
        <button type="submit">Разбанить</button>
    </form>
    
    <h1>Курсы</h1>
    <h2>Создать курс</h2>
    <form action="/newcourse" method="post" class='newcourse_form'>
        @csrf
        <div class='input_place'>
        <label for="name">Название:</label><br>
        <input type="text" id="name" name="name"><br>
        </div>
        <div class='input_place'>
        <label for="lore">Описание (для вида в админ-панели, не исп. в части пользователя):</label><br>
        <input type="text" id="lore" name="lore"><br>
        </div>
        <div class='input_place'>
        <label for="count">Количество видео (планируемое, не сейчас):</label><br>
        <input type="text" id="count" name="count"><br>
        </div>
        <div class='input_place'>
        <label for="video_names">Названия видео (список тем, через знак ;)</label><br>
        <input type="text" id="video_names" name="video_names"><br>
        </div>
        <button type="submit">Добавить</button>
    </form>
    <h2>Список курсов</h2>
    @foreach($courses as $course)
    <div class="course_place">
        <div class="course_place__left">
            <h3>Информация о курсе:</h3>
            <div>id: {{$course->id}}</div>
            <div>{{$course->name}}</div>
            <div>{{$course->lore}}</div>
            <h3>Список видео:</h3>
            @foreach($videos as $video)
                @if($video->course_id==$course->id)
                <div class="grey_bgc">
                    <p>Шаг: {{$video->step}}</p>
                    <p>{{$video->lore}}</p>
                    <p>{{$video->link}}</p>
                    <?php
                        $videoName = substr($video->link, 7);
                    ?>
                    <a href="/removevideo/{{$videoName}}">Удалить</a>
                </div>
                @endif
            @endforeach
        </div>
        <div class="course_place__right">
            <div class="grey_bgc">
                <small>Внимание: в связи с тем, что Саня не высказал никаких пожеланий по схеме публикации курсов и видео, я высасывал её из пальца. Наслаждайтесь.</small>
            </div>
            <a href="/deletecourse/{{$course->id}}">Удалить курс </a>
            <a href="/upload">Загрузить видео </a>
        </div>
    </div>
    @endforeach
    <div class="maintype_cont notcenter">
        @if(count($videoFiles))
            @foreach($videoFiles as $file)
            <div class="video_block">
                <a href="/video/{{$file['name']}}">{{ $file['name'] }}</a>
                <div class="grey_bgc">
                <small>ВНИМАНИЕ: Вы можете сделать линк видео на шаг курса, <br> ТОЛЬКО если оно еще не залинковано!</small>
                </div>
                <a href="/makelink">Сделать линк</a>
            </div>
            @endforeach
        @else
            Нет видеофайлов!
        @endif
        
    </div>
</div>
</body>
</html>