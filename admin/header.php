<?php
include('../config/app.php');

if (!defined($_SESSION['authenticated'])) {
    $_SESSION['authenticated'] == false;
}
if ($_SESSION['authenticated'] == false) {
    redirect('', 'login.php');
}
if (isset($_POST['logout_btn'])) {
    if(isset($_SESSION['authenticated']) === TRUE){
        unset($_SESSION['authenticated']);
        unset($_SESSION['auth_user']);
        redirect("Logout successfully", "login.php");
    }
}
include('./handler/settingHandler.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php echo $showTitle; ?>
    </title>
    <!-- base:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-bar-rating/fontawesome-stars-o.css">
    <link rel="stylesheet" href="assets/vendors/jquery-bar-rating/fontawesome-stars.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="uploads/favicon.png" />
    <script src="https://cdn.tiny.cloud/1/nuwlel4l5xzbmz8bv1vqybnbrsixi4r5nb42uv9cw8zhqvn7/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
    <script>
    tinymce.init({
        selector:'#about',
        height: 500,
        codesample_languages: [
                {text: 'HTML/XML', value: 'markup'},
                {text: 'JavaScript', value: 'javascript'},
                {text: 'CSS', value: 'css'},
            ],
        });
    tinymce.init({
        selector:'#about1',
        height: 500,
        codesample_languages: [
                {text: 'HTML/XML', value: 'markup'},
                {text: 'JavaScript', value: 'javascript'},
                {text: 'CSS', value: 'css'},
            ],
        });

    tinymce.init({
        selector:'#about2',
        height: 500,
        codesample_languages: [
                {text: 'HTML/XML', value: 'markup'},
                {text: 'JavaScript', value: 'javascript'},
                {text: 'CSS', value: 'css'},
            ],
        });
        tinymce.init({
        selector:'#about3',
        height: 500,
        codesample_languages: [
                {text: 'HTML/XML', value: 'markup'},
                {text: 'JavaScript', value: 'javascript'},
                {text: 'CSS', value: 'css'},
            ],
        });
    </script> 
    
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" target="_blank" href="<?php echo '../index.php'?>">
                    <h2 style="font-size: 22px; color: white;">View Site</h2>
                </a>
                <a class="navbar-brand brand-logo-mini" target="_blank" href="<?php echo '../index.php'?>">
                    <h2>S</h2>
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item dropdown d-lg-flex d-none">
                        <form action="" method="post">
                            <button type="submit" name="logout_btn" class="btn btn-info font-weight-bold">Logout</button>
                        </form>
                    </li>

                    <li class="nav-item dropdown mr-4 d-lg-flex d-none">
                        <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="#">
                            <i class="icon-grid"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="user-profile">
                    <div class="user-image">
                        <img src="uploads/Author-image .jpg">
                    </div>
                    <div class="user-name">
                        Admin Panel
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo "index.php"; ?>">
                            <i class="icon-box menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#homepage" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-disc menu-icon"></i>
                            <span class="menu-title">Home Page</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="homepage">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "banner.php"; ?>">Banner Part</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "about-home.php"; ?>">About Part</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "calculate.php"; ?>">Calculate Part</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "steps-one.php"; ?>">Steps One</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "delivery.php"; ?>">Delivery Part</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "testimonial.php"; ?>">Testimonial Part</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "pricing.php"; ?>">Pricing Part</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "apps-ads.php"; ?>">Apps Advertise</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "steps-two.php"; ?>">Steps Two</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "contact-home.php"; ?>">Contact Part</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo "about.php"; ?>">
                            <i class="icon-box menu-icon"></i>
                            <span class="menu-title">About Page</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#services" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-disc menu-icon"></i>
                            <span class="menu-title">Service Page</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="services">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "services.php"; ?>">All Services</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "add-service.php"; ?>">Add New Service</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo "contact.php"; ?>">
                            <i class="icon-box menu-icon"></i>
                            <span class="menu-title">Contact Page</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo "privacy.php"; ?>">
                            <i class="icon-box menu-icon"></i>
                            <span class="menu-title">Privacy Page</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-disc menu-icon"></i>
                            <span class="menu-title">Site Settings</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="settings">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "settings.php"; ?>">General</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "topbar.php"; ?>">Site Header</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo "site-footer.php"; ?>">Site footer</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">