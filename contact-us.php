<?php
$page = 'contact-us';
$title = 'Hybrid Resi | Contact Us';
include 'header.php' ?>

<!-- INNER PAGE BANNER -->
<div class="mobile-size sx-bnr-inr overlay-wraper bg-parallax"
    style="background-image:url(images/banner-images/apartments/stay.jpg);">
    <div class="overlay-main bg-black opacity-05"></div>
    <div class="container">
        <div class="sx-bnr-inr-entry">
            <!-- <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="m-tb0">Contact Us</h2>
                </div>
            </div> -->
            <!-- BREADCRUMB ROW -->

            <div>
                <ul class="sx-breadcrumb breadcrumb-style-2">
                    <li><a class="underline-transition text-thin-ice" href="index.php">Home</a></li>
                    <li>Contact Us </li>
                </ul>
            </div>

            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->

<!-- SECTION CONTENTG START -->
<div class="section-full p-tb80 inner-page-padding">
    <!-- LOCATION BLOCK-->
    <div class="container">

        <!-- GOOGLE MAP & CONTACT FORM -->
        <div class="section-content">
            <!-- CONTACT FORM-->
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <form class="contact-form cons-contact-form bg-gray p-a30" method="post" action="form-handler.php">
                        <div class="contact-one">

                            <!-- TITLE START -->
                            <div class="section-head">
                                <div class="sx-separator-outer separator-left">
                                    <div class="sx-separator bg-white bg-moving bg-repeat-x pattern-bg">
                                        <h3 class="sep-line-one">Contact Form</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- TITLE END -->

                            <div class="form-group">
                                <input name="username" type="text" required class="form-control" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <input name="number" type="text" class="form-control" required placeholder="Phone number">
                            </div>

                            <div class="form-group">
                                <input name="email" type="text" class="form-control" required placeholder="Email">
                            </div>

                            <div class="form-group">
                                <textarea name="message" rows="4" class="form-control " required
                                    placeholder="Message"></textarea>
                            </div>

                            <div class="text-right">
                                <button name="submit" type="submit" value="Submit" class="site-button btn-half"><span>
                                        submit</span>

                                </button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="contact-info block-shadow bg-white bg-center p-a40"
                        style="background-image:url(images/background/bg-map.png)">

                        <div>
                            <!-- TITLE START -->
                            <div class="section-head">
                                <div class="sx-separator-outer separator-left">
                                    <div class="sx-separator bg-white bg-moving bg-repeat-x pattern-bg">
                                        <h3 class="sep-line-one">Info</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- TITLE END -->
                            <div class="sx-icon-box-wraper left p-b30">
                                <div class="icon-xs"><i class="fa fa-phone"></i></div>
                                <div class="icon-content">
                                    <h5 class="m-t0">Phone number</h5>
                                    <p align="justify"><a class="font-mbold text-theme underline-transition "
                                            href="tel://+442034882904">+44 20 3488 2904</a></p>
                                </div>
                            </div>

                            <div class="sx-icon-box-wraper left p-b30">
                                <div class="icon-xs"><i class="fa fa-envelope"></i></div>
                                <div class="icon-content">
                                    <h5 class="m-t0">Email address</h5>
                                    <p align="justify"><a class="font-mbold text-theme underline-transition"
                                            href="mailto:info@hybridresi.com">info@hybridresi.com</a></p>
                                </div>
                            </div>

                            <div class="sx-icon-box-wraper left">
                                <div class="icon-xs"><i class="fa fa-map-marker"></i></div>
                                <div class="icon-content">
                                    <h5 class="m-t0">Office Address</h5>
                                    <p align="justify"><a class="font-mbold text-theme underline-transition" target="_blank"
                                            href="https://www.google.co.uk/maps/place/672+Fulham+Rd.,+London+SW6+5RX/@51.475456,-0.2089199,17z/data=!3m1!4b1!4m6!3m5!1s0x48760f9e89d3fb59:0xb20cc100d6e40985!8m2!3d51.4754527!4d-0.206345!16s%2Fg%2F11b8txkbxs?entry=ttu">672
                                            Fulham Road, London SW6 5RX, United Kingdom</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- SECTION CONTENT END -->


<?php include 'footer.php' ?>