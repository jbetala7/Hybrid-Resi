<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META -->
    <script src="https://api.mews.com/distributor/distributor.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="Jayesh Betala" />
    <meta name="robots" content="" />
    <meta name="description" content="Book Luxury Serviced Apartments in London. Available for both short & long term corporate stays. Enjoy suites and furnished apartments with full kitchens and amenities." />


    <!-- FAVICONS ICON -->
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- PAGE TITLE HERE -->
    <title>
        <?php echo $title ?>
    </title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- CUSTOM STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!-- Price Range Slider -->
    <link rel="stylesheet" href="css/bootstrap-slider.min.css" />
    <!-- Color Theme Change Css -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css">


    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">

    <!-- BEFORE/AFTER ADD-ON FILES  MUST BE INSERTED AFTER THE SLIDER DOM ELEMENTS !-->
    <link rel='stylesheet' href='plugins/revolution-addons/beforeafter/css/revolution.addon.beforeafter.css'
        type='text/css' media='all' />

    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body>

    <div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-1 nav-wide mobile-sider-drawer-menu">
            <div class="top-bar bg-thin-ice">
                <div class="container">
                    <div class="d-flex justify-content-between ">
                        <ul class="list-unstyled e-p-bx text-theme">
                            <li><span>Send an e-mail:</span> <a class="underline-transition hover-change-theme text-theme" href="mailto:info@hybridresi.com">info@hybridresi.com</a></li>
                            <li><span>Call now:</span><a class="underline-transition hover-change-theme text-theme" href="tel://+442034882904">+44 20 3488 2904 </a></li>
                        </ul>
                        <ul class="list-unstyled social-bx text-theme d-flex flex-wrap align-content-center">
                            <li><a target="_blank" href="https://www.instagram.com/hybridresi/" class="fa fa-instagram"></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/HybridResi/" class="fa fa-facebook"></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/hybrid-resi" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar header-left-gray-block bg-thin-ice">
                    <div class="container clearfix">
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index.php">
                                    <img src="images/logo.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                        <!-- EXTRA NAV -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <div class="contact-slide-show"><a target="_blank" rel="nofollow" href="https://app.mews.com/distributor/63c1028b-e611-405d-bc62-af3500786b74" onClick="gtag('event', 'Book Now', { event_category: 'Book Now', event_action: 'Book Now'}); " class="get-in-touch-btn from-top">Book Now</a></div>
                            </div>
                        </div>
                        <!-- EXTRA Nav -->
                        <!-- MAIN NAVIGATION -->
                        <div class="header-nav nav-dark navbar-collapse collapse justify-content-center collapse">
                            <ul class=" nav navbar-nav">
                                <li class="<?php if ($page == 'home') {
                                                echo 'active';
                                            } ?>"><a href="index.php">Home</a>
                                </li>
                                <li class="<?php if ($page == 'about-us') {
                                                echo 'active';
                                            } ?>"><a href="about-us.php">About
                                        Us</a></li>
                                <li class="<?php if ($page == 'apartments') {
                                                echo 'active';
                                            } ?>">
                                    <a href="javascript:;">Our Apartments</a>
                                    <ul class="sub-menu">
                                        <li><a href="stay.php">Stay</a></li>
                                        <li><a href="work.php">Work</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'locations') {
                                                echo 'active';
                                            } ?>">
                                    <a href="javascript:;">Locations</a>
                                    <ul class="sub-menu">
                                        <li><a href="london.php">London</a></li>
                                        <li><a href="dubai.php">Dubai</a></li>
                                        <!-- <li><a href="canary-wharf.php">Canary Wharf</a></li>
                                        <li><a href="battersea.php">Battersea</a></li>
                                        <li><a href="sutton-cheam.php">Sutton Cheam</a></li>
                                        <li><a href="wandsworth.php">Wandsworth</a></li>
                                        <li><a href="fulham.php">Fulham</a></li>
                                        <li><a href="new-malden.php">New Malden</a></li>
                                        <li><a href="mitcham.php">Mitcham</a></li>
                                        <li><a href="uxbridge.php">Uxbridge</a></li> -->
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'offers') {
                                                echo 'active';
                                            } ?>"><a href="offers.php">Offers</a></li>
                                <li class="<?php if ($page == 'contact-us') {
                                                echo 'active';
                                            } ?>"><a href="contact-us.php">Contact Us</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content ">

            <div class="privacy-banner" style="border-top: 2px solid #004C86; display: none;">
                <div>
                    <p align="justify">
                        We use cookies to provide and improve our services. By using our site, you consent to cookies.
                        <a class="banner-accept" href="#" style="background: #004C86">Accept</a>
                        <a class="banner-learn" href="/terms/privacy-policy.html">Learn more</a>
                    </p>
                </div>
            </div>