<!doctype html>
<html lang="en">

<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 00:01:09 GMT -->

<head>
    <title>STAR TRAVELS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="<?= base_url('assets/images/favicon.png'); ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.4.1.min.css'); ?>">


    <!-- Sidebar Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jquery.mCustomScrollbar.min.css'); ?>">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css'); ?>">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" id="cpswitch" href="<?= base_url('assets/css/orange.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css'); ?>">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.css'); ?>">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/flexslider.css'); ?>" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="<?= base_url('assets/css/datepicker.css'); ?>">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css'); ?>">
    <!-- This page plugin CSS -->
    <link href="<?= base_url('assets/admin//assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css'); ?>"
        rel="stylesheet">

        
</head>


<body id="main-homepage">

    <div class="wrapper">
        <!--====== LOADER =====-->
        <!-- <div class="loader" ></div> -->

        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>178/708 Q
                                    Sharda Nagar Kanpur Nagar</li>
                                <li><span><i class="fa fa-phone"></i></span>+91 8874421137</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div id="info" class="mt-2" >
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">Website made by ❤ with Praduman Kushwaha </li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div id="links">
                            <ul class="list-unstyled list-inline mt-2">
                                <li class="list-inline-item"><a href="<?= base_url('Home/login'); ?>"><span><i
                                                class="fa fa-lock"></i></span>Login</a></li>
                                <li class="list-inline-item"><a href="<?= base_url('Home/registration'); ?>"><span><i
                                                class="fa fa-plus"></i></span>Sign Up</a></li>
                                <li class="list-inline-item"><a href="<?= base_url('AdminHome'); ?>"><span><i
                                                class="fa fa-lock"></i></span>Admin Login</a></li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->

        <!--                                         Main Navbar                                      -->
        <nav class="navbar navbar-expand-xl sticky-top navbar-custom main-navbar p-1" id="mynavbar-1">
            <div class="container">

                <a href="<?= base_url('Home/index'); ?>" class="navbar-brand py-1 m-0"><span><i
                            class="fa fa-plane"></i>STAR</span>TRAVELS</a>

                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation" id="sidebarCollapse">
                    <i class="fa fa-navicon py-1"></i>
                </button>

                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item">
                            <a href="<?= base_url('Home/index'); ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Home/about'); ?>" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Home/services'); ?>" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Home/tour_homepage'); ?>" class="nav-link">Tour</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="<?= base_url('Home/tour_booking_right_sidebar'); ?>" class="nav-link">Book Tour Now</a>
                        </li>  -->
                        <li class="nav-item">
                            <a href="<?= base_url('Home/team'); ?>" class="nav-link">Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Home/gallery'); ?>" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Home/contact'); ?>" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- End container -->
        </nav>
        <!--                                         Main Navbar  End                                    -->


        <!-- Sidebar Start -->

        <div class="sidenav-content">
            <!-- Sidebar  -->
            <nav id="sidebar" class="sidenav">
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

                <div id="main-menu">
                    <div id="dismiss">
                        <button class="btn" id="closebtn">&times;</button>
                    </div>
                    <div class="list-group panel">
                        <a href="<?= base_url('Home/index'); ?>" class="items-list" aria-expanded="false"><span><i
                                    class="fa fa-home link-icon"></i></span>Home</a>
                        <a class="items-list" href="<?= base_url('Home/about'); ?>"><span><i
                                    class="fa fa-plane link-icon"></i></span>About</a>
                        <a class="items-list" href="<?= base_url('Home/services'); ?>"><span><i
                                    class="fa fa-building link-icon"></i></span>Services</a>
                        <a class="items-list" href="<?= base_url('Home/tour_homepage'); ?>"><span><i
                                    class="fa fa-globe link-icon"></i></span>Tours</a>
                        <a class="items-list" href="<?= base_url('Home/team'); ?>"><span><i
                                    class="fa fa-ship link-icon"></i></span>Team</a>
                        <a class="items-list" href="<?= base_url('Home/gallery'); ?>"><span><i
                                    class="fa fa-ship link-icon"></i></span>Gallery</a>
                        <a class="items-list" href="<?= base_url('Home/contact'); ?>"><span><i
                                    class="fa fa-car link-icon"></i></span>Contact</a>
                    </div><!-- End list-group panel -->
                </div><!-- End main-menu -->
            </nav>
        </div><!-- End sidenav-content -->