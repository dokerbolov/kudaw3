<!DOCTYPE html>
<html>
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pactum</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            /*overflow-x: hidden; !* No horizontal scroll *!*/
            /*background-color: #f8f2e2; !* Use your background color *!*/
        }s
    </style>
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    <!-- Yandex Maps API -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU" type="text/javascript"></script>
    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#index">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">О Нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#what-we">Преимущества</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#heroes">Арбитры</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- banner section start -->
    <div id="index" class="banner_section layout_padding">
        <div class="container-fluid">
            <div id="banner_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner_taital_main">
                                    <h3 class="banner_taital">Международный Арбитражный Суд "Pactum"</h3>
                                    <p class="banner_text">Создан и функционирует в соответствии
                                        с действующим законодательством Республики Казахстан и является независимым, самостоятельным постоянно действующим органом
                                        по разрешению споров, возникающих между субъектами гражданских правоотношений.</p>
                                    <div class="readmore_btn active"><a href="#about-us">Подробнее</a></div>
                                    <div class="started_bt"><a href="#contacts">Контакты</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img"><img src="images/banner-img.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end -->
</div>
<!-- header section end -->
<!-- box section start -->
{{--<div class="container">--}}
{{--    <div class="box_section">--}}
{{--        <div class="online_box">--}}
{{--            <div class="online_box_left">--}}
{{--                <div class="online_box_main">--}}
{{--                    <div class="box_left">--}}
{{--                        <div class="right_arrow"><i class="fa fa-arrow-right"></i></div>--}}
{{--                    </div>--}}
{{--                    <div class="box_right">--}}
{{--                        <p class="book_text">Book At</p>--}}
{{--                        <h4 class="appoinment_text">Appoinment</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="online_box_left">--}}
{{--                <div class="online_box_main">--}}
{{--                    <div class="box_left">--}}
{{--                        <div class="right_arrow"><i class="fa fa-arrow-right"></i></div>--}}
{{--                    </div>--}}
{{--                    <div class="box_right">--}}
{{--                        <p class="book_text">Get Free</p>--}}
{{--                        <h4 class="appoinment_text"> Evalution</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="online_box_left">--}}
{{--                <div class="online_box_main">--}}
{{--                    <div class="box_left">--}}
{{--                        <div class="right_arrow"><i class="fa fa-arrow-right"></i></div>--}}
{{--                    </div>--}}
{{--                    <div class="box_right">--}}
{{--                        <p class="book_text">Pay Invoice</p>--}}
{{--                        <h4 class="appoinment_text">Online</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- box section end -->
<!-- services section start -->
<div id="what-we" class="services_section" style="background: #F8F2E2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 style="background: #F8F2E2" class="customer_taital">ПРЕИМУЩЕСТВА</h1>
            </div>
        </div>
    </div>
    <div class="services_section_2" style="margin-top: 0; padding-top: 0; padding-bottom: 0">
        <div class="container-fluid">
            <!-- Flex Container for Row 1 -->
            <div class="services_row flex-container">
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icon-1.png" class="image_1" alt=""/>
                        <img src="images/icon-4.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Международное признание</h3>
                </div>
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icon-2.png" class="image_1" alt=""/>
                        <img src="images/icon-5.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Порядок исполнения решений арбитража</h3>
                </div>
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icon-3.png" class="image_1" alt=""/>
                        <img src="images/icon-6.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Упрощенная процедура разбирательства спора</h3>
                </div>
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icon-1.png" class="image_1" alt=""/>
                        <img src="images/icon-4.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Возможность мирного урегулирования спора</h3>
                </div>
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icon-2.png" class="image_1" alt=""/>
                        <img src="images/icon-5.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Профессионализм и компетентность</h3>
                </div>
            </div>
            <!-- Flex Container for Row 2 -->
            <div class="services_row flex-container">
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icon-3.png" class="image_1" alt=""/>
                        <img src="images/icon-6.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Сокращенные и сжатые сроки рассмотрения споров</h3>
                </div>
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icon-1.png" class="image_1" alt=""/>
                        <img src="images/icon-4.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Экономичность</h3>
                </div>
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icon-2.png" class="image_1" alt=""/>
                        <img src="images/icon-5.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Гибкость и комфорт</h3>
                </div>
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icon-3.png" class="image_1" alt=""/>
                        <img src="images/icon-6.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Конфиденциальность арбитражного разбирательства</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services section end -->
<!-- studies section start -->
<div class="studies_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="studies_taital">СОГЛАШЕНИЕ</h1>
            </div>
        </div>
        <div class="studies_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="column">
                        <figure><img src="images/service-img4.png" alt=""/></figure>
                    </div>
                    <div class="studies_box">
                        <h3 class="introduction_text">Положение об арбитражных расходах и сборах</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="column">
                        <figure><img src="images/service-img5.png" alt=""/></figure>
                    </div>
                    <div class="studies_box">
                        <h3 class="introduction_text">Регламент НУ Международного арбитражного суда "Pactum"</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- studies section end -->
<!-- about section start -->
<div id="about-us" class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_img"><img src="images/about-img.png"></div>
            </div>
            <div class="col-md-6">
                <h1 class="about_taital">О нас</h1>
                <div class="about_text_main row">
                    <p class="about_text">Создан и функционирует в соответствии
                        с действующим законодательством Республики Казахстан и является независимым, самостоятельным постоянно действующим органом
                        по разрешению споров, возникающих между субъектами гражданских правоотношений.</p>
                    <div class="send_bt">
                        <a href="#about-us" id="openModalBtn">Оставить заявку</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about section end -->

<!-- heroes section start -->
<div class="container mt-5">
    <div id="heroes" class="row">
        <text class="customer_taital">АРБИТРЫ</text>
        <!-- First row with 4 items -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 text-center mb-4">
            <img src="images/heroes/samal.png" class="image_hero" alt="Person 1">
            <h4><b>Ордабаева Самал Токтасыновна</b></h4>
            <p>Председатель НУ МАС "Pactum"</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 text-center mb-4">
            <img src="images/heroes/zhanar.png" class="image_hero" alt="Person 2">
            <h4><b>Садыкова Жанар Еркинбековна</b></h4>
            <p style="margin: 0;">Постоянно действующий арбитр в Некоммерческом учреждении «Международный Арбитражный Суд «Pactum»</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 text-center mb-4">
            <img src="images/heroes/tatyana.png" class="image_hero" alt="Person 3">
            <h4><b>Бровко Татьяна Владимировна</b></h4>
            <p>Главный менеджер Управления правовой защиты Департамента правовой работы АО «Народный Банк Казахстана»</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 text-center mb-4">
            <img src="images/heroes/sergei.png" class="image_hero" alt="Person 4">
            <h4><b>Степасюк Сергей Николаевич</b></h4>
            <p>Директор ТОО Юридическая фирма BRAUS</p>
        </div>
    </div>

    <div class="row">
        <!-- Second row with 3 items -->
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mb-4">
            <img src="images/heroes/serik.png" class="image_hero" alt="Person 5">
            <h4><b>Сюндиков Серик Токтарбекович</b></h4>
            <p>Профессиональный медиатор международного уровня</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mb-4">
            <img src="images/heroes/konstantin.png" class="image_hero" alt="Person 6">
            <h4><b>Константин Игоревич Иванов</b></h4>
            <p>Эксперт-практик в области коммерческого, договорного и арбитражного права</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mb-4">
            <img src="images/heroes/anton.png" class="image_hero" alt="Person 7">
            <h4><b>Бадиков Антон Александрович</b></h4>
            <p>Директор ТОО «Юридическая компания «Legal aspect»</p>
        </div>
    </div>
</div>

<!-- heroes section end -->


<!-- testimonial section start -->
{{--<div id="heroes" class="customer_section layout_padding">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-12">--}}
{{--                <h1 class="customer_taital">АРБИТРЫ</h1>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<!-- Carousel using Bootstrap -->
{{--    <div id="my_slider" class="carousel slide" data-bs-ride="carousel">--}}
{{--        <div class="carousel-inner">--}}
{{--            <!-- First Slide (Active) -->--}}
{{--            <div class="carousel-item active">--}}
{{--                <div class="customer_section_2">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="box_main">--}}
{{--                                    <div class="customer_main">--}}
{{--                                        <div class="customer_left">--}}
{{--                                            <div class="customer_img">--}}
{{--                                                <img class="image_hero" src="images/heroes/samal.jpg" alt=""/>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="customer_right">--}}
{{--                                            <h3 class="customer_name">Ордабаева Самал Токтасыновна<span class="quick_icon"><img src="images/quick-icon.png"></span></h3>--}}
{{--                                            <p class="enim_text">Председатель НУ МАС «Pactum»</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Second Slide -->--}}
{{--            <div class="carousel-item">--}}
{{--                <div class="customer_section_2">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="box_main">--}}
{{--                                    <div class="customer_main">--}}
{{--                                        <div class="customer_left">--}}
{{--                                            <div class="customer_img">--}}
{{--                                                <img class="image_hero" src="images/heroes/zhanar.png" alt=""/>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="customer_right">--}}
{{--                                            <h3 class="customer_name">Садыкова Жанар Еркинбековна<span class="quick_icon"><img src="images/quick-icon.png"></span></h3>--}}
{{--                                            <p class="enim_text">Постоянно действующий арбитр в НУ МАС «Pactum»</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Third Slide -->--}}
{{--            <div class="carousel-item">--}}
{{--                <div class="customer_section_2">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="box_main">--}}
{{--                                    <div class="customer_main">--}}
{{--                                        <div class="customer_left">--}}
{{--                                            <div class="customer_img">--}}
{{--                                                <img class="image_hero" src="images/heroes/tatyana.jpg" alt=""/>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="customer_right">--}}
{{--                                            <h3 class="customer_name">Бровко Татьяна Владимировна<span class="quick_icon"><img src="images/quick-icon.png"></span></h3>--}}
{{--                                            <p class="enim_text">Главный менеджер в АО «Народный Банк Казахстана»</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="carousel-item">--}}
{{--                <div class="customer_section_2">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="box_main">--}}
{{--                                    <div class="customer_main">--}}
{{--                                        <div class="customer_left">--}}
{{--                                            <div class="customer_img">--}}
{{--                                                <img class="image_hero" src="images/heroes/sergei.jpeg" alt=""/>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="customer_right">--}}
{{--                                            <h3 class="customer_name">Степасюк Сергей Николаевич<span class="quick_icon"><img src="images/quick-icon.png"></span></h3>--}}
{{--                                            <p class="enim_text">Директор ТОО Юридическая фирма BRAUS</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="carousel-item">--}}
{{--                <div class="customer_section_2">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="box_main">--}}
{{--                                    <div class="customer_main">--}}
{{--                                        <div class="customer_left">--}}
{{--                                            <div class="customer_img">--}}
{{--                                                <img class="image_hero" src="images/heroes/serik.png" alt=""/>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="customer_right">--}}
{{--                                            <h3 class="customer_name">Сюндиков Серик Токтарбекович<span class="quick_icon"><img src="images/quick-icon.png"></span></h3>--}}
{{--                                            <p class="enim_text">Профессиональный медиатор международного уровня</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="carousel-item">--}}
{{--                <div class="customer_section_2">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="box_main">--}}
{{--                                    <div class="customer_main">--}}
{{--                                        <div class="customer_left">--}}
{{--                                            <div class="customer_img">--}}
{{--                                                <img class="image_hero" src="images/heroes/konstantin.jpg" alt=""/>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="customer_right">--}}
{{--                                            <h3 class="customer_name">Константин Игоревич Иванов<span class="quick_icon"><img src="images/quick-icon.png"></span></h3>--}}
{{--                                            <p class="enim_text">Эксперт-практик в области коммерческого, договорного и арбитражного права</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--        <!-- Previous button -->--}}
{{--        <a class="carousel-control-prev" href="#my_slider" role="button" data-bs-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Previous</span>--}}
{{--        </a>--}}

{{--        <!-- Next button -->--}}
{{--        <a class="carousel-control-next" href="#my_slider" role="button" data-bs-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Next</span>--}}
{{--        </a>--}}
{{--    </div>--}}


{{--</div>--}}
<!-- testimonial section end -->
<!-- contact section start -->
<div id="contacts" style="background-color: #f8f2e2; padding: 30px" class="contact_section layout_padding">
    <div class="container-fluid d-flex align-items-center">
        <div class="row w-100">
            <div class="col-sm-12 text-center m-4">
                <h1 class="studies_taital">КОНТАКТЫ</h1>
            </div>
            <div class="contact_section_2 row mt-4">
                <div class="col-md-6">
                    <div id="map" style="width: 100%; height: 500px;"></div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center flex-column">
                    <div class="text-center">
                        <h2 class="mt-0">Контакты</h2>
                        <hr class="divider"/>
                        <p class="text-muted mb-5">
                            Республика Казахстан, г. Алматы
                        </p>
                        <p class="text-muted">
                            Международный Арбитражный Суд "Pactum"
                            <br> ул. Сайран 3, офис 64
                            <br> тел: +7701 999 4929
                            <br> тел: +7705 740 3021
                            <br> E-mail: iac.pactum@gmail.com
                        </p>
                        <div class="send_bt">
                            <a href="#contacts" id="openModalBtn2">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2 style="color: #ffffff">Заявка</h2>
            <span class="close">&times;</span>
        </div>

        <!-- Progress Indicator -->
        <div class="progress-header">
            <div class="step" id="step1">1</div>
            <div class="step" id="step2">2</div>
            <div class="step" id="step3">3</div>
            <div class="step" id="step4">4</div>
        </div>

        <div class="modal-body">
            <form id="applicationForm">
                <div class="tab" id="tab1">
                    <label>1. У вас имеется спор между юридическими лицами?</label><br>
                    <select id="question1" class="question" name="businessDispute" data-question="1">
                        <option value="yes">Да</option>
                        <option value="no">Нет</option>
                    </select><br>
                </div>

                <div class="tab" id="tab2" style="display:none;">
                    <label>2. Какая оговорка у вас указана в договоре, в разделе "Порядок решения споров"?</label><br>
                    <select id="question2" class="question" name="arbitrationClause" data-question="2">
                        <option value="yes">НУ МАС Pactum</option>
                        <option value="В соответствии с законодательством РК">В соответствии с законодательством РК</option>
                        <option value="Другой арбитражный суд">Другой арбитражный суд</option>
                        <option value="СМЭС">СМЭС</option>
                    </select><br>
                </div>

                <div class="tab" id="tab3" style="display:none;">
                    <label>3. Ваш спор ранее уже был на рассмотрении в государственном суде?</label><br>
                    <select id="question3" class="question" name="courtReview" data-question="3">
                        <option value="yes">Да</option>
                        <option value="no">Нет</option>
                    </select><br>
                </div>

                <div class="tab" id="tab4" style="display:none;">
                    <div id="contactDetails">
                        <label>4. Заполните пожалуйста следующие данные и мы Вам позвоним для предоставления более подробной консультации:</label><br>
                        <input type="text" name="fullName" placeholder="ФИО"><br>
                        <input type="text" name="phone" placeholder="Контактный телефон"><br>
                        <label>Физическое / юридическое лицо (выбрать ответ)</label><br>
                        <select name="legalStatus">
                            <option value="null" disabled selected>Выберите ответ</option>
                            <option value="физическое лицо">Физическое лицо</option>
                            <option value="юридическое лицо">Юридическое лицо</option>
                        </select><br>
                        <input type="text" name="organizationName" placeholder="Если юр. лицо, то надо написать Наименование организации"><br>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button id="prevButton" style="display:none;">Назад</button>
            <button id="nextButton">Далее</button>
            <button id="sendButton" style="display:none;">Отправить</button>
        </div>
    </div>
</div>

<!-- contact section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="location_text">
                    <ul>
                        <li>
                            <a href="https://wa.me/77057403021"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#77057403021"><i class="fab fa-telegram" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer_logo">
                <a href="index.html">
                    <img src="images/logo.png"/>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">2024 Все права сохранены Pactum</p>
    </div>
</div>
</body>
@vite('resources/js/app.js')
@vite('resources/js/map.js')
@vite('resources/js/modal.js')
</html>
