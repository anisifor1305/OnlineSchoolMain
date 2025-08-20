@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас | Наша компания</title>
    <link rel="stylesheet" href="{{ asset('css/styles/styles_about.css')}}">
</head>

    <section id="about-us" class="about-section">
        <!-- <h1>О нас</h1> -->
        <div class="maintitle">
            <h2 class="maintext mainhead">На старой железяке далеко не улетишь</h2>
        </div>
        <p class="left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, assumenda voluptate. Sint provident tenetur placeat.</p>
        <p class="left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, assumenda voluptate. Sint provident tenetur placeat.</p>
        <p class="left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, assumenda voluptate. Sint provident tenetur placeat.</p>
    </section>

    <section id="services" class="services-section">
        <h2>Юридические данные</h2>
        <ul>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, neque?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, neque?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, neque?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, neque?</li>
        </ul>
    </section>

    <footer class="footer">
        <div class="container">
            <p class="rights">&copy; DENIS 2025. Все права пока что не защищены.</p>
            <div class="footer__column">
                <div class="footer__secure">Политика конфиденциальности</div>
                <div class="footer__secure">FAQ</div>
            </div>
        </div>
    </footer>
</body>
</html>
@endsection