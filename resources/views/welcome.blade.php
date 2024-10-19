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
<div id="overlay" style="display:none;">
    <div id="loader"></div>
</div>
<div class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#what-we">Преимущества</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#regulations">Регламент</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#heroes">Арбитры</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#arbitration-award">Заключение</a>
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
                                    <h3 class="banner_taital">Добро пожаловать на сайт Международного Арбитражного Суда "PACTUM"!</h3>
                                    <p class="banner_text">
                                        <b>Наш суд</b> специализируется на разрешении международных споров с использованием независимого и беспристрастного арбитражного процесса. Мы предлагаем профессиональные и справедливые решения, обеспечивая эффективное урегулирование конфликтов в соответствии с международными стандартами и правовыми нормами.
                                        </br></br><b>Наша миссия</b> — содействовать защите ваших прав и интересов, предоставляя платформу для мирного и конструктивного разрешения споров в бизнесе, торговле и других областях.
                                        </br></br><b>Обратитесь к нам, и мы поможем вам найти справедливое решение в условиях конфиденциальности и профессионализма!</b>
                                    </p>
                                    <div class="readmore_btn active"><a href="#about-us">Подробнее</a></div>
                                    <div class="started_bt"><a href="#contacts">Контакты</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img"><img src="images/banner-img-removed.png"></div>
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
<div id="what-we" class="services_section" style="background: #d8c3a5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 style="background: #d8c3a5" class="customer_taital">ПРЕИМУЩЕСТВА</h1>
            </div>
        </div>
    </div>
    <div class="services_section_2" style="margin-top: 0; padding-top: 0; padding-bottom: 0; background: #d8c3a5">
        <div class="container-fluid">
            <div class="services_row flex-container">
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icons/19.png" class="image_1" alt=""/>
                        <img src="images/icons/19.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Международное признание</h3>
                </div>
{{--                <div class="service_box flex-item">--}}
{{--                    <div class="house_icon">--}}
{{--                        <img src="images/icons/14.png" class="image_1" alt=""/>--}}
{{--                        <img src="images/icons/14.png" class="image_2" alt=""/>--}}
{{--                    </div>--}}
{{--                    <h3 class="corporate_text">Порядок исполнения решений арбитража</h3>--}}
{{--                </div>--}}
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icons/16.png" class="image_1" alt=""/>
                        <img src="images/icons/16.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Упрощенная процедура разбирательства спора</h3>
                </div>
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icons/12.png" class="image_1" alt=""/>
                        <img src="images/icons/12.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Возможность мирного урегулирования спора</h3>
                </div>
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icons/13.png" class="image_1" alt=""/>
                        <img src="images/icons/13.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Профессионализм и компетентность</h3>
                </div>
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icons/18.png" class="image_1" alt=""/>
                        <img src="images/icons/18.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Сокращенные и сжатые сроки рассмотрения споров</h3>
                </div>
{{--            </div>--}}
{{--            <div class="services_row flex-container">--}}
{{--                <div class="service_box flex-item">--}}
{{--                    <div class="house_icon">--}}
{{--                        <img src="images/icons/17.png" class="image_1" alt=""/>--}}
{{--                        <img src="images/icons/17.png" class="image_2" alt=""/>--}}
{{--                    </div>--}}
{{--                    <h3 class="corporate_text">Экономичность</h3>--}}
{{--                </div>--}}
{{--                <div class="service_box flex-item">--}}
{{--                    <div class="house_icon">--}}
{{--                        <img src="images/icons/11.png" class="image_1" alt=""/>--}}
{{--                        <img src="images/icons/11.png" class="image_2" alt=""/>--}}
{{--                    </div>--}}
{{--                    <h3 class="corporate_text">Гибкость и комфорт</h3>--}}
{{--                </div>--}}
                <div class="service_box flex-item">
                    <div class="house_icon">
                        <img src="images/icons/15.png" class="image_1" alt=""/>
                        <img src="images/icons/15.png" class="image_2" alt=""/>
                    </div>
                    <h3 class="corporate_text">Конфиденциальность арбитражного разбирательства</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services section end -->
