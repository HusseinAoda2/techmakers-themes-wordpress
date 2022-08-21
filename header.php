<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title><?php bloginfo('name') ?></title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- 
        داله لعمل إنكلود على الثيم لملفات سي أس أس والجافا سكربت التي تأتي مع الإضافات
        وتكتب داخل الهد (head)
        -->
        <?php wp_head() ?>

        <!-- Favicons -->
        <link href="<?php echo get_theme_file_uri('assets/img/favicon.png') ?>" rel="icon">
        <link href="<?php echo get_theme_file_uri('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/cssfamily=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo get_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo get_theme_file_uri('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
        <link href="<?php echo get_theme_file_uri('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
        <link href="<?php echo get_theme_file_uri('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
        <link href="<?php echo get_theme_file_uri('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
        <link href="<?php echo get_theme_file_uri('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
        <link href="<?php echo get_theme_file_uri('assets/vendor/aos/aos.css') ?>" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?php echo get_theme_file_uri('assets/css/style.css') ?>" rel="stylesheet">
        <link href="<?php echo get_theme_file_uri('assets/css/TechStyle.css') ?>" rel="stylesheet">
    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top" >
            <div class="container d-flex align-items-center">
                <!-- <h1 class="logo mr-auto"><a href="index.html"> <img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/logo.png') ?>" class="custom-logo" alt="Tech makers"></a></h1>-->
                <a href="index.html" class="logo mr-auto"><img src="<?php echo get_theme_file_uri('assets/img/logo.png') ?>" alt="" class="img-fluid"></a>
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="drop-down"><a href="">language</a>
                            <ul>
                                <li><a href="#">English</a></li>
                                <li><a href="#">العربية</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- .nav-menu -->
                <a href="#cta" class="get-started-btn scrollto">Hire us</a>
            </div>
        </header>
        <!-- End Header -->

