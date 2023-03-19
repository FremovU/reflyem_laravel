<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta property="og:title" content="Reflyem">

    <meta name="description" content="Reflyem это сборка модов для Skyrim Special Edition,
                                        которая меняет множество аспектов игры и создана для того,
                                        чтобы ваше путешествие по миру Скайрима было
                                        максимально комфортным и приятным.">
    <meta property="og:description" content="Reflyem это сборка модов для Skyrim Special Edition,
                                        которая меняет множество аспектов игры и создана для того,
                                        чтобы ваше путешествие по миру Скайрима было
                                        максимально комфортным и приятным.">
    <meta name="keywords" content="Reflyem, Рефлием, Скайрим спешл эдишен, сборка модов, моды, reflyem">
    <meta name="yandex-verification" content="e29c8116acf9e039" />
    <link rel="shortcut icon" href="{{asset('images/slidkiy_rulet.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/slidkiy_rulet.png')}}">
    <title> Reflyem </title>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
{{--    <link rel="stylesheet" href="{{ asset('style/main.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('style/scrollbar.css') }}">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color: rgba(0, 0, 0, 0.8)!important;">
    <div class="container-fluid">
        <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <i class="fas fa-bars text-light"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white " aria-current="page" href="#Main">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white ms-3 me-3" href="#Base">База знаний</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  me-3" href="#Discord">Дискорд</a>
                </li>
                <li class="nav-item text-white">
                    <a class="nav-link text-white me-2" href="#Donation">Поддержка</a>
                </li>
                <li class="nav-item p-0 fs-5">
                    <div class="dropdown text-center shadow-0" style="background-color: rgba(0, 0, 0, 0)!important;">
                        <button
                                class="btn btn-black text-light dropdown-toggle"
                                type="button"
                                id="dropdownMenuButton"
                                data-mdb-toggle="dropdown"
                                aria-expanded="false"


                        >
                            <span class="text-lowercase"><span class="text-uppercase">Д</span>ля игроков</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="faq.html">Как установить?</a></li>
                            <li><a class="dropdown-item" href="builds.html">Билды</a></li>
                            <li><a class="dropdown-item" href="guides.html">Гайды</a></li>
                            <li><a class="dropdown-item" href="calcLP.html" target="_blank">Калькулятор LP</a></li>
                            <li><a class="dropdown-item" href="database">База знаний</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Блок Главная -->
<div
        class="bg-image p-5 text-center shadow-1-strong"
        style="background-image: url('{{asset('images/3690802.jpg')}}');
        height: 1000px;
"
>
        <a name="Main"></a>
        <div class="d-flex justify-content-center align-items-center h-100 " style="">
            <div class="text-white shadow-5 ">
                <h1 class="mb-3"> <img src="{{ asset('images/logo.png') }}" style="height: 150px" alt="logo"></h1>
                <h4 class="mb-3 text-center lh-base ps-3 pe-3 pt-2 border border-2 d-flex"
                    style="height: 180px; background-color: rgba(0, 0, 0, 0.6)!important;  border-color: rgba(233, 177 , 177 , 0.5)!important;">
                    Reflyem это сборка модов для Skyrim Special Edition,<br>которая меняет множество аспектов игры и создана для того,<br>чтобы
                    ваше путешествие по миру Скайрима было<br> максимально комфортным и приятным.</h4>
                <a target="_blank" class="btn text-white btn-lg fw-normal rounded-pill mt-3 justify-content-center align-items-center pt-3"
                   style="width: 250px; height: 70px;background-color: rgba(0, 0, 0, 0.6) !important; border-color: rgba(233, 177 , 177 , 0.5)!important;"
                   href="https://drive.google.com/file/d/1IjC1BkzpyYGuI8Oy1VupeaG2wx_kOhur/view?usp=share_link" role="button">Скачать сборку</a>
            </div>
        </div>
</div>
<!-- Блок Главная -->

<!-- Блок Базы знаний -->
<a name="Base"></a>
<div
        class="bg-image p-5 shadow-1-strong text-white d-flex align-items-center"
        style="background-image: url('{{asset('images/62e8e4a757055 копия.jpg')}}');

        height: 1000px;
"
>
    <div class=" ">
        <div class="text-white shadow-5  text-start">
            <h1 class="mb-3 text-center" style="font-size: 60px">База знаний</h1>
            <h4 class="mb-3 fw-normal pt-4 ps-5" style="">Основную информацию касательно сборки вы <br> можете получить
                из нашей базы знаний.<br> Здесь находится описание многих аспектов игры <br> которые вы можете изучить
                не скачивая саму <br> сборку.</h4>
            <div class="text-center pt-1">
            <a target="_blank" class="btn text-white btn-lg fw-normal rounded-pill  justify-content-center align-items-center pt-3"
               style="width: 250px; height: 70px; border-color: rgba(233, 177 , 177 , 0.5)!important;"
               href="https://docs.google.com/spreadsheets/d/1iZ5joNo9xgOA9Z-dAdt0RnIXJmdzjI13kJPduLEe38I/edit#gid=28461296"
               role="button">Узнать больше</a>
            </div>
        </div>
    </div>
</div>
<!-- Блок Базы знаний -->

<!-- Блок дискорда -->
<div
        class="bg-image p-5 text-center shadow-1-strong  text-white"
        style="background-image: url('{{asset('images/werfd.jpg')}}');
        height: 1000px;
"
>

    <a name="Discord"></a>
    <div class="h-100 d-flex justify-content-start align-items-center ms-5">
       <iframe  class="align-self-center me-auto" src="https://discord.com/widget?id=769091851977490432&theme=dark"
                width="380" height="500" allowtransparency="true" frameborder="0"
                sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        <div class="text-white  w-50 justify-content-end me-5 pe-5">
            <h1 class="mb-3 border text-center mb-5 pt-2"
                style="height: 100px; background-color: rgba(0, 0, 0, 0.6)!important;
                border-color: rgba(233, 177 , 177 , 0.5)!important; font-size: 60px">Дискорд</h1>

            <h4 class="mb-3 fw-normal text-start border mb-5 ps-3 pe-3 pt-3"
                style="height: 230px;background-color: rgba(0, 0, 0, 0.6)!important;
                border-color: rgba(233, 177 , 177 , 0.5)!important;
                overflow: hidden !important;
                max-height: 300px !important;">
                Присоединяйся к нашему Discord сообществу Reflyem, чтобы быть в курсе последних событий связанных с развитием сборки.
                Здесь ты также найдешь ответы на интересующие тебя вопросы и сможешь просто общаться с такими же любителями Скайрима как и ты сам.</h4>
            <a target="_blank" class="btn text-white btn-lg fw-normal rounded-pill justify-content-center align-items-center pt-3 Frem"
               style="width: 270px; height: 70px; background-color: rgba(0, 0, 0, 0.6)!important; border-color:
               rgba(233, 177 , 177 , 0.5)!important;"
               href="https://discord.gg/BvRarMSpm3" role="button">Присоединиться</a>
        </div>
    </div>
</div>
<!-- Блок дискорда -->


<!-- Блок Поддержка -->
<a name="Donation"></a>
<div
        class="bg-image p-5 shadow-1-strong text-white d-flex align-items-center"
        style="background-image: url('{{asset('images/sdfds24.jpg')}}');

        height: 1000px;
"
>
    <div class=" ">
        <div class="text-white shadow-5  text-start">
            <h1 class="mb-3 text-center" style="font-size: 60px">Поддержка</h1>
            <h4 class="mb-3 fw-normal pt-4 ps-5" style="">Если тебе понравилась сборка и ты хочешь <br> поддержать
                её развитие не только словом, но и
                <br> делом, то лучший способ это оформить подписку <br> на Boosty, либо перевести любую посильную
                <br> сумму через один из сервисов для донатов.</h4>
            <div class="text-center pt-1">
                <a target="_blank"
                   class="btn rounded-pill  justify-content-center align-items-center ps-2"
                   style="width: 250px; height: 70px;border-color: rgba(233, 177 , 177 , 0.5)!important;
                   background-color: #212121"
                   href="https://boosty.to/refly" role="button">
                    <img src="{{asset('images/boostyf.png')}}" style="width: 170px; height: 55px;" alt="boosty">
                </a>
                <a target="_blank" class="btn btn-outline-light btn-lg fw-normal rounded-pill  justify-content-center align-items-center pt-2"
                   style="width: 250px; height: 70px;border-color: rgba(233, 177 , 177 , 0.5)!important;
                   background-color: #212121" href="https://www.donationalerts.com/r/reflytv" role="button">
                    <img src="{{asset('images/donation%20alerts.png')}}" style="width: 170px; height: 55px" alt="DonationAlerts">
                </a>
                <a target="_blank" class="btn btn-outline-light btn-lg fw-normal rounded-pill  justify-content-center align-items-center p-1"
                   style="width: 250px; height: 70px;border-color: rgba(233, 177 , 177 , 0.5)!important;
                   background-color: #212121" href="https://new.donatepay.ru/@reflyq" role="button">
                    <img src="{{asset('images/donatepay_logo.png')}}" style="width: 170px; height: 55px" alt="donatPay">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Блок Поддержка -->


</body>
</html>
