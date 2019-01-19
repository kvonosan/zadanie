<?php 
    use yii\helpers\Html;
    use yii\helpers\Url;
    
    $this->beginPage();
?>
<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!--отредактировать head после продакшна-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico?v=1" type="images/x-icon">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="tomnolane.ru">
    <meta property="og:title" content="CatPost SMM">
    <meta property="og:description" content="программа для автоматической рассылки публикаций (в т.ч. для SMM и SEO) в 5 самых популярных социальных сетей: Вконтакте, Одноклассники, Твиттер, Инстаграм, Фейсбук.">
    <meta property="og:url" content="https://tomnolane.ru">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:images" content="https://tomnolane.ru/img/main_pic.JPG">
    <meta property="og:images:width" content="1319">
    <meta property="og:images:height" content="645">

    <meta name="description" content="CatPost 2 - программа для автоматической рассылки публикаций (в т.ч. для SMM и SEO) в 5 самых популярных социальных сетей: Вконтакте, Одноклассники, Твиттер, Инстаграм, Фейсбук."
    />
    <meta name="keywords" content="CatPost, Facebook, Вконтакте, Одноклассники, Твиттер, Инстаграм, Постинг, Рассылка, Бесплатно, SMM"
    />
    <meta name="author" content="Tom Nolane" />
    <title>Catpost 2 официальный сайт</title>

    <!-- core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/owl.transitions.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/portfolio.css" rel="stylesheet">
    <link href="/css/wiki.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

