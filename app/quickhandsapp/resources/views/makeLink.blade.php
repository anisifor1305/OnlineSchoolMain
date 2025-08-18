<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание линка</title>
</head>
<body>
    <h1>Привязать линк на видео</h1>
    <p>Если видео было загружено на сервер, а курс с ним удалён, то можно сделать линк этого видео на какой-то шаг определенного курса.</p>
    <!-- Форма отправки видео -->
    <form method="POST" action="/makelink" enctype="multipart/form-data">
        @csrf <!-- защита CSRF -->

        <label for="video">Введите название файла, например, "1.mp4"</label><br>
        <input type="string" id="video" name="video"><br>
        <label for="step">Шаг</label><br>
        <input type="integer" id="step" name="step"><br>
        <label for="course_id">id курса</label><br>
        <input type="integer" id="course_id" name="course_id"><br>
        <label for="lore">Описание видео</label><br>
        <input type="string" id="lore" name="lore"><br>
        <button type="submit">Привязать линк</button>
    </form>
</body>
</html>