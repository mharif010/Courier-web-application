<?php
include('config/app.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/handler/settingHandler.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/handler/topbarHandler.php');

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo $showTitle; ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- endinject -->
    <link rel="shortcut icon" href="./admin/uploads/favicon.png" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
    <!-- Fonts Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/elegant.css">
    <!-- OwlCarousel2 Slider Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

    <link href="https://www.dafontfree.net/embed/YXJjb24tcmVndWxhciZkYXRhLzE2L2EvNzc3NzUvQXJjb24tUmVndWxhci5vdGY" rel="stylesheet" type="text/css"/>
    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- Main Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">

    <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
</head>

<body id="home">
    <!-- Preloader -->
    <div id="preloader">

        <div class="small1">
            <div class="small ball smallball1"></div>
            <div class="small ball smallball2"></div>
            <div class="small ball smallball3"></div>
            <div class="small ball smallball4"></div>
        </div>


        <div class="small2">
            <div class="small ball smallball5"></div>
            <div class="small ball smallball6"></div>
            <div class="small ball smallball7"></div>
            <div class="small ball smallball8"></div>
        </div>

        <div class="bigcon">
            <div class="big ball"></div>
        </div>

    </div>
    <!-- /.Preloader -->


    <!-- Main Wrapper -->
    <main class="wrapper">

        <!-- Header -->
        <header class="header-main">

            <!-- Header Topbar -->
            <div class="top-bar font2-title1 white-clr" style="background-image: url('./admin/uploads/<?php echo $showTopBg; ?>');">
                <div class="theme-container container">
                    <div class="row">
                        <div class="col-md-6 col-sm-5">
                            <ul class="list-items fs-10">
                                <li><a href="sitemap.php">sitemap</a></li>
                                <li class="active"><a href="privacy.php">Privacy</a></li>
                                <li><a href="#">Pricing</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-7 fs-12">
                            <p class="contact-num"> <i class="fa fa-phone"></i> Call us now: <span class="theme-clr"> <?php echo $showPhone; ?> </span> </p>
                        </div>
                    </div>
                </div>
                <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg"> Register Now </a>
            </div>
            <!-- /.Header Topbar -->

            <!-- Header Logo & Navigation -->
            <nav class="menu-bar font2-title1">
                <div class="theme-container container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-logo" href=""> <img src="./admin/uploads/<?php echo $showlogo; ?>" alt="logo" /> </a>
                        </div>
                        <div class="col-md-10 col-sm-10 fs-12">
                            <div id="navbar" class="collapse navbar-collapse no-pad">
                                <ul class="navbar-nav theme-menu">
                                    <li class="dropdown active">
                                        <a href="">Home </a>
                                    </li>
                                    <li> <a href="/about.php"> About </a> </li>
                                    <li> <a href="/tracking.php"> Tracking </a> </li>
                                    <li> <a href="/services.php"> Services </a> </li>
                                    <li> <a href="/contact.php"> Contact </a> </li>
                                    <li>
                                        <div class="search-wrapper">
                                            <div class="input-holder">
                                                <input type="text" class="search-input" placeholder="Type to search" />
                                                <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                                            </div>
                                            <span class="close" onclick="searchToggle(this, event);"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- /.Header Logo & Navigation -->

        </header>
        <!-- /.Header -->