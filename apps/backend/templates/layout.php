<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//RU"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <title><?php include_slot('title', 'M-online - devis companii') ?></title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php use_stylesheet('admin.css') ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a href="<?php echo url_for('@homepage') ?>" class="navbar-brand">YourShop</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle Navigarion">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="basicExampleNav">
                <ul class="navbar-nav mr-auto justify-content-center smoth-scroll">
                    <?php if ($sf_user->isAuthenticated()): ?>
                    <li>
                        <a class="nav-link waves-effect waves-light"<?php echo link_to('Новый', 'shop_main_new') ?>></a>
                    </li
                    <li>
                        <a class="nav-link waves-effect waves-light active"<?php echo link_to('Товары', 'shop_main') ?>></a>
                    </li>
                    <li>
                        <a class="nav-link waves-effect waves-light"<?php echo link_to('Виды', 'shop_category') ?>></a>
                    </li>
                    <li>
                        <a class="nav-link waves-effect waves-light"<?php echo link_to('Пользователи', 'sf_guard_user') ?>></a>
                    </li>
                    <?php endif ?>
                </ul>

                <ul class="navbar-nav nav-flex-item">
                    <?php if ($sf_user->isAuthenticated()): ?>
                    <li>
                        <a class="nav-link waves-effect waves-light"<?php echo link_to('Выйти', 'sf_guard_signout') ?>></a>
                    </li>
                    <?php endif ?>
                    <li>
                    <?php if (!$sf_user->isAuthenticated()): ?>
                        <a class="nav-link waves-effect waves-light"<?php echo link_to('Войти', 'sf_guard_signin') ?>></a>
                    </li>
                    <?php endif ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link waves-effect waves-light">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link waves-effect waves-light">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link waves-effect waves-light">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <div class="search-box1">
                    <input type="text" class="search-txt pl-1" placeholder="type to search" >
                    <a href="#" class="search-btn1 pl-1">
                        <i class="fa fa-search" style="font-size: 22px"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="view" id="intro">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-10">
                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">
                            Lorem ipsum dolor sit amet.
                        </h2>
                        <hr class="hr-light">
                        <h4 class="white-text my-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequatur culpa necessitatibus! Eveniet, harum recusandae?
                        </h4>
                        <button class="btn btn-outline-white waves-effect waves-light read-more">Read more <i class="fa fa-book"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="my-5">
    <div id="container">
        <div id="header">
            <h1>
                <a href="<?php echo url_for('homepage') ?>">
                </a>
            </h1>
        </div>
        <div id="content">
            <?php echo $sf_content ?>
        </div>

        <div id="footer">
            <img src="" />
            powered by <a href="/">
                <img src="images/symfony.gif" alt="symfony framework" /></a>
        </div>
    </div>
</main>


<footer class="page-footer font-small brown darken-2 pt-0">
    <div class="grey darken-1">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Get connected with us on social networks</h6>
                </div>
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <a href="#" class="fb-ic ml-0">
                        <i class="fa fa-instagram white-text ml-4"></i>
                    </a>
                    <a href="#" class="fb-ic ml-0">
                        <i class="fa fa-twitter white-text ml-4"></i>
                    </a>
                    <a href="#" class="fb-ic ml-0">
                        <i class="fa fa-youtube white-text ml-4"></i>
                    </a>
                    <a href="#" class="fb-ic ml-0">
                        <i class="fa fa-facebook white-text ml-4"></i>
                    </a>
                    <a href="#" class="fb-ic ml-0">
                        <i class="fa fa-google white-text ml-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold"><strong>Our Company</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam consequatur dolore ipsum nisi vitae!</p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold"><strong>Products</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px">
                <p><a href="#">TESTBOOTSRTAP</a></p>
                <p><a href="#">TESTBOOTSRTAP</a></p>
                <p><a href="#">TESTBOOTSRTAP</a></p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold"><strong>Links</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px">
                <p><a href="#">Account</a></p>
                <p><a href="#">Help</a></p>
                <p><a href="#">TESTBOOTSRTAP</a></p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold"><strong>Contact</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px">
                <p><i class="fa fa-home mr-3"></i>Tashkent</p>
                <p><i class="fa fa-envelope mr-3"></i>asdasd@gmail.com</p>
                <p><i class="fa fa-phone mr-3"></i>9844654454</p>
            </div>
        </div>
    </div>
</footer>











</body>
</html>
