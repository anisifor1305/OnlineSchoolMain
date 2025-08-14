<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузить видео</title>
</head>
<body>
    <h1>Загрузка нового видео</h1>

    <!-- Форма отправки видео -->
    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf <!-- защита CSRF -->

        <label for="video">Выберите файл видео (*.mp4)</label><br>
        <input type="file" id="video" name="video" accept="video/*"><br>
        <label for="step">Шаг</label><br>
        <input type="integer" id="step" name="step"><br>
        <label for="course_id">id курса</label><br>
        <input type="integer" id="course_id" name="course_id"><br>
        <label for="lore">Описание видео</label><br>
        <input type="string" id="lore" name="lore"><br>
        <button type="submit">Загрузить видео</button>
    </form>
</body>
</html>