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
    <h1>Панель модератора</h1>
    <a href="/setcourse">Установка курса со степом 2</a>
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
    <form action="/newcourse" method="post">
        @csrf
        <label for="name">Название:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="lore">Описание</label><br>
        <input type="text" id="lore" name="lore"><br>
        <label for="count">Количество видео:</label><br>
        <input type="text" id="count" name="count"><br>
        <label for="video_names">Названия видео (список тем, через запятую)</label><br>
        <input type="text" id="video_names" name="video_names"><br>
        <button type="submit">Добавить</button>
    </form>
</div>
</body>
</html>