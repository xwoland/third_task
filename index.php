<!DOCTYPE html>
<html lang="en">
<head>
    <title>Портфолио. Александр</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- linking css file -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="/jquery.url.js"></script>
    <script type="text/javascript">
        (function(_,r,e,t,a,i,l){_['retailCRMObject']=a;_[a]=_[a]||function(){(_[a].q=_[a].q||[]).push(arguments)};_[a].l=1*new Date();l=r.getElementsByTagName(e)[0];i=r.createElement(e);i.async=!0;i.src=t;l.parentNode.insertBefore(i,l)})(window,document,'script','https://collector.retailcrm.pro/w.js','_rc');

        _rc('create', 'RC-39809014870-2');
        _rc('send', 'pageView');
    </script>
    <script type="text/javascript">
    $(function() {
            $('#feedback-form').submit(function() {
                    _rc('send', 'order', {
                            'name': $(this).find('input[name=name]').val(),
                            'email': $(this).find('input[name=email]').val(),
                            'orderMethod': 'feedback',
                            'callback': function(success, response) {
                                    if (success) {
                                            alert('Спасибо, ваша заявка принята! Её номер: ' + response.id);
                                    } else {
                                            alert('К сожалению, не удалось отправить заявку.');
                                    }
                            }
                    });

                    return false;
            })
    })
    </script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark navbarScroll">
        <div class="container">
            <?php
                session_start();
                if ($_SESSION['result'] === 'success') {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Успех!</strong> Ваш контакт был обработан успешно.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                    unset($_SESSION['result']);
                } elseif ($_SESSION['result'] === 'fail') {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Ошибка!</strong> Ваш контакт не был обработан. Пожалуйста, проверьте корректность заполнения полей формы.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                    unset($_SESSION['result']);
                }
            ?>
            <a class="navbar-brand" href="#">Александр</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Домашняя страница</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Обо мне</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Портфолию</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Контакт</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- main banner -->
    <section class="bgimage" id="home">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
                <h2 class="hero_title">Привет, меня зовут Александр.</h2>
                <p class="hero_desc">В моем опыте есть техническая поддержка и разработка.</p>
            </div>
            </div>
        </div>
    </section>

    <!-- about section-->
    <section id="about">
        <div class="container mt-4 pt-4">
            <h1 class="text-center">Обо мне</h1>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <img src="images/about.jpg" class= "imageAboutPage" alt="">
                </div>

                <div class="col-lg-8">
                    <p>В 2020 году начал путь в IT с позиции менеджера технической поддержки. Работа состояла из обработки тикетов в HelpDesk: консультации клиентов, воспроизведение ошибок в наших модулях.
                    </p>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul>
                                <li>Имя: Александр Борисов</li>
                                <li>Возвраст: 27</li>
                                <li>Специальность: Разработчик, Инженер технической поддержки</li>

                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <p>В 2021 я окончил школу разработки внутри компании Simtech Development и перешел на позицию разработчика. Здесь пришлось работать над технически-сложными клиентскими обращениями и фиксом багов. Остальную биографию я рассказывал на интервью и объем текста достаточен.
                    </div>
                </div>
            </div>
    </section>

    <!-- portfolio section-->
    <section id="portfolio">
        <div class="container mt-3">
            <h1 class="text-center">Портфолио</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="images/portfolioImage1.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Блог</h4>
                            <p class="card-text">Базовый набор функционала: CRUD для создания статей.</p>
                            <div class="text-center">
                                <a href="https://github.com/xwoland/simple-personal-blog" target="_blank" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/portfolioImage2.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">API авторизация и регистрация</h4>
                            <p class="card-text">Одно из тестовых заданий. Использовал Laravel Sanctum.</p>
                            <div class="text-center">
                                <a href="https://github.com/xwoland/basic-authorization-and-registration-task" target="_blank" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/portfolioImage3.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Сайт-портфолио</h4>
                            <p class="card-text">Красиво оформленный сайт с несколькими секциями.</p>
                            <div class="text-center">
                                <a href="https://github.com/xwoland/first_task" target="_blank" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section-->
    <section id="contact">
        <div class="container mt-3 contactContent">
            <h1 class="text-center">Контакт</h1>

            <div class="row mt-4 justify-content-center">
                <div class="col-lg-6">
                    <!-- form fields -->
                    <form action="contact_form.php" id="feedback-form" method="POST">
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Имя">
                        <input type="email" name="email" class="form-control mt-3" placeholder="Email">
                        <div class="mb-3 mt-3">
                            <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Комментарий"></textarea>
                        </div>
                        <div class="text-center">
                            <input class="btn btn-success mt-3" type="submit" value="Связаться со мной">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- footer section-->
    <footer id="footer">
        <div class="container-fluid">
            <!-- social media icons -->
            <div class="social-icons mt-4">
                <a href="https://vk.com/shatteredfate" target="_blank"><i class="fab fa-vk"></i></a>
                <a href="https://www.instagram.com/xwoland" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>