@extends('layouts.app')

@section('meta-description', "Poxel graphics and apparel printing services offers high a quality {$product->name} products.")
@section('meta-keyword', "Poxel graphics and printing services, {$product->name}, printing, products")

@section('title', $product->name)
@section('header-imports')
<link rel="stylesheet" href="{{ asset('assets/css/product-gallery.css') }}">
<script>
    function resizeIframe(obj) {
        obj.style.height = (obj.contentWindow.document.documentElement.scrollHeight + 20) + 'px';
    }
</script>
@endsection

@section('content')
<div class="mx-0 pt-130 pb-90">
    <div class="breadcrumb-area market-single-breadcrumb-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="market-single-breadcrumb">
                        <div class="home-back-btn"><a href="/">go back to home</a></div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Services</a></li>
                                <li class="breadcrumb-item"><a href="{{  $product->service->slug_route }}"
                                        class="active">{{ $product->service->name }}</a></li>

                                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3 product-gallery">
                        @foreach($product->image_gallery as $image)
                        <div class="product-preview" style="cursor: pointer;">
                            <img class="image-gallery" src="{{ $image }}" alt="{{ $image }}">
                        </div>
                        @endforeach
                    </div>
                    <div class="col-9">
                        <div class="market-single-img">
                            <img id="main-image" src="{{ $product->main_image_url }}" alt="Product Highligh">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="market-single-top">
                    <div class="market-single-title-wrap">
                        <h2 class="title">{{ $product->name }}</h2>
                        <ul class="market-details-meta">
                            <li><a
                                    href="{{ $product->service->slug_route }}">{{ $product->service->name }}</a>
                            </li>
                            <li class="wishlist">6 favorites</li>
                        </ul>
                    </div>
                </div>

                <div style="color: white !important;" class="market-single-content">
                    <iframe src="{{ route('products.detail', $product->id) }}" frameborder="0" style="width: 100%;"
                        onload="resizeIframe(this)"></iframe>
                </div>

                <a href="{{ route('quotation') }}" class="place-bid-btn">GET A QUOTATION</a>
            </div>

        </div>
    </div>
</div>
@endsection

@section('footer-imports')
<link rel="stylesheet" href="{{ asset('assets/css/product-gallery.css') }}">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script>
    $(".image-gallery").on("click", function (evt) {
        $('#main-image')[0].setAttribute('src', evt.target.getAttribute('src'));
    });
    var temp_image = '';
    $(".image-gallery").on("mouseenter", function (evt) {
        temp_image = $('#main-image')[0].getAttribute('src');
        $('#main-image')[0].setAttribute('src', evt.target.getAttribute('src'));

    }).on("mouseleave", function () {
        $('#main-image')[0].setAttribute('src', temp_image);

    });
</script>
@endsection