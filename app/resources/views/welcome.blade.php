- categories

- products - must have categories
- products can have images
- products can have portfolio or specs



@extends('layouts.app')
@section('content')
<div class="banner-bg">
    <!-- banner-area -->
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="banner-content">
                        <h2 style="display: flex; align-items: center; margin-bottom: 2rem;">Poxel</h2>
                        <h2 class="title poxel-title">Graphics and apparel printing services</h2>
                        <p>Offers quality and affordable Digital Printing, Dye Sublimation and Outdoor Signage.</p>
                        <a href="login-register.html" class="banner-btn">Products & Services <i
                                class="fi-sr-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img class="d-block w-100" src="assets/img/banner/banner_1.png" alt="First slide">
                            </div>
                            <div class="carousel-item" data-bs-interval="10000">
                                <img class="d-block w-100" src="assets/img/banner/banner_2.png" alt="Second slide">
                            </div>
                            <div class="carousel-item" data-bs-interval="10000">
                                <img class="d-block w-100" src="assets/img/banner/banner_3.png" alt="Third slide">
                            </div>
                            <div class="carousel-item" data-bs-interval="10000">
                                <img class="d-block w-100" src="assets/img/banner/banner_4.png" alt="Third slide">
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active">
                            </li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
                        </ol>
                    </div>

                </div>

            </div>


        </div>
    </div>
    <!-- banner-area-end -->
</div>

<div class="top-seller-area">

    <div class="container">
        <div class="top-seller-wrap">


            <div class="section-title mt-70 mb-40">
                <h2 class="title justify-content-center text-uppercase">Services Offered
                </h2>
            </div>



            <div class="category-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="category-list">
                                <li class="active"><a href="index.html">SUBLIMATION</a></li>
                                <li><a href="index.html">TARPAULIN</a></li>
                                <li><a href="index.html">ACRYLIC</a></li>
                                <li><a href="index.html">SIGNAGE</a></li>
                                <li><a href="index.html">STICKER</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

</div>

<section class="explore-products-area">
    <div class="container">
       
    <div class="section-title mb-35">
                    <h2 class="title justify-content-center poxel-title">Featured Products</h2>
                </div>

        <div class="filter-category-wrap">
            <div class="row">
                <div class="col-12">
                    <ul class="category-list">
                        <li class="active"><a href="index.html"><img src="assets/img/icons/cat_001.png" alt="">
                                All</a></li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_01.png" alt=""> Games</a>
                        </li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_02.png" alt=""> Art</a>
                        </li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_03.png" alt=""> Trading
                                Cards</a></li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_04.png" alt=""> Music</a>
                        </li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_05.png" alt=""> Domain
                                Names</a></li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_06.png" alt=""> Memes</a>
                        </li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_07.png" alt="">
                                Collectibles</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/hats.jpeg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Caps and Hats</a> <span class="price">600.00
                                Php</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/sleeves.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Arm Sleeve</a> <span class="price">600.00
                                Php</span>
                        </h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/hats.jpeg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Caps and Hats</a> <span class="price">600.00
                                Php</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/sleeves.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Arm Sleeve</a> <span class="price">600.00
                                Php</span>
                        </h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/hats.jpeg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Caps and Hats</a> <span class="price">600.00
                                Php</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/sleeves.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Arm Sleeve</a> <span class="price">600.00
                                Php</span>
                        </h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/hats.jpeg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Caps and Hats</a> <span class="price">600.00
                                Php</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/sleeves.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Arm Sleeve</a> <span class="price">600.00
                                Php</span>
                        </h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- explore-products-area -->
<section class="explore-products-area">
    <div class="container">
        <div class="row mb-35">
            <div class="col-md-7 col-sm-8">
                <div class="section-title">
                    <h2 class="title">Our Store Products <img src="assets/img/icons/title_icon01.png" alt=""></h2>
                </div>
            </div>
            <div class="col-md-5 col-sm-4">
                <div class="section-button text-end">
                    <a href="#" class="btn filter-btn filter-toggle"><i class="fi-sr-filter"></i> filter</a>
                </div>
            </div>
        </div>
        <div class="filter-category-wrap">
            <div class="row">
                <div class="col-12">
                    <ul class="category-list">
                        <li class="active"><a href="index.html"><img src="assets/img/icons/cat_001.png" alt="">
                                All</a></li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_01.png" alt=""> Games</a>
                        </li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_02.png" alt=""> Art</a>
                        </li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_03.png" alt=""> Trading
                                Cards</a></li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_04.png" alt=""> Music</a>
                        </li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_05.png" alt=""> Domain
                                Names</a></li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_06.png" alt=""> Memes</a>
                        </li>
                        <li><a href="nft-marketplace.html"><img src="assets/img/icons/cat_07.png" alt="">
                                Collectibles</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/hats.jpeg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Caps and Hats</a> <span class="price">600.00
                                Php</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/sleeves.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Arm Sleeve</a> <span class="price">600.00
                                Php</span>
                        </h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/hats.jpeg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Caps and Hats</a> <span class="price">600.00
                                Php</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/sleeves.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Arm Sleeve</a> <span class="price">600.00
                                Php</span>
                        </h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/hats.jpeg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Caps and Hats</a> <span class="price">600.00
                                Php</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/sleeves.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Arm Sleeve</a> <span class="price">600.00
                                Php</span>
                        </h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/hats.jpeg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Caps and Hats</a> <span class="price">600.00
                                Php</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/products/sleeves.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Arm Sleeve</a> <span class="price">600.00
                                Php</span>
                        </h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">Buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- explore-products-area-end -->

<!-- latest-news -->
<section class="latest-news-area">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="section-title mb-45">
                    <h2 class="title">Latest News Update <img src="assets/img/icons/title_icon01.png" alt=""></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6 col-sm-9">
                <div class="latest-news-item">
                    <div class="latest-news-thumb">
                        <img src="assets/img/blog/news_thumb01.png" alt="">
                    </div>
                    <div class="latest-news-content">
                        <ul class="latest-news-meta">
                            <li><i class="flaticon-user"></i><a href="blog.html">Admin</a></li>
                            <li><i class="fi-sr-calendar"></i> Jan 12, 2022</li>
                        </ul>
                        <h4 class="title"><a href="blog-details.html">Basketball League 2023</a></h4>
                        <a href="blog-details.html" class="btn">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-9">
                <div class="latest-news-item">
                    <div class="latest-news-thumb">
                        <img src="assets/img/blog/news_thumb02.png" alt="">
                    </div>
                    <div class="latest-news-content">
                        <ul class="latest-news-meta">
                            <li><i class="flaticon-user"></i><a href="blog.html">Admin</a></li>
                            <li><i class="fi-sr-calendar"></i> Jan 19, 2022</li>
                        </ul>
                        <h4 class="title"><a href="blog-details.html">First trial and run samples</a></h4>
                        <a href="blog-details.html" class="btn">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-9">
                <div class="latest-news-item">
                    <div class="latest-news-thumb">
                        <img src="assets/img/blog/news_thumb03.png" alt="">
                    </div>
                    <div class="latest-news-content">
                        <ul class="latest-news-meta">
                            <li><i class="flaticon-user"></i><a href="blog.html">Admin</a></li>
                            <li><i class="fi-sr-calendar"></i> Jan 19, 2022</li>
                        </ul>
                        <h4 class="title"><a href="blog-details.html">Crypto enthusiasts on a single platform to
                                create</a></h4>
                        <a href="blog-details.html" class="btn">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- latest-news-end -->

@endsection
