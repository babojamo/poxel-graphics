<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            @hasSection('title')
            @yield('title') | 
            @endif
            Poxel Graphics and Apparels Printing Services
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="@yield('meta-description', 'Offers quality and affordable Digital Printing, Dye Sublimation and Outdoor Signage.')">
        <meta name="keywords" content="@yield('meta-keywords', 'poxel graphics, poxel, apparel-and-printing, poxel digital printing')">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/uicons-solid-rounded.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

        @yield('header-imports')
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
                                        <a href="/"><img src="{{ asset('assets/img/logo/poxel_logo_bird.png') }}" alt=""></a>
                                    </div>
                                    <p>Connect with us through our social media account.</p>
                                    <ul class="footer-social">
                                        <li><a href="https://www.facebook.com/Poxelgraphicsandapparel"><i class="fab fa-facebook-f"></i></a></li>
                                        <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Useful Links</h4>
                                    <ul class="fw-links">

                                        <li><a href="/about-us#team" data-target="#team">Meet Our Team</a></li>
                                        <li><a href="/about-us#mission" data-target="#mission">Our Mission</a></li>
                                        <li><a href="/about-us#vision" data-target="#vision">Our Vision</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Privacy & Terms</a></li>
                                        <li><a href="{{ route('about.faq') }}">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Community</h4>
                                    <ul class="fw-links">
                                        <li><a href="{{ route('about.partners') }}">Loyal Customers</a></li>
                                        <li><a href="{{ route('about.contact') }}">Contact Us</a></li>
                                        <li><a href="{{ route('news') }}">News & Events</a></li>
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
                                    <p>All rights reserved © 2023 by <a href="#">Poxel Graphics and Apparels Printing Services</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="copyright-link-list">
                                    <li><a href="#">Privacy & Terms</a></li>
                                    <li><a href="{{ route('about.contact') }}">Contact Us</a></li>
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

        <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        @yield('footer-imports')
    </body>
</html>