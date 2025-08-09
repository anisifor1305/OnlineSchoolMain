<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/header/header.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/styles_i.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/styles_p.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/primary-font/primary-font.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/banner.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/BEM blocks/footer/footer.css')}}">
    <!-- Используем современный шрифт -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet"> 
    <title>Ваш профиль</title>
</head>
<body>
    <body>
    <header class="header">
        <nav class="header__panel header__panel--mid">
            <div class="header__panel-main header__panel-main--mid">
                <div class="header__panel-block-btn">
                <a class="header__panel-btn__logo" href="/"> 
                    <img  src="{{ asset('images/logo.jpg')}}" alt="" height="30" width="30"> 
                    <img  src="{{ asset('images/line.svg')}}" alt="" height="30" width="30"> 
                    <p class="logo__text" href="/about"> физика <br> - это просто </p>
                </a>
                </div>
                <div class="header__panel-block-btn"><a class="header__panel-btn primary-font mobile-none" href="/about"> О нас </a></div>
                <div class="header__panel-block-btn"><a class="header__panel-btn primary-font mobile-none" href="/pay">Купить курс </a></div>
                <div class="header__panel-block-btn"><a class="header__panel-btn primary-font mobile-none" href="/course"> Информация </a></div>
                <div class="header__panel-block-btn"><a class="header__panel-btn primary-font mobile-none" href="/profile"> Профиль </a></div>
                <div class="header__panel-block-btn"><a class="primary-font header__panel-btn header__panel-btn--right" href="/profile">
                    <img class="header__icon" src="{{ asset('images/header__icon--burger/header__icon--burger.svg')}}" alt="" height="30" width="30">
                </a> </div>
            </div>

        </nav>

    </header>

    <icon_&_table class="hero"> 
        <div class="container maincont inline_block ">
            <div>
                <img class="profile_icon" src="{{ asset('images/profile (author).png')}}" alt="" height="30" width="30">
            </div>
            <div class="table">
                <div class="column">
                    <div class="cell">Имя</div>
                    <div class="cell">Фамилия</div>
                    <div class="cell secure"><a class="secure" href="#" >Управление безопасностью</a></div>
                    <div class="cell secure"><a class="secure" href="#" >FAQ</a></div>
                </div >
                <div class="column">
                    <div class="cell">{{$firstname}}</div>
                    <div class="cell">{{$lastname}}</div>
                    <div class="cell secure"><a class="secure" href="#" >Политика конфиденциальности</a></div>
                </div>
            </div>
        </div>
    </icon_&_table>

    <my_course class="my_course"> 
        <div class="course">
            Мои Курсы
        </div>
      <div class="course-block">
    <h2 class="title">Физика: ЕГЭ</h2>
    <p class="description">Эффективная и интересная подготовка к ЕГЭ по физике</p>
    <div class="progress-container" id="scrollPlace">
      <div class="progress-bar">
        <ul class="steps">
          <li class="step completed"><span></span><small>Кинематика</small></li>
          <li class="step completed"><span></span><small>Динамика</small></li>
          <li class="step completed"><span></span><small>Статика</small></li>
          <li class="step completed"><span></span><small>Панорама</small></li>
          <li class="step completed"><span></span><small>Окно</small></li>
          <li class="step completed"><span></span><small>Балкон</small></li>
          <li class="step completed"><span></span><small>Фасад</small></li>
          <li class="step completed"><span></span><small>Смотровая площадка</small></li>
          <li class="step completed"><span></span><small>Сисли</small></li>
          <li class="step completed"><span></span><small>Элвис Пресли</small></li>
          <li class="step current"><span></span><small>Джек Дениелс</small></li>
          <li class="step remaining"><span></span><small>Френсис Порт Копула</small></li>
          <li class="step remaining"><span></span><small>Опера</small></li>
          <li class="step remaining"><span></span><small>Хор</small></li>
          <li class="step remaining"><span></span><small>Nenja-or</small></li>
          <li class="step remaining"><span></span><small>Винзавод</small></li>
          <li class="step remaining"><span></span><small>Новый год</small></li>
          <li class="step remaining"><span></span><small>Работа с сетью</small></li>
          <li class="step remaining"><span></span><small>Тестирование</small></li>
          <li class="step remaining"><span></span><small>Проектирование ПО</small></li>
          <li></li>
        </ul>
      </div>
    </div>
  </div>
    </my_course>

    <footer class="footer">
        <div class="container">
            <p class="rights">&copy; DENIS 2025. Все права пока что не защищены.</p>
            <div class="footer__column">
                <div class="footer__secure">Политика конфиденциальности</div>
                <div class="footer__secure">FAQ</div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        const completed = 9;
        const targetElement = document.getElementById('scrollPlace');
        targetElement.scrollLeft = 150*completed;
    });
    </script>


    
</body>
</html>
    
</body>
</html>