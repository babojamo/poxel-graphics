@extends('layouts.app')

@section('header-imports')
<link rel="stylesheet" href="{{ asset('assets/css/product-gallery.css') }}">
@endsection

@section('content')
<div class="breadcrumb-area market-single-breadcrumb-area mt-110">
    <div class="breadcrumb-bg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="market-single-breadcrumb">
                    <div class="home-back-btn"><a href="index.html">go back to home</a></div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Services</a></li>
                            <li class="breadcrumb-item"><a href="index.html">{{ $product->service->name }}</a></li>

                            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- market-single-area -->
<section class="market-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3 product-gallery">
                        @for($i =0; $i<10; $i++)
                        <div class="product-preview">
                            <img src="{{ $product->main_image_url }}" alt="">
                        </div>
                        @endfor
                    </div>
                    <div class="col-9">
                        <div class="market-single-img">
                            <img src="{{ $product->main_image_url }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="market-single-top">
                    <div class="market-single-title-wrap">
                        <h2 class="title">{{ $product->name }}</h2>
                        <ul class="market-details-meta">
                            <li><a href="#">{{ $product->service->name }}</a></li>
                            <li class="wishlist">6 favorites</li>
                        </ul>
                    </div>
                </div>

                <div class="market-single-content">
                    {{!! $product->content !!}}
                </div>

                <a href="#" class="place-bid-btn">GET A QUOTATION</a>
            </div>
            <div class="col-lg-6">
                <div class="activity-table-responsive">
                    <table class="table activity-table">
                        <thead>
                            <tr>
                                <th scope="col" class="title">Description</th>
                                <th scope="col">Floor Price</th>
                                <th scope="col">Owners</th>
                                <th scope="col" class="time">Assets</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="author">
                                    <img src="assets/img/others/mp_activity_author01.png" alt=""> <a
                                        href="nft-marketplace.html">Trading Pet</a>
                                </th>
                                <td>+5486%</td>
                                <td>-965%</td>
                                <td>2,356 ETH</td>
                            </tr>
                            <tr>
                                <th scope="row" class="author">
                                    <img src="assets/img/others/mp_activity_author02.png" alt=""> <a
                                        href="nft-marketplace.html">Trading Craft</a>
                                </th>
                                <td>+5486%</td>
                                <td>-965%</td>
                                <td>2,356 ETH</td>
                            </tr>
                            <tr>
                                <th scope="row" class="author">
                                    <img src="assets/img/others/mp_activity_author03.png" alt=""> <a
                                        href="nft-marketplace.html">Trading Cards</a>
                                </th>
                                <td>+5486%</td>
                                <td>-965%</td>
                                <td>2,356 ETH</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bid-history-wrap">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="bid-tab" data-bs-toggle="tab" data-bs-target="#bid"
                                type="button" role="tab" aria-controls="bid" aria-selected="true">Bid History</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info"
                                type="button" role="tab" aria-controls="info" aria-selected="false">Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="provenance-tab" data-bs-toggle="tab"
                                data-bs-target="#provenance" type="button" role="tab" aria-controls="provenance"
                                aria-selected="false">Provenance</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="bid" role="tabpanel" aria-labelledby="bid-tab">
                            <div class="bid-history-overflow scroll">
                                <ul class="bid-history-list">
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="author-profile.html">Tomas lindahl</a>
                                                    </h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar02.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="author-profile.html">David Michels</a>
                                                    </h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar03.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="author-profile.html">Jonny Dev</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar04.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="author-profile.html">Tomas lindahl</a>
                                                    </h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar05.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="author-profile.html">Tomas Komai</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar06.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="author-profile.html">Tomas Harne</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="author-profile.html">Tomas lindahl</a>
                                                    </h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                            <div class="bid-history-overflow scroll">
                                <ul class="bid-history-list">
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar02.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar03.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar04.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar05.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar06.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar02.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="provenance" role="tabpanel" aria-labelledby="provenance-tab">
                            <div class="bid-history-overflow scroll">
                                <ul class="bid-history-list">
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar02.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar03.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar04.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar05.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar06.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bid-history-item">
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar.png"
                                                        alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                    <span>Bid listed</span>
                                                </div>
                                            </div>
                                            <div class="bid-history-info">
                                                <span>8 hours ago</span>
                                                <h6 class="title">25 ETH</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- market-single-area-end -->

<!-- top-collection-area -->
<section class="top-collection-area live-auctions-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title mb-40">
                    <h2 class="title">Live Auctions <img src="assets/img/icons/title_icon01.png" alt=""></h2>
                </div>
            </div>
        </div>
        <div class="row top-collection-active">
            <div class="col-xl-3">
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
            <div class="col-xl-3">
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
                        <a href="market-single.html"><img src="assets/img/others/top_collection02.jpg" alt=""></a>
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
            <div class="col-xl-3">
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
                        <a href="market-single.html"><img src="assets/img/others/top_collection03.jpg" alt=""></a>
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
            <div class="col-xl-3">
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
                        <a href="market-single.html"><img src="assets/img/others/top_collection04.jpg" alt=""></a>
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
            <div class="col-xl-3">
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
                        <h5 class="title"><a href="market-single.html">Drop Collection</a> <span class="price">5.4
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
@endsection
