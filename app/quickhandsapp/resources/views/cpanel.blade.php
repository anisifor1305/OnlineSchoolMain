<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPanel OnlineSchool</title>
</head>
<body>
    <h1>Панель модератора</h1>
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
        <label for="userid">Название:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="userid">Описание</label><br>
        <input type="text" id="lore" name="lore"><br>
        <label for="userid">Количество видео:</label><br>
        <input type="text" id="count" name="count"><br>
        <label for="userid">Названия видео (список тем, через запятую)</label><br>
        <input type="text" id="video_names" name="video_names"><br>
        <button type="submit">Добавить</button>
    </form>
</body>
</html>