<!-- regulations section start -->
<div id="regulations" class="studies_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="studies_taital">РЕГЛАМЕНТ
                    <br> <h3 class="introduction_text">НУ Международный арбитражный суд "Pactum"</h3>
                </h1>
            </div>
        </div>
        <div class="studies_section_2">
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <iframe src="{{ asset('files/regulations_pactum.pdf') }}" width="50%" height="600">
                            This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('files/regulations_pactum.pdf') }}">Download PDF</a>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- regulations section end -->
<!-- about section start -->
<div id="about-us" class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_img"><img src="images/about-img.png"></div>
            </div>
            <div class="col-md-6">
                <h1 class="about_taital">О нас</h1>
{{--                <p class="banner_text">Международный Арбитражный Суд "Pactum", cоздан и функционирует в соответствии с действующим законодательством Республики Казахстан и является независимым, самостоятельным постоянно действующим органом по разрешению споров, возникающих между субъектами гражданских правоотношений.--}}
{{--                    На сегодняшний день арбитраж представляет собой наиболее быстрый и эффективный механизм разрешения споров и разногласий, возникающих в результате договорных и иных гражданско-правовых отношений. Большинство коммерческих и экономических споров рассматривается именно арбитражными судами. Некоммерческое учреждение «Международный Арбитражный суд «Pactum» предлагает экономически целесообразные, независимые и оперативные услуги по разрешению корпоративных споров, выступая удобной альтернативой судебным разбирательствам в государственных судебных органах Казахстана.--}}
{{--                </p>--}}
                <p class="banner_text">
                    <b>Международный Арбитражный Суд "PACTUM"</b> – это независимая и авторитетная организация, созданная для разрешения международных споров с помощью арбитражных процедур.
                    Мы объединяем профессиональных арбитров с многолетним опытом работы в различных отраслях права и международного бизнеса.
                    Наш суд действует на основе международных стандартов и функционирует в соответствии с действующим законодательством Республики Казахстан, обеспечивая беспристрастность, справедливость и прозрачность в каждом деле.
                    </br></br><b>Основные принципы работы "PACTUM"</b>  — это эффективность, конфиденциальность и профессионализм. Мы предоставляем надежную платформу для мирного разрешения споров, минимизируя риски и затраты, связанные с традиционными судебными процессами. В наших процедурах гарантируется быстрое и объективное рассмотрение дел, что позволяет нашим клиентам эффективно защищать свои права и интересы.
                    </br></br><b>Мы гордимся нашей репутацией и доверием, которое нам оказывают международные компании, организации и частные лица, выбирая "PACTUM" для решения своих споров.</b>
                </p>
                <div class="about_text_main row">
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

