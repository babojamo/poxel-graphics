<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Poxel Printing and Apparel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/uicons-solid-rounded.css">
        <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/custom.css">
    </head>
    <body>

        <!-- preloader -->
        <x-base.preloader/>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->



        <!-- Offcanvas-area -->
        <div class="offcanvas-wrapper">
            <div class="menu-trigger"><i class="fi-sr-angle-small-left"></i></div>
            <div class="menu-close"><i class="fi-sr-angle-small-right"></i></div>
            <div class="offcanvas-inner scroll">
                <div class="author-profile text-center mb-30">
                    <div class="author-img">
                        <img src="assets/img/others/author_img.png" alt="">
                    </div>
                    <div class="author-content">
                        <h4 class="title">Author Profile</h4>
                        <p>Super Author</p>
                        <a href="login-register.html" class="btn">Checkout</a>
                    </div>
                </div>
                <div class="sidebar-slider text-center mb-25">
                    <div class="sidebar-active">
                        <div class="sidebar-img">
                            <a href="market-single.html"><img src="assets/img/others/sidebar_img01.png" alt=""></a>
                        </div>
                        <div class="sidebar-img">
                            <a href="market-single.html"><img src="assets/img/others/sidebar_img02.png" alt=""></a>
                        </div>
                        <div class="sidebar-img">
                            <a href="market-single.html"><img src="assets/img/others/sidebar_img03.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="overview">
                    <div class="overview-title">
                        <h4 class="title">Overview</h4>
                    </div>
                    <div class="overview-item-wrap">
                        <div class="overview-item">
                            <div class="overview-icon">
                                <i class="fi-sr-box-alt"></i>
                            </div>
                            <div class="overview-content">
                                <h4 class="title">Open project</h4>
                                <span>820</span>
                            </div>
                            <a href="nft-marketplace.html"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                        <div class="overview-item">
                            <div class="overview-icon">
                                <i class="fi-sr-mountains"></i>
                            </div>
                            <div class="overview-content">
                                <h4 class="title">Successful Completed</h4>
                                <span>546</span>
                            </div>
                            <a href="nft-marketplace.html"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                        <div class="overview-item">
                            <div class="overview-icon">
                                <i class=" fi-sr-hourglass-end"></i>
                            </div>
                            <div class="overview-content">
                                <h4 class="title">trending</h4>
                                <span>32</span>
                            </div>
                            <a href="nft-marketplace.html"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- Offcanvas-area-end -->

        <!-- main-content -->
        <div class="main-content">
            <!-- header-area -->
            <x-base.header/>
            <!-- header-area-end -->

            <!-- main-area -->
            <main>
            @yield('content')
            </main>  
            <!-- main-area-end -->
            
            <!-- footer-area -->
            <footer>
                <div class="footer-top-wrap">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-9">
                                <div class="footer-widget">
                                    <div class="footer-logo mb-25">
                                        <a href="index.html"><img src="assets/img/logo/poxel_logo_bird.png" alt=""></a>
                                    </div>
                                    <p>Connect with us through our socila media accounts.</p>
                                    <ul class="footer-social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Useful Links</h4>
                                    <ul class="fw-links">

                                        <li><a href="nft-marketplace.html">Meet Our Team</a></li>
                                        <li><a href="login-register.html">Our Mission</a></li>
                                        <li><a href="create-item.html">Our Vission</a></li>
                                        <li><a href="nft-marketplace.html">Services</a></li>
                                        <li><a href="login-register.html">Privacy & Terms</a></li>
                                        <li><a href="login-register.html">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Community</h4>
                                    <ul class="fw-links">
                                        <li><a href="login-register.html">Loyal Partners</a></li>
                                        <li><a href="login-register.html">Contact Us</a></li>
                                        <li><a href="blog.html">News & Events</a></li>
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="copyright-wrap">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="copyright-text">
                                    <p>All rights reserved © 2023 by <a href="#">Poxel Graphics and Apparel Printing Services</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="copyright-link-list">
                                    <li><a href="login-register.html">Privacy Policy</a></li>
                                    <li><a href="login-register.html">Terms And Condition</a></li>
                                    <li><a href="login-register.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer-area-end -->

        </div>
        <!-- main-content-end -->



		<!-- JS here -->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>