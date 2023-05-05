@extends('layouts.app')
@section('header-imports')
<link rel="stylesheet" href="{{ asset('assets/css/product-overlay.css') }}">
@endsection

@section('content')
<section class="mx-0 pt-180 pb-80">
    <div class="container">
        <div class="explore-product-filter">
            <div class="section-title mb-45">
                <h2 class="title">All Products</h2>
                <p>Showing {{ $products->count() }} results</p>
            </div>
        </div>
        <div class="row gap-2 justify-content-center">
            @if($products->count() <= 0)
                <div class="mt-80 mb-50">
                    <h2 class="title poxel-title text-center mb-30">Sorry no results found</h2>
                    <p class="text-center"><a href="/" class="btn-outline">Back to home</a></p>
                </div>
            @endif
            @foreach($products as $product)
            <div class="col-3">
                <div class="product-listing">
                    <div class="main-image">
                        <span class="category">{{ $product->service->name }}</span>
                        <img src="{{ $product->main_image_url }}" alt="{{ $product->name }}" class="image">
                    </div>
                    <div class="product-footer">
                        <div class="product-name">
                            <h2>{{ $product->name }}</h2>
                        </div>
                        <a href="{{ route('products.view', $product->id) }}" class="btn-outline ml-auto" tabindex="0">View
                            Product</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
