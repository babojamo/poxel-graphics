@extends('layouts.app')
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
                                <li class="breadcrumb-item"><a href="{{ route('services.view', $product->service_id) }}" class="active">{{ $product->service->name }}</a></li>

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
                        <li><a href="{{ route('services.view', $product->service_id) }}">{{ $product->service->name }}</a></li>
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

<section class="market-single-area">


</section>
<!-- market-single-area-end -->

@endsection