<div id="heroes" class="about_section layout_padding" style="background: #d8c3a5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 style="background: #d8c3a5" class="studies_taital">АРБИТРЫ</h1>
                <div class="row">
{{--                    <p class="about_text">--}}
{{--                        Арбитры НУ «Международный Арбитражный суд «Pactum» — это профессиональные юристы с обширным опытом рассмотрения судебных споров как в арбитражах, так и в судах.--}}
{{--                        Мы являемся коллективом высококвалифицированных арбитров и медиаторов, обладающих значительным опытом в юридической сфере и компетентных в разрешении судебных споров. Мы открыты для проведения переговоров с целью обсуждения перспектив нашего взаимовыгодного сотрудничества.--}}
{{--                    </p>--}}
                    <p class="about_text">
                        <b>Арбитры Международного Арбитражного Суда "PACTUM"</b> — это ключевые фигуры, обеспечивающие объективное и справедливое разрешение споров. Наши арбитры обладают высокой квалификацией в области международного права, финансов, торговли и других отраслей, что позволяет им компетентно решать самые сложные споры.
                        </br></br>Каждый из них проходит тщательный отбор на основе опыта, профессиональной репутации и соответствия международным стандартам. Независимость и беспристрастность наших арбитров гарантируют, что все решения принимаются исключительно на основе фактов и норм права, без какого-либо влияния внешних факторов.
                        </br></br><b>Арбитры "PACTUM" предоставляют клиентам уверенность в том, что их дела будут рассмотрены справедливо, прозрачно и в соответствии с высшими международными стандартами. Мы гордимся нашим коллективом, который сочетает экспертное знание с глубокой преданностью принципам арбитражного судопроизводства.</b>
                    </p>
                </div>
                <div class="row">
                    <div class="services_section_2" style="margin-top: 0; padding-top: 0; padding-bottom: 0; background: #d8c3a5">
                        <div class="container-fluid">
                            <!-- Flex Container for Row 1 -->
                            <div class="services_row flex-container">
                                <div class="service_box flex-item">
                                    <div class="house_icon">
                                        <img src="images/heroes/samal.png" class="image_hero" alt="Ордабаева Самал Токтасыновна">
                                    </div>
                                    <h3 class="about_text">
                                        <b>Ордабаева Самал Токтасыновна</b>
                                        <p class="banner_text">Председатель НУ МАС "Pactum"</p>
                                    </h3>
                                </div>
                                <div class="service_box flex-item">
                                    <div class="house_icon">
                                        <img src="images/heroes/zhanar.png" class="image_hero" alt="Садыкова Жанар Еркинбековна">
                                    </div>
                                    <h3 class="about_text">
                                        <b>Садыкова Жанар Еркинбековна</b>
                                        <p class="banner_text">Постоянно действующий арбитр в Некоммерческом учреждении «Международный Арбитражный Суд «Pactum»</p>
                                    </h3>
                                </div>
                                <div class="service_box flex-item">
                                    <div class="house_icon">
                                        <img src="images/heroes/konstantin.png" class="image_hero" alt="Константин Игоревич Иванов">
                                    </div>
                                    <h3 class="about_text">
                                        <b>Константин Игоревич Иванов</b>
                                        <p class="banner_text">Эксперт-практик в области коммерческого, договорного и арбитражного права</p>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- heroes section end -->