</head>
<!--/head-->
<?php $this->beginBody() ?>
<body id="home" class="homepage">
    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top top-nav-collapse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="/images/logo.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Главная </a></li>
                        <li class="scroll"><a href="#register">Регистрация </a></li>
                        <li class="scroll"><a href="#login">Войти </a></li>
                        <li class="scroll"><a href="#portfolio">О программе </a></li>
                        <li class="scroll"><a href="#wiki">Вики </a></li>
                        <li class="scroll"><a href="#meet-team">Команда </a></li>
                        <!--li class="scroll"><a href="#pricing">Цена</a></li-->
                        <!--li class="scroll"><a href="#testimonial"> Testimonial </a></li-->
                        <li class="scroll"><a href="#get-in-touch">Контакты </a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(/images/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">
                                    <h2>CatPost - программа для массовой публикации в социальные сети.</h2>
                                    <p>Первые 2 недели бесплатно!</p>
                                    <a class="btn btn-primary btn-lg" href="#register">Регистрация</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
            <div class="item" style="background-image: url(/images/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">
                                    <h2>Вконтакте, Одноклассники, Фейсбук, Твиттер, Инстаграм</h2>
                                    <p>Все в одной программе. Без посредников.</p>
                                    <a class="btn btn-primary btn-lg" href="#register">Регистрация</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
        </div>
        <!--/.owl-carousel-->
    </section>
    <!--/#main-slider-->


    <section id="register">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Регистрация</h2>
                <p class="text-center wow fadeInDown">После регистрации программа будет доступна для скачивания в личном кабинете.</p>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-offset-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                    <?php
			use yii\widgets\ActiveForm;
			use app\models\RegisterForm;
			use app\models\LoginForm;
			use app\models\EmailForm;

			$register_model = new RegisterForm();
			$model = new LoginForm();
			$email_model = new EmailForm();
		    ?>
		    <h3>Регистрация пользователя</h3>
		    <?php $form = ActiveForm::begin(['action' => '/auth/register']); ?>
		        <?= $form->field($register_model, 'email') ?>
		        <?= $form->field($register_model, 'password')->passwordInput() ?>
		        <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary']) ?>
		    <?php ActiveForm::end(); ?>
                    </div>
                    <!--/.col-md-4-->
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#register-->


    <section id="login">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Войти</h2>
                <p class="text-center wow fadeInDown">Здесь вы можете войти в личный кабинет.</p>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-offset-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <h3>Войти как пользователь</h3>
		        <?php $form = ActiveForm::begin(['action' => '/auth/login']); ?>
		            <?= $form->field($model, 'email')->textInput() ?>
		            <?= $form->field($model, 'password')->passwordInput() ?>
		            <?= $form->field($model, 'rememberMe')->checkbox() ?>
		            <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
		            <a href="<?= Url::to('/auth/resend') ?>">Не пришло письмо?</a>
		            <a href="<?= Url::to('/auth/reset') ?>">Забыли пароль?</a>
		        <?php ActiveForm::end(); ?>
                    </div>
                    <!--/.col-md-4-->
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#login-->


    <!-- start portfolio -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">О CATPOST 2</h2>
                    <p class="text-center wow fadeInDown">В данном разделе вы можете ознакомится с основными возможностями программы CatPost 2(картинки кликабельны)</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                    <a href="#portfolioModal1" data-toggle="modal">
                        <div class="portfolio-thumb">
                            <img src="/images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
                            <div class="portfolio-overlay">
                                <h4>CatPost VK</h4>
                                <h3>для публикации Вконтакте.</h3>
                                <div class="btn btn-default">Подробнее</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                    <a href="#portfolioModal2" data-toggle="modal">
                        <div class="portfolio-thumb">
                            <img src="/images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
                            <div class="portfolio-overlay">
                                <h4>CatPost OK</h4>
                                <h3>для публикации в Одноклассниках.</h3>
                                <div class="btn btn-default">Подробнее</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                    <a href="#portfolioModal3" data-toggle="modal">
                        <div class="portfolio-thumb">
                            <img src="/images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
                            <div class="portfolio-overlay">
                                <h4>CatPost FB</h4>
                                <h3>для публикации в Фейсбуке.</h3>
                                <div class="btn btn-default">Подробнее</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                    <a href="#portfolioModal4" data-toggle="modal">
                        <div class="portfolio-thumb">
                            <img src="/images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
                            <div class="portfolio-overlay">
                                <h4>CatPost Inst</h4>
                                <h3>для публикации в Инстаграме.</h3>
                                <div class="btn btn-default">Подробнее</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                    <a href="#portfolioModal5" data-toggle="modal">
                        <div class="portfolio-thumb">
                            <img src="/images/portfolio-img5.jpg" class="img-responsive" alt="portfolio img 3">
                            <div class="portfolio-overlay">
                                <h4>CatPost TW</h4>
                                <h3>для публикации в Твиттере.</h3>
                                <div class="btn btn-default">Подробнее</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end portfolio -->


    <!-- start wiki -->
    <section id="wiki">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Wiki описание</h2>
                    <p class="text-center wow fadeInDown">В данном разделе вы можете ознакомится с основными возможностями программы CatPost 2 подробнее(картинки
                        кликабельны)
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                    <a href="#portfolioModal7" data-toggle="modal">
                        <div class="wiki-thumb">
                            <img src="/images/portfolio-img1.jpg" class="img-responsive" alt="wiki img 1">
                            <div class="wiki-overlay">
                                <h4>Wiki CatPost VK</h4>
                                <h3>для публикации Вконтакте.</h3>
                                <div class="btn btn-default">Подробнее</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                    <a href="#portfolioModal8" data-toggle="modal">
                        <div class="wiki-thumb">
                            <img src="/images/portfolio-img2.jpg" class="img-responsive" alt="wiki img 2">
                            <div class="wiki-overlay">
                                <h4>Wiki CatPost OK</h4>
                                <h3>для публикации в Одноклассниках.</h3>
                                <div class="btn btn-default">Подробнее</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                    <a href="#portfolioModal9" data-toggle="modal">
                        <div class="wiki-thumb">
                            <img src="/images/portfolio-img3.jpg" class="img-responsive" alt="wiki img 3">
                            <div class="wiki-overlay">
                                <h4>Wiki CatPost FB</h4>
                                <h3>для публикации в Фейсбуке.</h3>
                                <div class="btn btn-default">Подробнее</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                    <a href="#portfolioModal10" data-toggle="modal">
                        <div class="wiki-thumb">
                            <img src="/images/portfolio-img4.jpg" class="img-responsive" alt="wiki img 4">
                            <div class="wiki-overlay">
                                <h4>Wiki CatPost Inst</h4>
                                <h3>для публикации в Инстаграме.</h3>
                                <div class="btn btn-default">Подробнее</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                    <a href="#portfolioModal11" data-toggle="modal">
                        <div class="wiki-thumb">
                            <img src="/images/portfolio-img5.jpg" class="img-responsive" alt="wiki img 3">
                            <div class="wiki-overlay">
                                <h4>Wiki CatPost TW</h4>
                                <h3>для публикации в Твиттере.</h3>
                                <div class="btn btn-default">Подробнее</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end wiki -->


    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Команда проекта</h2>
                <p class="text-center wow fadeInDown">Здесь собраны фото и ссылки на разработчиков проекта CatPost 2</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img src="/images/team_1.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Tom Nolane</h3>
                            <span><a href="https://vk.com/tomnolane">https://vk.com/tomnolane</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img src="/images/team_2.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Насонов Виктор(kvonosan)</h3>
                            <span><a href="https://vk.com/kvonosan">https://vk.com/kvonosan</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#meet-team-->


    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Контакты</h2>
                <p class="text-center wow fadeInDown">Здесь вы можете задать любой вопрос,
                 оставить отзыв, написать предложения по улучшению, по рекламе, приветствуются любые ваши предложения.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
		    <?php $form = ActiveForm::begin(['action' => '/auth/email']); ?>
		        <?= $form->field($email_model, 'email', ['template' => 'Электронный адрес: {input}{error}']) ?>
		        <?= $form->field($email_model, 'subject', ['template' => 'Тема: {input}{error}']) ?>
		        <?= $form->field($email_model, 'mess', ['template' => 'Сообщение: {input}{error}'])->textArea(['rows' => '6']) ?>
		        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
		    <?php ActiveForm::end(); ?>

                    <!--form action="/auth/" method="post" name="contact-form" id="main-contact-form">
                        <div class="form-group">
                            <input type="text" required placeholder="Name" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <input type="email" required placeholder="Email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" required placeholder="Subject" class="form-control" name="subject">
                        </div>
                        <div class="form-group">
                            <textarea required placeholder="Message" rows="8" class="form-control" name="message"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">SUBMIT</button>
                    </form-->
                </div>
                <div class="col-sm-6">
        	    <img src="/images/catpost.png">
                </div>
            </div>


        </div>
    </section>
    <!--/#get-in-touch-->


    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body special2">
                                <!-- Project Details Go Here -->
                                <h2>CatPost VK</h2>
                                <img class="img-responsive img-centered" src="/images/vk_3.JPG" alt="CatPost VK">
                                <p>CatPost VK - программа для полуавтоматической и массовой рассылки публикаций, а также продвижения
                                    страниц/групп в социальной сети "Вконтакте". С помощью неё можно рассылать до 25 групп/страниц
                                    25 различных публикаций одной кнопкой с различными интервалами по времени. К каждой публикации
                                    можно прикрепить до 6 фотографий (формата JPG, PNG), либо 1 картинку формата GIF. Также
                                    доступны методы рассылки комментариев, заявок в друзья, а также реализована возможность
                                    удалять свои/чужие публикации по фильтру.
                                    <br>(при наличии прав)</p>
                                <img class="img-responsive img-centered" src="/images/vk_4.JPG" alt="CatPost VK">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body special2">
                                <h2>CatPost OK</h2>
                                <img class="img-responsive img-centered" src="/images/ok_5.JPG" alt="CatPost OK">
                                <p>CatPost OK - программа для полуавтоматической и массовой рассылки публикаций, а также продвижения
                                    страницы/группы в социальной сети "Одноклассники". С помощью неё можно рассылать до 25
                                    групп/страниц 25 различных публикаций одной кнопкой с различными интервалами по времени.
                                    К каждой публикации можно прикрепить до 20 фотографий (формата JPG, PNG, GIF).</p>
                                <img class="img-responsive img-centered" src="/images/ok_6.JPG" alt="CatPost OK">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body special2">
                                <!-- Project Details Go Here -->
                                <h2>CatPost FB</h2>
                                <img class="img-responsive img-centered" src="/images/fb_3.JPG" alt="CatPost FB">
                                <p>CatPost FB - программа для полуавтоматической и массовой рассылки публикаций, а также продвижения
                                    страницы/группы в социальной сети "Фейсбук". С помощью неё можно рассылать до 25 групп/страниц
                                    25 различных публикаций одной кнопкой с различными интервалами по времени. К каждой публикации
                                    можно прикрепить до 20 фотографий (формата JPG, PNG, GIF).</p>
                                <img class="img-responsive img-centered" src="/images/fb_4.JPG" alt="CatPost FB">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body special2">
                                <!-- Project Details Go Here -->
                                <h2>CatPost Inst</h2> <img class="img-responsive img-centered" src="/images/inst_2.JPG" alt="CatPost Inst">
                                <p>CatPost Inst - программа для полуавтоматической рассылки публикаций, а также продвижения
                                    вашего профиля в социальной сети "Инстаграм". С помощью неё можно рассылать до 30 различных
                                    публикаций в свой профиль (включая рассылки по таймеру), а также массово подписываться
                                    на пользователей, рассылать комментарии и массово лайкать публикации. А также получать
                                    информацию по хеш-тегам.</p>
                                <img class="img-responsive img-centered" src="/images/inst_3.JPG" alt="CatPost Inst">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body special2">
                                <!-- Project Details Go Here -->
                                <h2>CatPost TW</h2> <img class="img-responsive img-centered" src="/images/tw_2.JPG" alt="CatPost TW">
                                <p>CatPost TW - программа для полуавтоматической рассылки публикаций, а также продвижения вашей
                                    страницы в социальной сети "Твиттер". С помощью неё можно рассылать до 30 различных публикаций
                                    в свой профиль (включая рассылки по таймеру), а также массово подписываться на пользователей,
                                    рассылать комментарии и массово лайкать публикации.</p>
                                <img class="img-responsive img-centered" src="/images/tw_3.JPG" alt="CatPost TW">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 7 -->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body special2">
                                <!-- Project Details Go Here -->
                                <h2>Wiki CatPost VK</h2>
                                <h2 style="color: crimson;">Основное положение</h2>
                                <p class="item-intro text-muted">CatPost VK - программа для создания публикаций в социальной сети <a href="https://vk.com/"
                                        target="_blank">"Вконтакте"</a>.
                                    <br>
                                    <br> С помощью неё можно создавать публикации как отложенные по дате и времени, по таймеру
                                    и создавать публикации моментально.
                                    <br>
                                    <br> CatPost VK была разработана через <a href="https://ru.wikipedia.org/wiki/API/" target="_blank">официальное API</a>                                    социальной сети <a href="https://vk.com/dev/first_guide/" target="_blank">"Вконтакте"</a>                                    и имеет ряд преимуществ, по сравнению с другими аналогичными сервисами:
                                    <br>
                                    <br> 1) Полная безопасность ваших данных при работе в CatPost VK. Это означает, что вы
                                    напрямую подключаетесь к социальной сети Вконтакте. Вы официально регистрируете приложения
                                    на себя и на свой аккаунт (см. раздел Регистрация) без посредников.
                                    <br>
                                    <br> 2) CatPost еженедельно обновляется и дополняется новыми методами. Это означает,
                                    что вы можете сообщить о проблеме (на панели меню: "О программе" - "Сообщить об ошибке"
                                    ), и она будет решена. А также написать пожелания о том, что вам не хватает при работе
                                    в CatPost.
                                    <br>
                                    <br> 3) Вы также можете одновременно рассылать несколько сот публикаций в 5 самых популярных
                                    социальных сетей одновременно и всего лишь с помощью одной кнопки!!!
                                    <br>
                                    <br> Единственное ограничение, которое нужно соблюдать: это правила социальной сети :
                                    <a href="https://vk.com/terms/" target="_blank">"Вконтакте"</a> и ограничения API Вконтакте
                                    (см. раздел "Ограничения"). </p>
                                <h2 style="color: crimson;">Регистрация приложения CatPost VK</h2>
                                <p class="item-intro text-muted">Для возможности использования CatPost VK вам нужно иметь действующий аккаунт в социальной
                                    сети <a href="https://vk.com/" target="_blank">"Вконтакте"</a> , а также понимать, что
                                    нарушение указанных <a href="https://vk.com/terms/" target="_blank">правил</a> ваш аккаунт
                                    может быть заблокирован администраницей "Вконтакте". Чтобы этого не произошло, строго
                                    НЕ рекомендуется:
                                    <br>
                                    <br> 1) распространять материалы запрещённые действующим законадательством вашей страны.
                                    <br>
                                    <br> 2) распространять материалы или совершать действия запрещённые и указанные в правилах
                                    администранции социальной сети <a href="https://vk.com/terms/" target="_blank">"Вконтакте"</a>                                    .
                                    <br>
                                    <br> 3) для массовой рассылки рекомендуется создать дополнительный аккаунт в социальной
                                    сети "Вконтакте", через который рекомендуется использовать программу CatPost VK (данный
                                    пункт не является обязательным).
                                    <br>
                                    <br> 4) также существует ряд ограничений для <a href="https://vk.com/dev/first_guide/"
                                        target="_blank">"API Вконтакте" </a>, которые никак не афишируются в целях безопасности
                                    "Вконтакте", но некоторы базовые ограничения можно прочитать в разделе "ограничения"
                                    для ознакомления.
                                    <br>
                                    <br> Ознакомившись с выше указанными положениями, а также имея свой аккаунт в социальной
                                    сети <a href="https://vk.com/" target="_blank">"Вконтакте"</a> можно приступить к регистрации
                                    приложения, через которое будет осуществляться вся работа программы CatPost VK.
                                    <br> Регистрация делается однажды, и не потребует (при успешном прохождении и получении
                                    данных) повторения процедуры.
                                    <br>
                                    <br> Первым делом, откройте в вашем браузере страницу: <a href="https://vk.com/apps?act=manage"
                                        target="_blank">(1)</a></p>
                                <img src="/smm_vk/smm_vk1.JPG" alt="CatPost VK" width="100%">
                                <p class="item-intro text-muted">Далее нажмите на кнопку "создать приложение" (2).</p>
                                <img src="/smm_vk/smm_vk2.JPG" alt="CatPost VK" width="100%">
                                <p class="item-intro text-muted">Введите название вашего приложения (любое) и нажмите на кнопку "подключить приложение" (3).
                                    Появится окошко, где нужно будет потвердить действие (стандартная процедура проверки
                                    социальной сети "Вконтакте"). Нажмите на "получить код" (4).</p>
                                <img src="/smm_vk/smm_vk3.JPG" alt="CatPost VK" width="100%" />
                                <p class="item-intro text-muted">На указанный вами номер телефона (при регистрации в социальной сети "Вконтакте") придёт СМС-сообщение,
                                    с кодом для создания нового приложения. Вам нужно в течении 2-ух минут ввести его в поле
                                    "код подтверждения" (5), после чего нажать на кнопку "отправить код" (6).</p>
                                <img src="/smm_vk/smm_vk4.JPG" alt="CatPost VK" width="100%">
                                <p class="item-intro text-muted">После успешного ввода вы успешно создадите своё собственное приложения для работы в социальной
                                    сети "Вконтакте". Теперь останеться его включить и запомнить ID приложения (уникальный
                                    номер вашего приложения). Для этого перейдите на вкладку "настройки" (7) и справа в разделе
                                    "состояние" - выберите из выпадающего списка значение "приложение включено и видно всем"
                                    (8).
                                    <br> Запишите куда-нибудь временно номер вашего приложеня ID (9) - он понадобиться в
                                    программе CatPost VK.</p>
                                <img src="/smm_vk/smm_vk5.JPG" alt="CatPost VK" width="100%">
                                <p class="item-intro text-muted">Теперь осталось сохранить изменения (10) и можно уже пользоваться программой.</p>
                                <img src="/smm_vk/smm_vk6.JPG" alt="CatPost VK" width="100%">

                                <h2 style="color: crimson;">Ограничения</h2>

                                <p class="item-intro text-muted">У "API Вконтакте" и у самой социальной сети существуют различные ограничения (их много) и
                                    ниже вы можете ознакомиться с самыми основными (которые касаются программы CatPost VK):
                                    <br>
                                    <br> 1) Можно делать не более 50 публикаций за промежуток времени от 00:00 до 23:59 (по
                                    местному времени) на вашу одну публичную страницу, из которых максимально 25 записей
                                    можно сделать "отложенными" (на выбранную вами дату).
                                    <br>
                                    <br> 2) Максимальное кол-во отложенных записей на вашей одной публичной странице может
                                    быть не более 200.
                                    <br>
                                    <br> 3) Не все группы/страницы (где вы не являетесь администратором/модератором) можно
                                    отправлять публикации.
                                    <br>
                                    <br> 4) Через "API Вконтакте" к публикации можно прикрепить не более 6 картинок (форматом
                                    JPG, PNG) в сумме не превышающие 50 Мб. Либо 1 картинку форматов .GIF (более 1 нельзя,
                                    ""API Вконтакте"" не примет). Загрузка аудио и видео файлов в скором времени появится.
                                    <br>
                                    <br> 5) Для отображения картинки внешнего сайта (как показано ниже) можно прикрепить
                                    не более одной ссылки на указанный сайт. (как это сделать смотрите раздел "Как пользоваться
                                    CatPost VK".</p>

                                <img src="/smm_vk/smm_vk7.JPG" alt="CatPost VK" width="100%">>

                                <p class="item-intro text-muted">6) Общее кол-во создания публикаций за сутки не известно (ограничение может быть для каждого
                                    пользователя своим уникальным и администрация социальной сети "Вконтакте" такие данные
                                    не даёт.). Но при корректном использовании рекомендуется делать не более 400 публикаций
                                    в сутки.
                                    <br>
                                    <br> 7) Любые запросы CatPost VK отправляет с интервалом от 0.4 до 3 секунд, так как
                                    "API Вконтакте" запрещает делать более 3 запросов в секунду.
                                    <br>
                                    <br> 8) Макс. заявок в друзья в сутки – 50 заявок.
                                    <br>
                                    <br> 9) Отложенные публикации можно делать только на публичных страницах и группах. Отложенная
                                    запись (по минутам) всегда будет кратна 5. Т.е. если указать, что отложенная запись опубликуется
                                    в 16:31, она по факту опубликуется в 16:35.
                                    <br>
                                    <br> 10) Максимальное количество отправления заявок в друзья (за сутки) - 20.
                                    <br>
                                    <br> Также существуют и другие ограничения которые официально не опубликованны, но их
                                    всех знать не обязательно. Часть ограничений находиться в самой программе CatPost VK.
                                    Если, появится какая-то ошибка - в программе справа есть специальный журнал действий,
                                    где будет красным цветом отображено сообщение об ошибки и её номер (по классификации
                                    "API Вконтакте"). Не рекомендуется приближаться к верхним лимитам ограничений.</p>
                                <h2 style="color: crimson;">Как пользоваться CatPost VK</h2>

                                <p class="item-intro text-muted">1) Вы к этому моменту должны иметь ID номер приложения (который состоит из несольких чисел,
                                    например "5995798"), который выдаётся при регистрации (смотрите главу "Регистрация приложения").
                                    Если у вас есть ID и вы запустили программу CatPost VK в поле 1 (смотрите рисунок ниже)
                                    введите номер вашего ID приложения. После чего нажмите на кнопку "показать браузер" (2).</p>

                                <img src="/vk/vk_1.JPG" alt="CatPost VK" width="100%">

                                <p class="item-intro text-muted">2) Откроется окно встроенного браузера, который автоматически перейдёт на страницу социальной
                                    сети ""Вконтакте"", где нужно ввести ваш логин и пароль от страницы "Вконтакте", для
                                    того, чтобы войти в свою учётную запись и иметь возможность публиковать записи через
                                    ""API Вконтакте"". После ввода вашего логина и пароля нажмите кнопку "войти" (3) . Если
                                    ваше приложение раньше не использовалось, появится окошко, что ваше созданное приложение
                                    хочет получить возможность делать публикации на вашей стене/страницах/группах, а также
                                    размещать фотографии (стандартная политика безопасности социальной сети "Вконтакте").
                                    Вам нужно будет нажать кнопку ""разрешить"". После чего запуститься весь функционал приложения
                                    CatPost VK под вашей учётной записью. Ваш ID приложения сохраниться и его не придётся
                                    в следующий раз вводить.</p>


                                <img src="/vk/vk_2.JPG" alt="CatPost VK" width="100%">

                                <p class="item-intro text-muted">3) Приложение успешно запущено, теперь вы можете делать публикации! Практически каждое поле
                                    снабжено подсказками при наведении курсора мыши (для чего оно).</p>

                                <img src="/vk/vk_3.JPG" alt="CatPost VK" width="100%">

                                <p class="item-intro text-muted">Поле приложения разделено на две части - левую и правую. В левой части находится панель с
                                    25-тью вкладками. Справа находится кнопка "выход" (выход из приложения), иконка и краткое
                                    описание аккаунта, под которым вы вошли. Также в правой части находятся различные функциональные
                                    кнопки, которые будут рассмотрены чуть ниже, и большое поле, где расположен "журнал действий",
                                    в котором публикуется информация об успешности или нет ваших действий.
                                    <br>
                                    <br> В левой части все вкладки выглядят почти одинаково и они нужны для того, чтобы иметь
                                    возможность отправлять до 25 разных публикаций и до 25 разных групп/страниц "одной кнопкой".
                                    Почти в центре - список ваших групп и страниц. Выше этого списка - иконка группы/страницы.
                                    Левее находиться основное текстовое поле для публикации. Выше этого поля расположено
                                    место, куда можно вводить ID номер группы (отрицательное число) либо ID пользователя
                                    социальной сети "Вконтакте" (положительное число). В это поле подставляется автоматически
                                    ID группы из списка при выборе. Правее от этого поля расположен календарь выбора даты
                                    для создания отложенной записи. Ниже основного текстового поля, распологается дополнительное
                                    текстовое поле, в котором можно также писать текст для публикации (например подпись,
                                    или ставить # -хеш-теги). Ещё ниже расположена кнопка "старт", которая запускает таймер
                                    для публикации вашего поста по времени (не путать с отложенной записью, в данном случае
                                    публикация будет размещена когда ваше региональное время совпадёт с указанным временем
                                    для данного поста). Это может понадобиться тогда, когда вы сделали 25 (максимальное кл-во)
                                    отложенных записей за 1 сутки, но хотите, чтобы ещё были опубликованны записи в определённое
                                    время в эти же сутки. И для того, чтобы вам не сидеть и ждать, пока наступит время, вы
                                    можете запустить таймер (указав часы, минуты и дату правее от кнопки "старт" и нажав
                                    на саму кнопку "старт".).
                                    <br> Кнопка "отправить" - публикует вашу запись. Кнопка "прикрепить" - нужна для того,
                                    чтобы прикрепить к публикации до 6 картинок (форматом JPG, PNG) либо 1 картинку форматом
                                    GIF (видео и аудио записи для публикации скоро будут доступны). Прикреплённые картинки
                                    отображаются снизу. Если левой кнопкой мыши кликнуть по картинке - она открепится и не
                                    будет опубликована.</p>

                                <img src="/vk/vk_4.JPG" alt="CatPost VK" width="100%">

                                <p class="item-intro text-muted">Так же можно создавать комментарии к последним 20 записям выбранной группы или страницы по
                                    указанному фильтру (фильтр находится слева от кнопки "удалить"). Текст комментария берёться
                                    из основного и дополнительного текстового поля (как и для публикации). Комментарий можно
                                    делать от имени группы (если вы администратор или модератор выбранной вами группы) (5),
                                    а также нужно обязательно указать (6) диапазон публикаций для комментариев ( от 1 до
                                    20 ). Диапазон публикаций означает - что беред послдение 1-20 записей выбранной группы/страницы
                                    в которых создаёт комментарии от вашего аккаунта.</p>

                                <img src="/vk/vk_5.JPG" alt="CatPost VK" width="100%">

                                <p class="item-intro text-muted">Для отправки комментария нажмите на кнопку "комменты". Если на кнопку нажать дважды - опубликуется
                                    два комментария подряд.</p>

                                <img src="/vk/vk_6.JPG" alt="CatPost VK" width="100%">

                                <p class="item-intro text-muted">Для массовой отправки публикаций есть кнопка "отпарвить всё" в правой части приложения CatPost
                                    VK. Для этого, вы во вкладках (на примере взято 2 вкладки) вводите необходимую информацию,
                                    после чего указываете сколько раз подряд отправить все заполненные публикации (указывается
                                    в поле левее от кнопки "отправить всё" и нажимаете на саму кнопку "отправить всё").</p>

                                <img src="/vk/vk_7.JPG" alt="CatPost VK" width="100%">
                                <img src="/vk/vk_8.JPG" alt="CatPost VK" width="100%">

                                <p class="item-intro text-muted">Результат можно посмотреть в выбранной вами группе/страницы.</p>

                                <img src="/vk/vk_9.JPG" alt="CatPost VK" width="100%">
                                <img src="/vk/vk_10.JPG" alt="CatPost VK" width="100%">

                                <p class="item-intro text-muted">Чтобы создать публикацию на ваше личной странице, в поле (9) введите "0" либо ID вашего аккаунта
                                    (указан над вашей аватаркой). И нажмите кнопку "отправить" (10)</p>

                                <img src="/vk/vk_11.JPG" alt="CatPost VK" width="100%">
                                <img src="/vk/vk_12.JPG" alt="CatPost VK" width="100%">

                                <p class="item-intro text-muted">Для создания отложенных публикаций, можно использовать ещё и автоматическое прибавление минут
                                    к последней отложенной записи. К примеру, если в поле (11) указать 30, это означает,
                                    что отложенная запись будет опубликована в выбранном вами времени + 30 минут. После создания
                                    отложенной публикации, последуящая запись (если не менять дату и время отложенной публикации)
                                    будет опубликовано ещё через 30 минут. К примеру, указав время отложенной записи 19:30,
                                    и в поле (11) указать 30, после чего нажать на кнопку "отправить", запись будет отложена
                                    в 20:00. Если ещё раз нажать на кнопку "отправить", отложенная запись создатся в 20:30.</p>

                                <img src="/vk/vk_13.JPG" alt="CatPost VK" width="100%">
                                <img src="/vk/vk_14.JPG" alt="CatPost VK" width="100%">

                                <p class="item-intro text-muted">Также в программе CatPost VK предусмотрено отправление заявок на дружбу (кнопка "дружить").
                                    Поиск друзей идёт либо через ваших друзей (если в (13) стоит галочка), либо через выбранную
                                    вами группу/страницу (её участников). В поле (14) можно указать (не обязательно) в каком
                                    городе искать потенциальных друзей для заявок (название города обязательно указыватеся
                                    точно так же, как и в "Вконтакте", ошибки не допускаются). После чего, в поле правее
                                    от кнопки "дружить" указывается диапазон заявок (максимально от 1 до 5. 20 заявок в стуки
                                    разрешено). Если текстовое поле (в левой части программы CatPost VK) будет текст, то
                                    он будет отправиться вместе с заявкой на дружбу.</p>

                                <img src="/vk/vk_15.JPG" alt="CatPost VK">
                                <img src="/vk/vk_16.JPG" alt="CatPost VK">

                                <p class="item-intro text-muted">Ещё через CatPost VK можно удалять (по фильтру, слева от кнопки "удалить") публикации, которые
                                    были ранее опубликованы ( от 1 до 100 последних публикаций ). Количество публикаций для
                                    удаления указывается слева от кнопки "отправить всё".</p>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 8 -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body special2">
                                <!-- Project Details Go Here -->
                                <h2>WIKI CATPOST OK</h2>
                                <h2 style="color: crimson;">Основное положение</h2>
                                <p class="item-intro text-muted">CatPost OK - программа для создания публикаций в социальной сети <a href="https://ok.ru"
                                        target="_blank">"Одноклассники"</a>.
                                    <br> С помощью неё можно создавать публикации как отложенные по дате и времени, по таймеру
                                    и создавать публикации моментально.
                                    <br>
                                    <br> CatPost OK была разработана через <a href="https://ru.wikipedia.org/wiki/API" target="_blank">официальное API</a>                                    социальной сети <a href="https://apiok.ru/" target="_blank">"Одноклассники"</a> и имеет
                                    ряд преимуществ, по сравнению с другими аналогичными сервисами:
                                    <br>
                                    <br> 1) Полная безопасность ваших данных при работе в CatPost OK. Это означает, что вы
                                    напрямую подключаетесь к социальной сети "Одноклассники". Вы официально регистрируете
                                    приложения на себя и на свой аккаунт (см. раздел "Регистрация") без посредников.
                                    <br>
                                    <br> 2) CatPost еженедельно обновляется и дополняется новыми методами. Это означает,
                                    что вы можете сообщить о проблеме (на панели меню: "О программе" - "Сообщить об ошибке
                                    и она будет решена. А также написать пожелания о том, что вам не хватает при работе в
                                    CatPost.
                                    <br>
                                    <br> 3) Вы также можете одновременно рассылать несколько сот публикаций в 5 самых популярных
                                    социальных сетей одновременно и всего лишь с помощью одной кнопки!!!
                                    <br>
                                    <br> Единственное ограничение, которое нужно соблюдать: это правила социальной сети
                                    <a href="https://ok.ru/regulations" target="_blank">"Одноклассники"</a> и ограничения
                                    API Одноклассники (см. раздел "Ограничения").</p>

                                <h2 style="color: crimson;">Регистрация приложения CatPost OK</h2>

                                <p class="item-intro text-muted">Для возможности использования CatPost OK вам нужно иметь действующий аккаунт в социальной
                                    сети <a href="https://ok.ru/" target="_blank">"Одноклассники"</a>, а также понимать,
                                    что нарушение <a href="https://ok.ru/regulations/" target="_blank">правил</a> ваш аккаунт
                                    может быть заблокирован администраницей "Одноклассники". Чтобы этого не произошло, строго
                                    НЕ рекомендуется:
                                    <br>
                                    <br> 1) распространять материалы запрещённые действующим законадательством вашей страны.
                                    <br>
                                    <br> 2) распространять материалы или совершать действия запрещённые и указанные в правилах
                                    администранции социальной сети <a href="https://ok.ru/regulations" target="_blank">"Одноклассники"</a>.
                                    <br>
                                    <br> 3) для массовой рассылки рекомендуется создать дополнительный аккаунт в социальной
                                    сети "Одноклассники", через который рекомендуется использовать программу CatPost OK (данный
                                    пункт не является обязательным).
                                    <br>
                                    <br> 4) также существует ряд ограничений для <a href="https://apiok.ru/" target="_blank">"API Одноклассники"</a>,
                                    которые никак не афишируются в целях безопасности "Одноклассники", но некоторы базовые
                                    ограничения можно прочитать в разделе "ограничения" для ознакомления.
                                    <br>
                                    <br> Ознакомившись с выше указанными положениями, а также имея свой аккаунт в социальной
                                    сети "Одноклассники" можно приступить к регистрации приложения, через которое будет осуществляться
                                    вся работа программы CatPost OK.
                                    <br> Регистрация делается однажды, и не потребует (при успешном прохождении и получении
                                    данных) повторения процедуры.
                                    <br>
                                    <br> Первое, получите права разработчика на <a href="https://ok.ru/devaccess" target="_blank">этой странице</a>.
                                    <br> Второе, перейдите в раздел "игры" в вашем аккаунте.</p>

                                <img src="/smm_ok/smm_ok1.JPG" alt="CatPost OK" width="100%">

                                <p class="item-intro text-muted">Дарее выберите раздел "мои загруженные" (2) и нажмите на кнопку внизу страницы "добавить
                                    приложение" (3).</p>

                                <img src="/smm_ok/smm_ok2.JPG" alt="CatPost OK" width="100%">

                                <p class="item-intro text-muted">Откроются настройки приложения. Все поля заполнять не обязательно. Нужны несколько:
                                    <br>
                                    <br> Название: введите любое слово
                                    <br> Короткое имя: введите латинскими(английскими) буквами название вашего приложения
                                    без пробелом и знаков припенания. Например: post* (где вместо звёздочки дата вашего рождения
                                    без точки и пробелов).
                                    <br> Описание: моё приложение
                                    <br> Тип приложения: убрать галочку Web и поставить галочку External
                                    <br> 128x128: https://tomnolane.ru/128x128.png
                                    <br> 50х50: https://tomnolane.ru/50x50.png
                                    <br> 18х18: https://tomnolane.ru/18x18.png
                                    <br> Ссылка на приложение: https://tomnolane.ru/
                                    <br> Клиентская OAuth авторизация: поставьте галочку на против "Разрешить клиентскую
                                    OAuth авторизацию"
                                    <br> Ссылка сallback: https://tomnolane.ru/blank.html
                                    <br> Список разрешённых redirect_uri: https://tomnolane.ru/blank.html
                                    <br> Эл. почта для уведомлений: укажите вашу электронную почту
                                    <br> "Права"
                                    <br> Установка статуса (SET_STATUS) установите галочку "обязательно"
                                    <br> Изменение фотографий и фотоальбомов (PHOTO_CONTENT) установите галочку "обязательно".
                                    После чего нажмите "сохранить" и вам на электронный адрес который вы указали придёт письмо:</p>

                                <img src="/smm_ok/smm_ok3.JPG" alt="CatPost OK" width="100%">

                                <p class="item-intro text-muted">Вам понадобится номер "Application ID" и "Публичный ключ приложения". Но по умолчанию, у
                                    вас нету прав для создания публикаций в группе ( публикация на своей персональной странице
                                    запрещена строгими правилами администрации социльной сети "Одноклассники" ).
                                    <br> Для того, чтобы получить права, нужно отправить электронное письмо на адрес: api-support@ok.ru
                                    .
                                    <br> Заголовок (4) письма такой:
                                    <br>
                                    <br> Application ID: *тут ваш номер ID приложения, который пришёл к вам в письме ( VALUABLE_ACCESS,
                                    GROUP_CONTENT )
                                    <br> Текст (5): Доброго времени суток!
                                    <br>
                                    <br> Хотел бы получить у Вас разрешение на право доступа VALUABLE_ACCESS для публикации
                                    объявления поданного пользователем на его странице, а GROUP_CONTENT необходим для публикации
                                    объявлений в группе ( адрес вашей группы ) Приложение Application ID: *тут номер вашего
                                    ID приложения*.
                                    <br>
                                    <br> С уважением ваше_имя ( адрес вашей страницы в социальной сети "Одноклассники" )</p>

                                <img src="/smm_ok/smm_ok4.JPG" alt="CatPost OK" width="100%">

                                <p class="item-intro text-muted">Ответ в среднем идёт 2-ое рабочих суток.</p>

                                <img src="/smm_ok/smm_ok5.JPG" alt="CatPost OK" width="100%">

                                <p class="item-intro text-muted">После получения прав, вам нужно в социальной сети "Одноклассники" зайти в настрокий -
                                    <a href="https://ok.ru/settings/oauth" target="_blank">сторонние приложения</a> навести
                                    курсор мыши на ваше созданное приложение и выбрать "изменить".</p>

                                <img src="/smm_ok/smm_ok6.JPG" alt="CatPost OK" width="100%">

                                <p class="item-intro text-muted">Поставьте везде галочки.</p>

                                <img src="/smm_ok/smm_ok7.JPG" alt="CatPost OK" width="100%">

                                <p class="item-intro text-muted">Нажмите кнопку "сохранить". После этого можно запускать и пользоваться программой CatPost
                                    OK.
                                    <br> п.с. повторно процедуры регистрации проходить не придётся.</p>

                                <h2 style="color: crimson;">Ограничения</h2>

                                <p class="item-intro text-muted">У "API Одноклассники" и у самой социальной сети существуют различные ограничения (их много)
                                    и ниже вы можете ознакомиться с самыми основными (которые касаются программы CatPost
                                    OK):
                                    <br>
                                    <br> 1) Максимальное кол-во отложенных записей на вашей одной публичной странице может
                                    быть не более 400.
                                    <br>
                                    <br> 2) Не все группы/страницы (где вы не являетесь администратором/модератором) можно
                                    отправлять публикации.
                                    <br>
                                    <br> 3) Через "API Одноклассники" к публикации можно прикрепить не более 20 картинок
                                    (форматом JPG, PNG, GIF). Загрузка аудио и видео файлов не предусмотрено (для этого требуется
                                    сложная процедура получения соответствующих прав).
                                    <br>
                                    <br> 4) Для отображения картинки внешнего сайта (как показано ниже) можно прикрепить
                                    не более одной ссылки на указанный сайт. (как это сделать смотрите раздел "Как пользоваться
                                    CatPost OK".</p>

                                <img src="/smm_ok/smm_ok8.JPG" alt="CatPost OK" width="100%">

                                <p class="item-intro text-muted">5) Общее кол-во создания публикаций за сутки не известно (ограничение может быть для каждого
                                    пользователя своим уникальным и администрация социальной сети "Одноклассники" такие данные
                                    не даёт.). Но при корректном использовании рекомендуется делать не более 800 публикаций
                                    в сутки.
                                    <br>
                                    <br> 6) Отложенные публикации можно делать только на публичных страницах и группах. Отложенная
                                    запись (по минутам) всегда будет кратна 5. Т.е. если указать, что отложенная запись опубликуется
                                    в 16:31, она по факту опубликуется в 16:35.
                                    <br>
                                    <br> Также существуют и другие ограничения которые официально не опубликованны, но их
                                    всех знать не обязательно. Часть ограничений находиться в самой программе CatPost OK.
                                    Если, появится какая-то ошибка - в программе справа есть специальный журнал действий,
                                    где будет красным цветом отображено сообщение об ошибки и её номер (по классификации
                                    "API Одноклассники"). Не рекомендуется приближаться к верхним лимитам ограничений.</p>


                                <h2 style="color: crimson;">Как пользоваться CatPost OK</h2>

                                <p class="item-intro text-muted">После успешной прохождении процедуры регистрации (смотрите раздел "Регистрация") и получения
                                    прав для создания публикаций на страницах и группах запустите CatPost OK.</p>
                                <img src="/ok/ok_1.JPG" alt="CatPost OK" width="100%">
                                <p class="item-intro text-muted">В поле (1) введите ID вашего приложения (Application ID), который был вам отправлен в письме.
                                    В поле (2) введите публичный ключ (который тоже был указан в том же письме). После чего,
                                    нажмите на кнопку (3) "показать браузер".</p>
                                <img src="/ok/ok_2.JPG" alt="CatPost OK" width="100%">
                                <p class="item-intro text-muted">В левой части программы CapPost OK откроется встроенный браузер и перейдет автоматически
                                    на страницу входа социальной сети "Одноклассники". После ввода своего логина и пароля
                                    от вашей странички в "Одноклассниках", нажмите на кнопку (4).</p>
                                <img src="/ok/ok_3.JPG" alt="CatPost OK" width="100%">
                                <p class="item-intro text-muted">После успешного ввода логина и пароля (в целях безопасности) появится окошко, где будет предложено
                                    отправить (кнопка 5) вам СМС-уведомление с кодом (4 фифры), которые нужно ввести в поле
                                    (6), после чего нажать на оранжевю кнопку (7).</p>
                                <img src="/ok/ok_4.JPG" alt="CatPost OK" width="100%">
                                <p class="item-intro text-muted">Появится окошко, где ваше созданное приложение хочет получить доступ для публикации в группу.
                                    Нажмите "разрешить" (8).</p>
                                <img src="/ok/ok_5.JPG" alt="CatPost OK" width="100%">
                                <p class="item-intro text-muted">Откроется основная часть программы CatPost OK и можно уже создавать записи! Номер ID и публичный
                                    ключ вашего приложения автоматически сохраняться и в следующий раз не рнужно будет заново
                                    их вводить.
                                    <br>
                                    <br> Программа CatPost OK разделена на 2 части: левую и правую. В левой части расположены
                                    25 вкладок, в правой части данные вашего аккаунта, кнопка "отпарвить всё" и журнал действий,
                                    в котором отмечается отчёт об произведённых вами действий, а также показываются ошибки,
                                    если что-то произошло не то.
                                    <br> В левой части каждая вкладка выглядит одинаково. 25 вкладок позволяют делать до
                                    25 различных публикаций (в разное время) и отправлять до 25 различных групп одной кнопкой
                                    ("отправить всё"). В каждой вкладке есть основное текстовое поле и дополнительной (которое
                                    можно использовать для подписи или #хеш_тегов). В левом вверхнем углу расположено поле
                                    для ввода уникального индитификатора группы (индитифиатор подставляется автоматически
                                    при выборе вашей группы из списка, которые расположен почти по центру приложения CatPost
                                    OK). Ниже дополнительного текстового поля расположена кнопка "старт" для запуска таймера
                                    публикации вашего поста в указанное время (не путать с отложенной публикацией, в данном
                                    случае запись будет опубликована тогда, когда ваше региональное время совпадёт с временем
                                    и датой, указаным вами правее от кнопки "старт"). Ниже этой кнопки распологается ещё
                                    две кнопки: "отправить" и "прикрепить". Кнопка "отправить" немедленно отправляет вашу
                                    публикацию в выбранную вами группу. Кнопка "прикрепить" позволяет прикрепить к отправляемой
                                    публикации - картинки (в формате .JPG, .PNG, .GIF), но не более 20 картинок. Ниже этих
                                    кнопок распологается панель, где отображаются выбранные вами картинки. При клике левой
                                    клавишей мыши на картинку - она открепляется и не отправиться с публикацией.</p>
                                <img src="/ok/ok_6.JPG" alt="CatPost OK" width="100%">
                                <p class="item-intro text-muted">Если вы хотите опубликовать ссылку (как это сделано выше на картинке), "оберните" с двух
                                    сторон @@ (собачками) ту ссылку, которую хотите, чтобы она отобразилась с картинкой сайта,
                                    на которую она указывает. Если вам сама ссылка не нужна, но хотите чтобы картинка сайта
                                    по прежнему была снизу, "оберните" с каждой сторонны ссылки @@@ (собачками). К примеру:
                                    @@yandex.ru@@ в этом случае "yandex.ru" останется в теле вашей публикации. Если так:
                                    @@@yandex.ru@@@ то самой ссылки в теле публикации не будет, но картинка сайта отобразится.
                                    <br>
                                    <br> Ниже показано, как делать публикацию от имени "группы" и от имени "пользователя"
                                    (под списком группы, есть место для галочка "от вас", если стоит галочка - публикация
                                    будет от вашего имени, если нет, то от имени группы.). Также рядом с этим пунктом есть
                                    галочка "коммент.." которая либо разрешает делать комментарии под вашей созданной публикации
                                    (если галочка стоит) либо запрещает (когда галочка не стоит).</p>
                                <img src="/ok/ok_7.JPG" alt="CatPost OK" width="100%">
                                <img src="/ok/ok_8.JPG" alt="CatPost OK" width="100%">
                                <img src="/ok/ok_9.JPG" alt="CatPost OK" width="100%">
                                <p class="item-intro text-muted">Для создания отложенной записи, нужна указать дату (выбрать дату в календаре над иконкой
                                    группы) и время (в центрне приложения CatPost OK) после чего, можно ещё указать через
                                    сколько минут можно запись продублировать (к примеру, нужно сделать 3 записи одинаковых
                                    с интервало 30 минут). Для этого выбирается дата, указывается (в данном случае) вермя
                                    18:00, и в поле "+минут" пишем "30". Рядом с кнопкой "отправить всё" указываем кол-во
                                    повторных публикаций "3" и нажимаем на саму кнопку "отпарвить всё".</p>
                                <img src="/ok/ok_10.JPG" alt="CatPost OK" width="100%">
                                <img src="/ok/ok_11.JPG" alt="CatPost OK" width="100%">

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 9 -->
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body special2">
                                <!-- Project Details Go Here -->
                                <h2>WIKI CATPOST FB</h2>
                                <h2 style="color: crimson;">Основное положение</h2>

                                <p class="item-intro text-muted">CatPost FB - программа для создания публикаций в социальной сети <a href="https://www.facebook.com"
                                        target="_blank">"Фейсбук"</a>.
                                    <br>
                                    <br> С помощью неё можно создавать публикации отложенные по таймеру и создавать публикации
                                    моментально.
                                    <br>
                                    <br> CatPost FB была разработана через <a href="https://ru.wikipedia.org/wiki/API" target="_blank">официальное API</a>                                    социальной сети <a href="https://developers.facebook.com/?ref=pf" target="_blank">"Фейсбук"</a>                                    и имеет ряд преимуществ, по сравнению с другими аналогичными сервисами:
                                    <br>
                                    <br> 1) Полная безопасность ваших данных при работе в CatPost FB. Это означает, что вы
                                    напрямую подключаетесь к социальной сети "Фейсбук". Вы официально используете приложение
                                    зарегестрированное на себя (как зарегестрировать - смотрите раздел "Регистрация приложения").
                                    <br>
                                    <br> 2) CatPost еженедельно обновляется и дополняется новыми методами. Это означает,
                                    что вы можете сообщить о проблеме (на панели меню: "О программе" - "Сообщить об ошибке"),
                                    и она будет решена. А также написать пожелания о том, что вам не хватает при работе в
                                    CatPost.
                                    <br>
                                    <br> 3) Вы также можете одновременно рассылать несколько сот публикаций в 5 самых популярных
                                    социальных сетей одновременно и всего лишь с помощью одной кнопки!!!
                                    <br>
                                    <br> Единственное ограничение, которое нужно соблюдать: это <a href="https://www.facebook.com/policies?ref=pf"
                                        target="_blank">правила</a> социальной сети "Фейсбук" и ограничения API Фейсбук (см.
                                    раздел "Ограничения").</p>

                                <h2 style="color: crimson;">Регистрация приложения CatPost FB</h2>

                                <p class="item-intro text-muted">Для возможности использования CatPost FB вам нужно иметь действующий аккаунт в социальной
                                    сети <a href="https://www.facebook.com" target="_blank">"Фейсбук"</a>, а также понимать,
                                    что нарушение <a href="https://www.facebook.com/policies?ref=pf" target="_blank">указанных правил</a>                                    ваш аккаунт может быть заблокирован администраницей "Фейсбук". Чтобы этого не произошло,
                                    строго <b>НЕ</b> рекомендуется:
                                    <br>
                                    <br> 1) распространять материалы запрещённые действующим законадательством вашей страны.
                                    <br>
                                    <br> 2) распространять материалы или совершать действия запрещённые и указанные в правилах
                                    администранции социальной сети <a href="https://www.facebook.com/policies?ref=pf" target="_blank">"Фейсбук"</a>.
                                    <br>
                                    <br> 3) для массовой рассылки рекомендуется создать дополнительный аккаунт в социальной
                                    сети "Фейсбук", через который рекомендуется использовать программу CatPost FB (данный
                                    пункт не является обязательным).
                                    <br>
                                    <br> 4) также существует ряд ограничений для <a href="https://developers.facebook.com/docs/graph-api"
                                        target="_blank">"API Фейсбук"</a>, которые никак не афишируются в целях безопасности
                                    "Фейсбук", но некоторы базовые ограничения можно прочитать в разделе "ограничения" для
                                    ознакомления.
                                    <br>
                                    <br> Ознакомившись с выше указанными положениями, а также имея свой аккаунт в социальной
                                    сети <a href="https://www.facebook.com" target="_blank">"Фейсбук"</a> можно приступить
                                    к регистрации приложения, через которое будет осуществляться вся работа программы CatPost
                                    FB.
                                    <br> Регистрация делается однажды, и не потребует (при успешном прохождении и получении
                                    данных) повторения процедуры.
                                    <br>
                                    <br> Первым делом, откройте в вашем браузере страницу: https://developers.facebook.com/?ref=pf
                                    и нажмите на кнопку "создать приложение"(1)</p>
                                <img src="/smm_fb/smm_fb1.JPG" alt="CatPost FB" width="100%">
                                <p class="item-intro text-muted">В открывшимся окошке в поле (2) введите название вашего приложентя, в поле (3) введите ваш
                                    email адресс для связи с вами (это поле обязательно заполнять!). После чего выберите
                                    из выпадающего списка (4) нужный вам раздел (для чего вам нужно приложение CatPost FB)
                                    и нажмите на кнопку "создайте ID приложения" (5). Может появится окошко, где попросят
                                    ввести буквы с картинки (политика безопасности социальной сети Фейсбук)</p>
                                <img src="/smm_fb/smm_fb2.JPG" alt="CatPost FB" width="100%">
                                <p class="item-intro text-muted">После успешного прохождения откроется окошко, в котором надо перейти на вкладку "настройки".
                                    Запишите ваш "Индетификатор приложения", после чего нажмите на кнопку (7) "показать".
                                    Потребуется заново ввести парол от вашей страницы Фейсбук. После успешного ввода покажется
                                    ваш "секрет приложения", его тоже нужно записать. Убедитесь, что поле "эл. адрес для
                                    связи" содержит адрес вашего почтового ящика.</p>
                                <img src="/smm_fb/smm_fb3.JPG" alt="CatPost FB" width="100%">
                                <p class="item-intro text-muted">Затем нужно включить ваше приложения. Для этого перейдите на вкладку "проверка приложения"
                                    и переключите (9) на "да".</p>
                                <img src="/smm_fb/smm_fb4.JPG" alt="CatPost FB" width="100%">
                                <p class="item-intro text-muted">Вернитесь обратно на вкладку "Настройки" (10).В самом низу нажмите "добавить платформу" и
                                    в открывшимся окошке выберите "веб-сайт" (11). </p>
                                <img src="/smm_fb/smm_fb5.JPG" alt="CatPost FB" width="100%">
                                <p class="item-intro text-muted">В поле "URL-адрес сайта" (12) введите: http://vk.com/api/login_success.html и в "Домены приложений"
                                    скопируйте тоже самое. И в завершении нажмите на кнопку "сохранить изменения" (13).</p>
                                <img src="/smm_fb/smm_fb6.JPG" alt="CatPost FB" width="100%">
                                <p class="item-intro text-muted">Регистрация прошла успешно. После чего, повторно регистрировать программу не нужно. Можно
                                    пользоваться программой CatPost FB!</p>

                                <h2 style="color: crimson;">Ограничения</h2>

                                <p class="item-intro text-muted">У "API Фейсбук" и у самой социальной сети существуют различные ограничения (их много) и ниже
                                    вы можете ознакомиться с самыми основными (которые касаются программы CatPost FB):
                                    <br>
                                    <br> 1) <a href="https://developers.facebook.com/docs/graph-api/advanced/rate-limiting"
                                        target="_blank">Ограничения</a>.
                                    <br>
                                    <br> 2) Рекомендуется делать не более 50 публикаций на страницу/группу.
                                    <br>
                                    <br> 3) Не все группы/страницы (где вы не являетесь администратором/модератором) можно
                                    отправлять публикации.
                                    <br>
                                    <br> 4) Через "API Фейсбук" к публикации можно прикрепить не более 20 картинок (форматом
                                    .jpg, .jpeg, .tiff, .png, .gif, .bmp). Загрузка аудио и видео файлов в скором времени
                                    появится.
                                    <br>
                                    <br> 5) Публикации должны быть разными по текстовому содержанию.</p>

                                <h2 style="color: crimson;">Как пользоваться CatPost FB</h2>

                                <p class="item-intro text-muted">После успешной регистрации и записав (временно) "Идентификатор приложения" и "Секрет приложения"
                                    можно запустить программу CatPost FB.</p>
                                <img src="/fb/fb_1.JPG" alt="CatPost FB" width="100%">
                                <p class="item-intro text-muted">В поле (1) нужно ввести: в верхнее поле: ID вашего приложения, в нижнее: "Секрет приложения".
                                    После чего нажмите на кнопку "показать браузер" (2).</p>
                                <img src="/fb/fb_2.JPG" alt="CatPost FB" width="100%">
                                <p class="item-intro text-muted">В левой части откроется браузер и автоматически перейдёт на страницу входа социальной сети
                                    "Фейсбук". Вам нужно ввести в верхнее поле ваш логи от аккаунта, а в нижнее поле - пароль.
                                    После чего нажать на синюю кнопку "Log in". При первом подключении, появится окошко,
                                    где "Фейбсук" проинформирует, что ваше созжданное приложение хочет получить доступ к
                                    публикации на страницах и группах (внимательно всё посмотрите), и выбирите кто будет
                                    видеть ваши публикации (по умолчанию - только друзья). После того, как внимательно всё
                                    посмотрели, можно нажать на кнопку "разрешить".</p>
                                <img src="/fb/fb_3.JPG" alt="CatPost FB" width="100%">
                                <p class="item-intro text-muted">После успешного входа - сгенерируется специальный "токен" (некий ключ/пароль), который выдаётся
                                    при успешном подключении на 60 дней (и сохраняется внутри программы, чтобы каждый раз
                                    не входить в "Фейсбук"). Он даёт право на использование приложения в ваших интересах.
                                    За 10 дней до окончания срока действия токена, вы получите в журнале действий уведомление
                                    о том, что его нужно "переоформить" - в этом случае, при запуске программы - вы должны
                                    опять нажать на кнопку "открыть браузер", ввести логин и пароль, после чего сгенерируется
                                    новый токен (и сохранится внутри в программе) и запустится с полным функционалом программа
                                    CatPost FB.
                                    <br>
                                    <br> Программа разделена на две чати: левую и правую. В Правой части расположен журнал
                                    действий (который информирует об успешности ваших действий), аватар пользователя, под
                                    которым вы зашли в "Фейсбук", персональные данные, кнопка "остановить" - для отмены отправки
                                    публикации, а также кнопка "отправить всё" с текстовым полем рядом, где указывается сколько
                                    проходов массовой отправки выполнить.
                                    <br>
                                    <br> В левой части программы CatPost FB распологается панель с 25 индентичными вкладками,
                                    на каждой из которых есть два списка в которых: слева перечислены ваши странички, в правой
                                    ваши группы. Между ними (при выборе) показывается иконка выбранной группы/страницы. Над
                                    списком страниц - текстовое поле, куда (автоматически при выборе) вносится ID страницы/группы.
                                    Над списком групп распологается календарь для выбора даты для отложенной публикации.
                                    <br>
                                    <br> В центре (левой части программы) распологается основное текстовое поле для публикации
                                    (ограничение 4096 символов), а также поля для прикрепление (максимум одной) ссылки на
                                    сайт с возмодностью дополнительного описания этого сайта: краткого содержания, название
                                    сайта, заголовок сайта, имеется возможность указать интернет адрес картинки для отображения
                                    этой ссылки и непосредственно адресс ссылки.
                                    <br>
                                    <br> Кнопка "отправить" - отправляет публикацию в выбранную вами группу/страницу. Кнопка
                                    "прикрепить" - позволяет прикрепить к публикации до 20 картинок (форматом .jpg, .jpeg,
                                    .tiff, .png, .gif, .bmp).
                                    <br>
                                    <br> Кнопка "старт" и справа рядом поля с календарём - позволяют настроить временной
                                    таймер для публикации по времени (срабатывает когда, ваше локальное время будет равно
                                    времени указанным для вашей временной публикации).
                                    <br>
                                    <br> Ниже распологается панель, на которой изображены ваши прикреплённые картинки к публикации.
                                    При нажатии левой клавиши мыши на картинку - она открепляется и не публикуется.</p>
                                <img src="/fb/fb_4.JPG" alt="CatPost FB" width="100%">
                                <p class="item-intro text-muted">При одновременной отправке ссылки на сайт и прикреплённых картинок, для публикации (по станларту
                                    API Фейсбук) - прикреплённые картинки будут игнорироваться.
                                    <br>
                                    <br> Для создания отложенной публикации нужно выбрать из списка публичных страниц (отложенную
                                    публикацию можно сделать только на публичных страницах, в группах или на вашей персональной
                                    странице аккаунта - отложенную запись создать нельзя, для этого используйте таймер, который
                                    распологается рядом с кнопкой "отправить") то место, куда собираетесь отправить (при
                                    наличии соответствующих прав администратора/редактора/модератора), после чего выберите
                                    вверзу дату отложенной публикации (по умолчанию текущая дата) и время: часы и минуты
                                    для публикации (примечание, если в "часах" будет выбран пункт "сейчас" - публикация не
                                    будет отложенной). После чего можно нажать на кнопку "отправить" и создаться отложенная
                                    публикация для публичной страницы с выбранной вами датой и временем.</p>
                                <img src="/fb/fb_5.JPG" alt="CatPost FB" width="100%">
                                <img src="/fb/fb_6.JPG" alt="CatPost FB" width="100%">
                                <p class="item-intro text-muted">Для того, чтобы сделать публикацию на вашей странице вашего аккаунта - в поле ID (отмечено
                                    на картинке) нужно поставить "0".</p>
                                <img src="/fb/fb_7.JPG" alt="CatPost FB" width="100%">
                                <img src="/fb/fb_8.JPG" alt="CatPost FB" width="100%">
                                <p class="item-intro text-muted">На следующей картинке показана группа состоящая из кнопки "старт", поле для ввода часа, поле
                                    для ввода минут и календаря для создания отложеной записи по таймеру.</p>
                                <img src="/fb/fb_9.JPG" alt="CatPost FB" width="100%">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 10 -->
    <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body special2">
                                <!-- Project Details Go Here -->
                                <h2>WIKI CATPOST INST</h2>
                                <h2 style="color: crimson;">Основное положение</h2>
                                <p class="item-intro text-muted">CatPost Inst - программа для создания публикаций в социальной сети <a href="https://www.instagram.com"
                                        target="_blank">"Инстаграм"</a>.
                                    <br>
                                    <br> С помощью неё можно создавать публикации отложенные по таймеру и создавать публикации
                                    моментально.
                                    <br>
                                    <br> CatPost Inst была разработана через <a href="https://ru.wikipedia.org/wiki/API"
                                        target="_blank">официальное API</a> социальной сети <a href="https://www.instagram.com/developer"
                                        target="_blank">"Инстаграм"</a> и имеет ряд преимуществ, по сравнению с другими аналогичными
                                    сервисами:
                                    <br>
                                    <br> 1) Полная безопасность ваших данных при работе в CatPost Inst. Это означает, что
                                    вы напрямую подключаетесь к социальной сети "Инстаграм". Вы официально используете приложение
                                    без посредников (регистрация приложения не требуется).
                                    <br>
                                    <br> 2) CatPost еженедельно обновляется и дополняется новыми методами. Это означает,
                                    что вы можете сообщить о проблеме (на панели меню: "О программе" - "Сообщить об ошибке"),
                                    и она будет решена. А также написать пожелания о том, что вам не хватает при работе в
                                    CatPost.
                                    <br>
                                    <br> 3) Вы также можете одновременно рассылать несколько сот публикаций в 5 самых популярных
                                    социальных сетей одновременно и всего лишь с помощью одной кнопки!!!
                                    <br>
                                    <br> Единственное ограничение, которое нужно соблюдать: это правила социальной сети
                                    <a href="https://help.instagram.com/478745558852511" target="_blank">"Инстаграм"</a>                                    и ограничения API Инстаграм (см. раздел "Ограничения").</p>

                                <h2 style="color: crimson;">Регистрация приложения CatPost Inst</h2>

                                <p class="item-intro text-muted">Создавать приложение для работы с API Instagram в CatPost Inst не требуется.
                                    <br>
                                    <br> При запуске программы достаточно ввести свой логин и пароль (в целях безопасноти,
                                    логин и пароль не будут сохраняться при повторном запуске прогарммы CatPost Inst).
                                    <br>
                                    <br> Перед запуском программы рекомендуется посетить раздел "ограничения".</p>

                                <h2 style="color: crimson;">Ограничения</h2>

                                <p class="item-intro text-muted">У "API Инстаграм" и у самой социальной сети существуют различные ограничения (их много) и
                                    ниже вы можете ознакомиться с самыми основными (которые касаются программы CatPost Inst):
                                    <br>
                                    <br> 1) Лайки: не более одного в течении 28 – 36 секунд (за сутки – не более 1000, после
                                    чего функция блокируется на 24 часа. строго не рекомендуется приближаться к верхней границе
                                    этого значения).
                                    <br>
                                    <br> 2) Подписка + Лайк: не более 100 (100 + 100) в сутки с интервалом 28 – 38 секунд.
                                    <br>
                                    <br> 3) Отписка: интервал 12-22 секунд и не более 75 в сутки от НЕвзаимных и 75 от взаимных.
                                    <br>
                                    <br> 4) Комментарии: не более 12-14 в час с задержкой от 350 до 400 сек, любое превышение
                                    лимитов может быть воспринято как спам (не более 50 комментариев в сутки).
                                    <br>
                                    <br> 5) Добавление фотографий: на новом аккаунте инстаграм нельзя добавлять сразу много
                                    новых фото, желательно не более 2-3 в день, для старых аккаунтов не более 9-12 фотографий.
                                    <br>
                                    <br> 6) Описание к каждой фотографии должно быть уникальным.
                                    <br>
                                    <br> 7) При ведении более одной страницы instagram рекомендуется не использовать одну
                                    и ту же ссылку на сайт. Для одного аккаунта Инстаграм может быть только одна ссылка на
                                    сайт. Лучше указывать ссылки на свои страницы в социальных сетях "Фейсбук" или "Контакте"
                                    или "Одноклассники" или "Твиттер".
                                    <br>
                                    <br> 8) Настоятельно рекомендуется привязывать 1 номер телефона при регистрации к 1 аккаунту.
                                    <br>
                                    <br> 9) Для распространения информации коммерческого характера строго рекомендуется создать
                                    отдельных аккаунт в социальной сети "Инстаграм".
                                    <br>
                                    <br> 10) Для новых аккаунтов лимиты (на всё, включая публикацию фотографий, подписок/отписок/лайков)
                                    ниже, чем у страниц двух месячной давности.</p>
                                <h2 style="color: crimson;">Как пользоваться CatPost Inst</h2>
                                <p class="item-intro text-muted">Для использования CatPost Inst достаточно иметь зарегестрированный аккаунт в социальной сети
                                    <a href="https://www.instagram.com" target="_blank">Инстаграм</a>. В поле (1) введите
                                    ваш логин от учётной записи Инстаграм, в поле (2) введите ваш пароль, после чего нажмите
                                    на кнопку (3) "Войти". </p>
                                <img src="/inst/inst_1.JPG" alt="CatPost Inst" width="100%">
                                <p class="item-intro text-muted">После успешного входа будут загружены ваши данные и ваша лента. Програма CatPost Inst разделена
                                    на 2 части: левую с 30-тью вкладками и правую с инфомрацией о вас, кнопкой "посмотреть"
                                    (при вводе имени пользователя инстаграма в текстовое поле левее от данной кнопки и указание
                                    сколько последних записей отобразить (от 1 до 200, по умолчанию - 40), и с последними
                                    (40) записями вашей ленты. В левой части расположен журнал просмотра хеш-тегов, по середине
                                    показывается прикреплённая картинка с текстовым полем для описания (максимум 2000 символов).
                                    Также ниже центра расположены функциональные кнопки, позволяющие запустить таймер для
                                    отложенной записи, либо рассылать массово лайки (либо снимать их), комментарии последних
                                    записей и заявок на подписку/отписку. Данный функционал работает как по указанному хеш-тегу
                                    (галочка внизу) либо по указанному пользователю (в поле, где текст: "тут имя пользователя").
                                    Кнопка "прикрепить" позволяет загрузить картинку/фотографию к вашей публикации. Кнопка
                                    "отпарвить" позволяет немедленно отправить публикацию.</p>
                                <img src="/inst/inst_2.JPG" alt="CatPost Inst" width="100%">
                                <img src="/inst/inst_3.JPG" alt="CatPost Inst" width="100%">
                                <img src="/inst/inst_4.JPG" alt="CatPost Inst" width="100%">
                                <p class="item-intro text-muted">В журнале просмотра хеш-тегов имеется 2 опции:
                                    <br> 1) просмотр списка по указанному хеш-тегу (в поле над журналом нужно ввести хеш-тег
                                    без знака "решётка" (#). В котором отобразится список похожих слов на ваш хеш-тег и кол-во
                                    публикаций с данным хеш-тегом. Чтобы увидеть результат - нажмите на кнопку правее в виде
                                    лупы с глобусом.
                                    <br>
                                    <br> 2) Просмотр последних (30) записей по выбранному хеш-тегу. В этом случае хеш-тег
                                    в поле над журналом хеш-тегов указывается со знаком "решётка" (#). Чтобы увидеть результат
                                    - нажмите на кнопку правее в виде лупы с глобусом.</p>
                                <img src="/inst/inst_5.JPG" alt="CatPost Inst" width="100%">
                                <img src="/inst/inst_6.JPG" alt="CatPost Inst" width="100%">
                                <p class="item-intro text-muted">Для того, чтобы отправить комментарий (в примере ниже, будет разослано к 5 последним публикация
                                    по хеш-тегу #wildcat) нужно указать кол-во в поле (1) и надать кнопку "коммент".</p>
                                <img src="/inst/inst_7.JPG" alt="CatPost Inst" width="100%">
                                <img src="/inst/inst_8.JPG" alt="CatPost Inst" width="100%">
                                <p class="item-intro text-muted">Чтобы обновить вашу ленту - нажмите клавишу на клавиатуре "F5"</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 11 -->
    <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body special2">
                                <!-- Project Details Go Here -->
                                <h2>WIKI CATPOST TW</h2>
                                <h2 style="color: crimson;"><a name="1"></a>Основное положение</h2>
                                <p class="item-intro text-muted">CatPost TW - программа для создания публикаций в социальной сети <a href="https://twitter.com"
                                        target="_blank">"Твиттер"</a>.
                                    <br>
                                    <br> С помощью неё можно создавать публикации отложенные по таймеру и создавать публикации
                                    моментально.
                                    <br>
                                    <br> CatPost TW была разработана через <a href="https://ru.wikipedia.org/wiki/API" target="_blank">официальное API</a>                                    социальной сети <a href="https://dev.twitter.com/overview/api" target="_blank">"Твиттер"</a>                                    и имеет ряд преимуществ, по сравнению с другими аналогичными сервисами:
                                    <br>
                                    <br> 1) Полная безопасность ваших данных при работе в CatPost TW. Это означает, что вы
                                    напрямую подключаетесь к социальной сети "Твиттер". Вы официально регистрируете приложения
                                    на себя и на свой аккаунт (см. раздел "Регистрация") без посредников.
                                    <br>
                                    <br> 2) CatPost еженедельно обновляется и дополняется новыми методами. Это означает,
                                    что вы можете сообщить о проблеме (на панели меню: "О программе" - "Сообщить об ошибке"),
                                    и она будет решена. А также написать пожелания о том, что вам не хватает при работе в
                                    CatPost.
                                    <br>
                                    <br> 3) Вы также можете одновременно рассылать несколько сот публикаций в 5 самых популярных
                                    социальных сетей одновременно и всего лишь с помощью одной кнопки!!!
                                    <br>
                                    <br> Единственное ограничение, которое нужно соблюдать: это правила социальной сети
                                    <a href="https://twitter.com/tos?lang=ru" target="_blank">"Твиттер"</a> и ограничения
                                    API Твиттера (см. раздел "Ограничения").</p>

                                <h2 style="color: crimson;"><a name="2"></a>Регистрация приложения CatPost TW</h2>

                                <p class="item-intro text-muted">Для возможности использования CatPost TW вам нужно иметь действующий аккаунт в социальной
                                    сети <a href="https://twitter.com" target="_blank">"Твиттер"</a>, а также понимать, что
                                    нарушение <a href="https://twitter.com/tos?lang=ru" target="_blank">указанных правил</a>                                    ваш аккаунт может быть заблокирован администраницей "Твиттер". Чтобы этого не произошло,
                                    строго <b>НЕ</b> рекомендуется:
                                    <br>
                                    <br> 1) распространять материалы запрещённые действующим законадательством вашей страны.
                                    <br>
                                    <br> 2) распространять материалы или совершать действия запрещённые и указанные в правилах
                                    администранции социальной сети <a href="https://twitter.com/tos?lang=ru" target="_blank">"Твиттер"</a>.
                                    <br>
                                    <br> 3) для массовой рассылки рекомендуется создать дополнительный аккаунт в социальной
                                    сети "Твиттер", через который рекомендуется использовать программу CatPost TW (данный
                                    пункт не является обязательным).
                                    <br>
                                    <br> 4) также существует ряд ограничений для <a href="https://dev.twitter.com/overview/api"
                                        target="_blank">"API Твиттер"</a>, которые никак не афишируются в целях безопасности
                                    "Твиттер", но некоторы базовые ограничения можно прочитать в разделе "ограничения" для
                                    ознакомления.
                                    <br>
                                    <br> Ознакомившись с выше указанными положениями, а также имея свой аккаунт в социальной
                                    сети <a href="https://twitter.com" target="_blank">"Твиттер"</a> можно приступить к регистрации
                                    приложения, через которое будет осуществляться вся работа программы CatPost TW. Регистрация
                                    делается однажды, и не потребует (при успешном прохождении и получении данных) повторения
                                    процедуры.
                                    <br>
                                    <br> Создайте ваше приложения на странице <a href="https://apps.twitter.com" target="_blank">https://apps.twitter.com</a>(Нажмите
                                    на кнопку 1).</p>
                                <img src="/smm_tw/smm_tw1.JPG" alt="CatPost TW" width="100%">
                                <p class="item-intro text-muted">Откроется окно, куда надо будет ввести несколько данных:
                                    <br> Name *: любое английское слвово длинной не более 32 букв
                                    <br> Description *: моё приложение
                                    <br> Website *: указываете любой веб сайт
                                    <br> Внизу, где Developer Agreement поставтье галочку (5)
                                    <br> И нажмите на кнопку (6), после чего ваше приложение создатся.</p>
                                <img src="/smm_tw/smm_tw2.JPG" alt="CatPost TW" width="100%">
                                <p class="item-intro text-muted">На открывшейся странице - откройте вкладку "Keys and Access Tokens" (7).</p>
                                <img src="/smm_tw/smm_tw3.JPG" alt="CatPost TW" width="100%">
                                <p class="item-intro text-muted">В самом внизу страницы нажмите на кнопку (8) "Create my access token".</p>
                                <img src="/smm_tw/smm_tw4.JPG" alt="CatPost TW" width="100%">
                                <p class="item-intro text-muted">Вам нужно будет записать (временно) 4 значения:
                                    <br> 1) Access Token
                                    <br> 2) Access Token Secret.</p>
                                <img src="/smm_tw/smm_tw5.JPG" alt="CatPost TW" width="100%">
                                <p class="item-intro text-muted">3) Consumer Key
                                    <br> 4) Consumer Secret.</p>
                                <img src="/smm_tw/smm_tw6.JPG" alt="CatPost TW" width="100%">
                                <p class="item-intro text-muted">Этого будет достаточно, чтобы можно было пользоваться программой CatPost TW. После упешного
                                    ввода в программу всех 4-ёх значений, они сохраняться и второй раз вводить не придётся.</p>

                                <h2 style="color: crimson;"><a name="3"></a>Ограничения</h2>

                                <p class="item-intro text-muted">У "API Твиттер" и у самой социальной сети существуют различные ограничения (их много) и ниже
                                    вы можете ознакомиться с самыми основными (которые касаются программы CatPost TW):
                                    <br>
                                    <br> 1) Можно делать не более 180 запросов за 15 минут (посмотреть список друзей - 1
                                    запрос, отправить твит ещё один запрос). Но есть некоторые методы которые ещё сильнее
                                    ограничены: к примеру посмотреть список друзей можно не более 15 раз в 15 минут. Посмотреть
                                    сколько осталось, можно в программе CatPost TW внизу справа нажав на знак вопроса.
                                    <br>
                                    <br> 2) Максимальаня длина публикации - 140 символов.
                                    <br>
                                    <br> 3) Через "API Твиттер" к публикации можно прикрепить не более 4 картинок (форматом
                                    JPG, PNG). Либо 1 картинку форматов .GIF (более 1 нельзя, "API Твиттер" не примет). Либо
                                    прикрепить 1 видео файл (формата .mp4) продолжительностью не более 30 секунд и размером
                                    не более 15 Мб.</p>

                                <h2 style="color: crimson;"><a name="4"></a>Как пользоваться CatPost TW</h2>

                                <p class="item-intro text-muted">При запуске программы CatPost TW нужно в поля (с 1 по 4) ввести данные, которые были получены
                                    при регистрации:
                                    <br> в 1 поле нужно ввести ваш Access Token
                                    <br> во 2 поле нужно ввести ваш Access Token Secret
                                    <br> в 3 поле нужно ввести ваш Consumer Key (API Key)
                                    <br> в 4 поле нужно ввести ваш Consumer Secret (API Secret)
                                    <br>
                                    <br> после чего нажать на кнопку (в виде птички Твиттера 5). При успешном вводе Access
                                    Toke, Access Token Secret, Consumer Key (API Key), Consumer Secret (API Secret) сохранятся
                                    и вводить последующие разы не нужно.</p>
                                <img src="/tw/tw_1.JPG" alt="CatPost TW" width="100%">
                                <p class="item-intro text-muted">Запуститься CatPost TW и после загрузки вашей твит ленты можно начать пользоваться программой.</p>
                                <img src="/tw/tw_2.JPG" alt="CatPost TW" width="100%">
                                <p class="item-intro text-muted">Программа CatPost TW разделена на 2 части: левую с 30-тью вкладками и правую, где содержаться
                                    самые основные сведения об вашем аккаунте и загружена ваша твит-лента (последние 40 твиттов).
                                    <br>
                                    <br> В верхней части (при нажатие на кнопку "читатели" либо на кнопку "читаемые") появляется
                                    окошко последних (максимум 1000) ваших читателей, которые читают ваш твит (в случае нажатии
                                    кнопки "читатели") либо последних (максимум 1000) пользователей, которые вы читаете в
                                    твиттере. Для публикации твитта (длиной не более 140 символов) есть текстовое поле. Чтобы
                                    прикрепить к твитту картинки нажмите кнопку "прикрепить" (можно прикрепить максимум 4
                                    картинки формата JPG, PNG) либо 1 картинку формата GIF (размером не более 5 Мб) либо
                                    1 видео форматом mp4 длительностью не более 30 секунд и размером не более 15 Мб.
                                    <br>
                                    <br> Чтобы отпарвить твит в свою твит-ленту нажмите кнопку "отправить". Поскольку у твиттера
                                    нету функции отложенной записи (как у социальных сетей: Одноклассники, Вконтакте, Фейсбук)
                                    в CatPost TW можно настроить таймер для отложенной публикации твита по времени (кнопка
                                    "старт" и рядом текстовые поля для указания часа, минут и даты отправки). Чтобы удалить
                                    прикреплённую картинку достаточно по ней кликнуть левой клавишей мыши. 30 вкладок можно
                                    использовать для отправления 30-ти различных твиттов.</p>
                                <img src="/tw/tw_3.JPG" alt="CatPost TW" width="100%">
                                <p class="item-intro text-muted">CatPost TW можно массово подписываться/отписываться как на "друзей" вашего читателя, либо
                                    на друзей аккаунта на который вы подписались (рекомендуется не более 100 заявок в сутки
                                    отправлять во избежании блокировки вашего аккаунта). А также массово лайкать/снимать
                                    лайки (рекомендуется не более 100 таких запросов в сутки). Кнопка "удалить" удаляет указанное
                                    кол-во ваших публикаций на стене. Указать кол-во для подписывания/лайканья/отписыванья/ан-лайканья/удаления
                                    твитов нужно в поле под кнопкой "читаемые".</p>
                                <img src="/tw/tw_4.JPG" alt="CatPost TW" width="100%">
                                <img src="/tw/tw_5.JPG" alt="CatPost TW" width="100%">
                                <p class="item-intro text-muted">Узнать примерное оставшиеся кол-во лимитов на совершение операций можно нажав на знак вопроса
                                    внизу справа под твит-лентой.</p>
                                <img src="/tw/tw_6.JPG" alt="CatPost TW" width="100%">
                                <p class="item-intro text-muted">Чтобы обновить вашу твит-ленту - нажмите клавишу на клавиатуре "F5" либо на круговую стрелочку
                                    в правом вверхнем углу твит-ленты.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer id="footer">
        <div class="container text-center">
    	    Catpost 2 версия <?= date('Y'); ?> год.
        </div>
    </footer>
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script>
        $(document).ready(function ($) {
            $("#owl-example").owlCarousel();
            window.scrollTo(0, 0);
        });

        $("body").data("page", "frontpage");

        $("#owl-example").owlCarousel({
            items: 3,
            /*        itemsDesktop : [1199,3],
                    itemsDesktopSmall : [980,9],
                    itemsTablet: [768,5],
                    itemsTabletSmall: false,
                    itemsMobile : [479,4]*/
        })
        
        $('.nav a').on('click', function(){
            $('.navbar-toggle').click() //bootstrap 3.x by Richard
        });
    </script>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47774728 = new Ya.Metrika({
                    id:47774728,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47774728" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>