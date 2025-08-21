@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles/styles_payment.css')}}">
</head>
<body>
     <div class="container">
        <div class="toptextcontainer_payment">
            <div class="toptext_payment">
                Купите мой курс, и все будет хорошо.
            </div>
        </div>
        <div class="row_payment">
            <a class="coursebuttonref_payment" href="/setcourse/1">
                <div class="coursebutton_payment">
                    <div class="imgblock_payment">
                        <img class="cbimage_payment" src="./images/bannerstyle/bg.png" alt="">
                    </div>
                    <div class="coursenumber_payment">Один месяц <br> и четыре гарантированных видео</div>
                    <div class="coursecost_payment">1<div class='divive'>950₽</div></div>
                </div>
            </a>
            <a class="coursebuttonref_payment" href="/setcourse/1">
                <div class="coursebutton_payment">
                    <div class="imgblock_payment">
                        <img class="cbimage_payment" src="./images/bannerstyle/bg.png" alt="">
                    </div>
                    <div class="coursenumber_payment">Весь учебный год <br> и вся программа подготовки</div>
                    <div class="coursecost_payment">15<div class='divive'>650₽</div></div>
                </div>
            </a>
        </div>
        <footer class="footer">
            <div class="container">
                <p class="rights">&copy; DENIS 2025. Все права пока что не защищены.</p>
                <div class="footer__column">
                    <div class="footer__secure">Политика конфиденциальности</div>
                    <div class="footer__secure">FAQ</div>
                </div>
            </div>
        </footer>
    </div>

</body>
@endsection