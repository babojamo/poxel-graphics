@extends('layouts.app')
@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="breadcrumb-content text-center">
                    <h3 class="title">NFT Live Bidding</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- explore-products-area -->
<section class="inner-explore-products">
    <div class="container">
        <div class="explore-product-filter">
            <div class="section-title mb-45">
                <h2 class="title">Live Bidding <img src="assets/img/icons/title_icon01.png" alt=""></h2>
            </div>
            <div class="filter-wrap">
                <form action="#">
                    <div class="filter-item">
                        <label class="title">FILTER BY:</label>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="button"></span>
                        </label>
                    </div>
                    <div class="filter-item">
                        <label class="title">Has list price:</label>
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="button"></span>
                        </label>
                    </div>
                    <div class="filter-item">
                        <label class="title">Has open offer</label>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="button"></span>
                        </label>
                    </div>
                    <div class="filter-item">
                        <label class="title">Owned by creator</label>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="button"></span>
                        </label>
                    </div>
                    <div class="filter-item">
                        <label class="title">Has sold</label>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="button"></span>
                        </label>
                    </div>
                    <button class="btn filter-btn"><i class="fi-sr-filter"></i> filter</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-top">
                        <ul>
                            <li class="avatar"><a href="author-profile.html" class="thumb"><img
                                        src="assets/img/others/top_col_avatar.png" alt=""></a>By <a
                                    href="author-profile.html" class="name">Jonson</a></li>
                            <li class="info-dots dropdown">
                                <span></span>
                                <span></span>
                                <span></span>
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="nft-marketplace.html">Artwork</a></li>
                                    <li><a href="nft-marketplace.html">Action</a></li>
                                    <li><a href="nft-marketplace.html">Author Action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/others/top_collection01.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">NFT Collection</a> <span class="price">5.4
                                ETH</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">place a bid</a></li>
                            <li class="wishlist"><a href="#">59</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-top">
                        <ul>
                            <li class="avatar"><a href="author-profile.html" class="thumb"><img
                                        src="assets/img/others/top_col_avatar.png" alt=""></a>By <a
                                    href="author-profile.html" class="name">Jonson</a></li>
                            <li class="info-dots dropdown">
                                <span></span>
                                <span></span>
                                <span></span>
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="nft-marketplace.html">Artwork</a></li>
                                    <li><a href="nft-marketplace.html">Action</a></li>
                                    <li><a href="nft-marketplace.html">Author Action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/others/top_collection05.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Pie Collection</a> <span class="price">5.4
                                ETH</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">place a bid</a></li>
                            <li class="wishlist"><a href="#">59</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-top">
                        <ul>
                            <li class="avatar"><a href="author-profile.html" class="thumb"><img
                                        src="assets/img/others/top_col_avatar.png" alt=""></a>By <a
                                    href="author-profile.html" class="name">Jonson</a></li>
                            <li class="info-dots dropdown">
                                <span></span>
                                <span></span>
                                <span></span>
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="nft-marketplace.html">Artwork</a></li>
                                    <li><a href="nft-marketplace.html">Action</a></li>
                                    <li><a href="nft-marketplace.html">Author Action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/others/top_collection06.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Craft Collection</a> <span class="price">5.4
                                ETH</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">place a bid</a></li>
                            <li class="wishlist"><a href="#">59</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-top">
                        <ul>
                            <li class="avatar"><a href="author-profile.html" class="thumb"><img
                                        src="assets/img/others/top_col_avatar.png" alt=""></a>By <a
                                    href="author-profile.html" class="name">Jonson</a></li>
                            <li class="info-dots dropdown">
                                <span></span>
                                <span></span>
                                <span></span>
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="nft-marketplace.html">Artwork</a></li>
                                    <li><a href="nft-marketplace.html">Action</a></li>
                                    <li><a href="nft-marketplace.html">Author Action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/others/top_collection07.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Artwork Collection</a> <span class="price">5.4
                                ETH</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">place a bid</a></li>
                            <li class="wishlist"><a href="#">59</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-top">
                        <ul>
                            <li class="avatar"><a href="author-profile.html" class="thumb"><img
                                        src="assets/img/others/top_col_avatar.png" alt=""></a>By <a
                                    href="author-profile.html" class="name">Jonson</a></li>
                            <li class="info-dots dropdown">
                                <span></span>
                                <span></span>
                                <span></span>
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="nft-marketplace.html">Artwork</a></li>
                                    <li><a href="nft-marketplace.html">Action</a></li>
                                    <li><a href="nft-marketplace.html">Author Action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/others/top_collection08.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">NFT Collection</a> <span class="price">5.4
                                ETH</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">place a bid</a></li>
                            <li class="wishlist"><a href="#">59</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-top">
                        <ul>
                            <li class="avatar"><a href="author-profile.html" class="thumb"><img
                                        src="assets/img/others/top_col_avatar.png" alt=""></a>By <a
                                    href="author-profile.html" class="name">Jonson</a></li>
                            <li class="info-dots dropdown">
                                <span></span>
                                <span></span>
                                <span></span>
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="nft-marketplace.html">Artwork</a></li>
                                    <li><a href="nft-marketplace.html">Action</a></li>
                                    <li><a href="nft-marketplace.html">Author Action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/others/top_collection09.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Pet Collection</a> <span class="price">5.4
                                ETH</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">place a bid</a></li>
                            <li class="wishlist"><a href="#">59</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-top">
                        <ul>
                            <li class="avatar"><a href="author-profile.html" class="thumb"><img
                                        src="assets/img/others/top_col_avatar.png" alt=""></a>By <a
                                    href="author-profile.html" class="name">Jonson</a></li>
                            <li class="info-dots dropdown">
                                <span></span>
                                <span></span>
                                <span></span>
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="nft-marketplace.html">Artwork</a></li>
                                    <li><a href="nft-marketplace.html">Action</a></li>
                                    <li><a href="nft-marketplace.html">Author Action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/others/top_collection10.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">NFT Collection</a> <span class="price">5.4
                                ETH</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">place a bid</a></li>
                            <li class="wishlist"><a href="#">59</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="top-collection-item">
                    <div class="collection-item-top">
                        <ul>
                            <li class="avatar"><a href="author-profile.html" class="thumb"><img
                                        src="assets/img/others/top_col_avatar.png" alt=""></a>By <a
                                    href="author-profile.html" class="name">Jonson</a></li>
                            <li class="info-dots dropdown">
                                <span></span>
                                <span></span>
                                <span></span>
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="nft-marketplace.html">Artwork</a></li>
                                    <li><a href="nft-marketplace.html">Action</a></li>
                                    <li><a href="nft-marketplace.html">Author Action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="collection-item-thumb">
                        <a href="market-single.html"><img src="assets/img/others/top_collection11.jpg" alt=""></a>
                    </div>
                    <div class="collection-item-content">
                        <h5 class="title"><a href="market-single.html">Action Collection</a> <span class="price">5.4
                                ETH</span></h5>
                    </div>
                    <div class="collection-item-bottom">
                        <ul>
                            <li class="bid"><a href="market-single.html" class="btn">place a bid</a></li>
                            <li class="wishlist"><a href="#">59</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- explore-products-area-end -->



@endsection