<!-- about section start -->
<div id="arbitration-award" class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="award_title">ЗАКЛЮЧЕНИЕ</h1>
                <div class="row">
                    <p class="about_text">
                        Арбитражное соглашение может быть заключено несколькими способами:
                        </br></br><b>- Арбитражная оговорка в документе</b>, подписанном сторонами (чаще всего включается непосредственно в текст основного договора);
                        </br><b>- Отдельное арбитражное соглашение</b>, независимое от основного договора;
                        </br><b>- Арбитражное соглашение, заключенное через обмен корреспонденцией</b>: письмами, телеграммами, телефонограммами, факсами, электронными или другими документами, подтверждающими состав участников и их волеизъявление;
                        </br><b>- Арбитражное соглашение, оформленное через обмен исками и отзывами на иск</b>, где одна из сторон заявляет о наличии соглашения, а другая не возражает против этого;
                        </br><b>- Ссылка в договоре на документ</b>, содержащий указание на передачу спора в арбитраж. При этом договор должен быть заключен в письменной форме, а ссылка — достаточной для включения арбитражного соглашения в состав договора (в соответствии со статьей 9 Закона об арбитраже).
                        </br></br><b>Каждый из этих способов обеспечивает юридическую силу арбитражного соглашения, предоставляя сторонам надежный инструмент для разрешения споров в рамках арбитража.</b>
{{--                        <ul class="about_text">--}}
{{--                            <li>--}}
{{--                                - арбитражной оговорки в документе, подписанном сторонами (как правило, арбитражная оговорка включается в текст основного договора);--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                - самостоятельного арбитражного соглашения, независимого от основного договора;--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                - арбитражного соглашения, заключаемого путем обмена письмами, телеграммами, телефонограммами, факсами, электронными документами или иными документами, определяющими состав субъектов и содержание их волеизъявления;--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                - арбитражного соглашения, заключаемого путем обмена исками и отзывом на иск, в которых одна из сторон утверждает о наличии соглашения, а другая против этого не возражает;--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                - отсылки в договоре на документ, из содержания которого следует о передаче спора на разрешение арбитража при условии, что договор заключен в письменной форме, и данная ссылка такова, что делает арбитражное соглашение частью договора (статья 9 Закона об арбитраже).--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about section end -->

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
                <div class="col-md-6 col-sm-12 mb-3">
                    <div id="map" class="map-container"></div>
                </div>
                <div class="col-md-6 col-sm-12 d-flex flex-column">
                    <div class="text-center">
                        <hr class="divider"/>
                        <p class="text-muted">
                            <b>
                                Республика Казахстан, г. Алматы
                                <br> Международный Арбитражный Суд "Pactum"
                                <br> ул. Сайран 3, офис 64
                                <br> тел: +7701 999 4929
                                <br> тел: +7705 740 3021
                                <br> E-mail: iac.pactum@gmail.com
                            </b>
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
            <h2 style="color: #3c1904">Заявка</h2>
            <span class="close">&times;</span>
        </div>

        <!-- Progress Indicator -->
        <div class="progress-header">
            <div class="step" id="step1">1</div>
            <div class="step" id="step2">2</div>
            <div class="step" id="step3">3</div>
            <div class="step" id="step4">4</div>
{{--            <div class="step" id="step5">5</div>--}}
        </div>

        <div class="modal-body">
            <form id="applicationForm">
                <div class="tab" id="tab1" style="display: none">
                    <label>1. У вас имеется спор между юридическими лицами?</label><br>
                    <select id="question1" class="question" name="question1" data-question="1">
                        <option value="null" disabled selected>Выберите ответ</option>
                        <option value="Да">Да</option>
                        <option value="Нет">Нет</option>
                    </select><br>
                </div>

                <div class="tab" id="tab2" style="display:none;">
                    <label>2. Какая оговорка у вас указана в договоре, в разделе "Порядок решения споров"?</label><br>
                    <select id="question2" class="question" name="question2" data-question="2">
                        <option value="null" disabled selected>Выберите ответ</option>
                        <option value="НУ МАС Pactum">НУ МАС Pactum</option>
                        <option value="В соответствии с законодательством РК">В соответствии с законодательством РК</option>
                        <option value="Нет">Другой арбитражный суд</option>
                        <option value="Нет">СМЭС</option>
                    </select><br>
                </div>

                <div class="tab" id="tab3" style="display:none;">
                    <label>3. Ваш спор ранее уже был на рассмотрении в государственном суде?</label><br>
                    <select id="question3" class="question" name="question3" data-question="3">
                        <option value="null" disabled selected>Выберите ответ</option>
                        <option value="Да">Да</option>
                        <option value="Нет">Нет</option>
                    </select><br>
                </div>

                <div class="tab" id="tab4" style="display:none;">
                    <div id="contactDetails">
                        <label>4. Заполните пожалуйста следующие данные и мы Вам позвоним для предоставления более подробной консультации:</label><br>
                        <input type="text" name="fullName" required placeholder="ФИО"><br>
                        <input type="text" type="number" required name="phone" placeholder="Контактный телефон"><br>

                        <label>Физическое / юридическое лицо (выбрать ответ)</label><br>
                        <select name="legalStatus" id="legalStatus" required onchange="toggleOrganizationInput()">
                            <option value="null" disabled selected>Выберите ответ</option>
                            <option value="физическое лицо">Физическое лицо</option>
                            <option value="юридическое лицо">Юридическое лицо</option>
                        </select><br>

                        <div id="organizationInput" style="display: none;">
                            <input type="text" name="organizationName" placeholder="Наименование организации">
                        </div>
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
                            <a href="https://www.instagram.com/pactum_iac/profilecard/?igsh=MTUxN3ZkaWdnYnM3Zw=="><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#77057403021"><i class="fab fa-telegram" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer_logo">
                <a href="#">
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
<script>
    function toggleOrganizationInput() {
        const legalStatus = document.getElementById('legalStatus').value;
        const organizationInput = document.getElementById('organizationInput');

        if (legalStatus === 'юридическое лицо') {
            organizationInput.style.display = 'block';
        } else {
            organizationInput.style.display = 'none';
        }
    }
</script>
@vite('resources/js/app.js')
@vite('resources/js/map.js')
@vite('resources/js/modal.js')
</html>
