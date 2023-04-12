<header>
    <div class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo"><a href="index.html"><img src="assets/img/logo/poxel_logo.png" alt=""></a>
                            </div>
                            <div class="header-form">
                                <form action="#">
                                    <button><i class="flaticon-search"></i></button>
                                    <input type="text" placeholder="Search Products">
                                </form>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active"><a href="/">Home</a></li>
                                    <li class="menu-item-has-children"><a href="#">Products & Services</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('products') }}">Products</a></li>
                                            <li><a href="{{ route('services') }}">Services</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="{{ route('news') }}">News</a></li>



                                    <li class="menu-item-has-children"><a href="#">About</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('about.contact') }}">Contact Us</a></li>
                                            <li><a href="{{ route('about.team') }}">Meet Our Team</a></li>
                                            <li><a href="{{ route('about.mission') }}">Our Mission</a></li>
                                            <li><a href="{{ route('about.vision') }}">Our Vision</a></li>
                                            <li><a href="{{ route('about.partners') }}">Loyal Partners</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="header-btn"><a href="{{ route('quotation') }}" class="btn">Get a Quote</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo"><a href="index.html"><img src="assets/img/logo/poxel_logo.png"
                                        alt=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>