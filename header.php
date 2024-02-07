<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="Jayesh Betala" />
    <meta name="robots" content="" />
    <meta name="description"
        content="Book Luxury Serviced Apartments in London. Available for both short & long term corporate stays. Enjoy suites and furnished apartments with full kitchens and amenities." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <?php echo $title?>
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



</head>

<body>

    <div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-1 nav-wide mobile-sider-drawer-menu">
            <div class="top-bar bg-thin-ice">
                <div class="container">
                    <div class="d-flex justify-content-between ">
                        <ul class="list-unstyled e-p-bx text-theme">
                            <li><span>Send an e-mail:</span> <a
                                    class="underline-transition hover-change-theme text-theme"
                                    href="mailto:info@hybridresi.com">info@hybridresi.com</a></li>
                            <li><span>Call now:</span><a class="underline-transition hover-change-theme text-theme"
                                    href="tel://+442034882904">+44 20 3488 2904 </a></li>
                        </ul>
                        <ul class="list-unstyled social-bx text-theme d-flex flex-wrap align-content-center">
                            <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar header-left-gray-block bg-thin-ice">
                    <div class="container clearfix">
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index.html">
                                    <img src="images/logo-1.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                        <!-- EXTRA NAV -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <div class="contact-slide-show"><a href="javascript:;"
                                        class="get-in-touch-btn from-top">Get in touch</a></div>
                            </div>
                        </div>
                        <!-- EXTRA Nav -->
                        <!-- MAIN NAVIGATION -->
                        <div class="header-nav nav-dark navbar-collapse collapse justify-content-center collapse">
                            <ul class=" nav navbar-nav">
                                <li class="<?php if($page == 'home'){echo 'active';}?>"><a href="index.php">Home</a></li>
                                <li class="<?php if($page == 'about-us'){echo 'active';}?>"><a href="about-us.php">About Us</a></li>
                                <li class="<?php if($page == 'apartments'){echo 'active';}?>">
                                    <a href="javascript:;">The Apartments</a>
                                    <ul class="sub-menu">
                                        <li><a href="canary-wharf.php">Canary Wharf</a></li>
                                        <li><a href="battersea.php">Battersea</a></li>
                                        <li><a href="cheam-sutton.php">Cheam - Sutton</a></li>
                                        <li><a href="wandsworth.php">Wandsworth</a></li>
                                        <li><a href="fulham.php">Fulham</a></li>
                                        <li><a href="new-malden.php">New Malden</a></li>
                                        <li><a href="mitcham.php">Mitcham</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if($page == 'neighbourhood'){echo 'active';}?>"><a href="neighbourhood.html">Neighbourhood</a></li>
                                <li class="<?php if($page == 'offers'){echo 'active';}?>"><a href="offers.html">Offers</a></li>

                            </ul>
                        </div>

                        <!-- CONTACT -->
                        <div class="contact-slide-hide" style="background-image:url(images/background/bg-map.png)">
                            <div class="contact-nav">
                                <a href="javascript:void(0)" class="contact_close">&times;</a>
                                <div class="contact-nav-form">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12">

                                            <div class=" contact-nav-info">

                                                <div class="sx-icon-box-wraper left p-b30">
                                                    <div class="icon-xs inline-icon m-b20 scale-in-center"><i
                                                            class="fa fa-phone"></i></div>
                                                    <div class="icon-content">
                                                        <h6 class="m-t0">Phone number</h6>
                                                        <a class="underline-transition text-theme"
                                                            href="tel://+442034882904">+44 20 3488 2904</a>
                                                    </div>
                                                </div>

                                                <div class="sx-icon-box-wraper left p-b30">
                                                    <div class="icon-xs inline-icon m-b20 scale-in-center"><i
                                                            class="fa fa-envelope"></i></div>
                                                    <div class="icon-content">
                                                        <h6 class="m-t0">Email address</h6>
                                                        <a class="underline-transition text-theme"
                                                            href="mailto: info@hybridresi.com"> info@hybridresi.com</a>
                                                    </div>
                                                </div>

                                                <div class="sx-icon-box-wraper left p-b30">
                                                    <div class="icon-xs inline-icon m-b20 scale-in-center"><i
                                                            class="fa fa-map-marker"></i></div>
                                                    <div class="icon-content">
                                                        <h6 class="m-t0">Address info</h6>
                                                        <a class="underline-transition text-theme" target="_blank"
                                                            href="hhttps://www.google.com/maps/place/673,+784+Fulham+Rd.,+London+SW6+5SL/data=!4m2!3m1!1s0x48760f754fa5c9db:0x8c6583d5433b5598?sa=X&ved=2ahUKEwin8s6umZWEAxWNWEEAHbDPAKAQ8gF6BAgbEAA">672,
                                                            784 Fulham Rd., London SW6 5SJ, United Kingdom </a>
                                                    </div>
                                                </div>

                                                <div class="full-social-bg">
                                                    <ul>
                                                        <li><a href="#" class="facebook"><i
                                                                    class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="google"><i class="fa fa-google"></i></a>
                                                        </li>
                                                        <li><a href="#" class="instagram"><i
                                                                    class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a>
                                                        </li>
                                                        <li><a href="#" class="twitter"><i
                                                                    class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="youtube"><i
                                                                    class="fa fa-youtube"></i></a></li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-xl-6 col-lg-6 col-md-12 ">
                                            <div class="contact-nav-field shadow-lg p-a30 bg-white"
                                                style="background-image:url(images/background/bg-map.png)">
                                                <form class="cons-contact-form2 form-transparent" method="post"
                                                    action="form-handler2.php">

                                                    <div class="input input-animate">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="username" id="name" required>
                                                        <span class="spin"></span>
                                                    </div>

                                                    <div class="input input-animate">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" id="email" required>
                                                        <span class="spin"></span>
                                                    </div>

                                                    <div class="input input-animate">
                                                        <label for="Phone">Phone</label>
                                                        <input type="text" name="phone" id="Phone" required>
                                                        <span class="spin"></span>
                                                    </div>

                                                    <div class="input input-animate">
                                                        <label for="message">Textarea</label>
                                                        <textarea name="message" id="message" required></textarea>
                                                        <span class="spin"></span>
                                                    </div>

                                                    <div class="text-left p-t10">
                                                        <button type="submit" class="site-button-secondry btn-half ">
                                                            <span> Submit Now</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content ">