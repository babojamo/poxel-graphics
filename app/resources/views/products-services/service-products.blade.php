@extends('layouts.app')

@section('title', $service->name)

@section('meta-description', "Poxel graphics and apparel printing services offers high a quality {$service->name} products.")
@section('meta-keyword', "Poxel graphics and printing services, {$service->name}, printing, products")

@section('header-imports')
<link rel="stylesheet" href="{{ asset('assets/css/product-overlay.css') }}">
@endsection

@section('content')
<section class="mx-0 pt-180 pb-80">
    <div class="container">
        <div class="explore-product-filter">
            <div class="section-title mb-45">
                <h2 class="title">{{ $service->name }}</h2>
                <p>Showing {{ $service->products->count() }} results under {{ strtolower($service->name) }}</p>
            </div>
        </div>
        <div class="row gap-2 justify-content-center">
            @foreach($service->products as $product)
            <div class="col-3">
                <div class="product-listing">
                    <div class="main-image">
                        <span class="category">{{ $service->name }}</span>
                        <img src="{{ $product->main_image_url }}" alt="{{ $product->name }}" class="image">
                    </div>
                    <div class="product-footer">
                        <div class="product-name">
                            <h2>{{ $product->name }}</h2>
                        </div>
                        <a href="{{ $product->slug_route }}" class="btn-outline ml-auto" tabindex="0">View
                            Product</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
