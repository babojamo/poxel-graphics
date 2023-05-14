<header>
    <div class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo"><a href="/"><img src="{{ asset('assets/img/logo/poxel_logo.png') }}" alt=""></a>
                            </div>
                            <div class="header-form">
                                <form action="{{ route('products') }}">
                                    <button><i class="flaticon-search"></i></button>
                                    <input type="text" name="pk" value="{{ request('pk') }}" placeholder="Search Products">
                                </form>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="@yield('menu-home')"><a href="/">Home</a></li>
                                    <li class="menu-item-has-children @yield('menu-product')"><a href="{{ route('products') }}">Products & Services</a>
                                        <ul class="submenu">
                                            @foreach($service_menu as $menu)
                                            <li><a href="{{ $menu->slug_route }}">{{ $menu->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="@yield('menu-news')"><a href="{{ route('news') }}">News</a></li>
                                    <li class="menu-item-has-children @yield('menu-about')"><a href="#">About</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('about.aboutus') }}">Who we are</a></li>
                                            <li><a href="{{ route('about.partners') }}">Loyal Customers</a></li>
                                            <li><a href="{{ route('about.contact') }}">Contact Us</a></li>
                                            <li><a href="{{ route('about.faq') }}">FAQ</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="header-btn"><a href="{{ route('quotation') }}" class="btn">Get a
                                            Quote</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/img/logo/poxel_logo.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="header-action mt-4">
                                <ul class="justify-content-center">
                                    <li class="header-btn"><a href="{{ route('quotation') }}" class="btn">Get a
                                            Quote</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="https://www.facebook.com/Poxelgraphicsandapparel"><span class="fab fa-facebook-f"></span></a></li>
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