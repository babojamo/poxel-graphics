@extends('layouts.app')
@section('menu-about', 'active')

@section('meta-description', "We're grateful for every customer who has chosen and trusted us with our services, and we look forward to continuing to serve them for years to come.")
@section('meta-keyword', "Poxel graphics and printing services, loyal customers, printing, products")

@section('title', 'Loyal Customers')
@section('content')
<section class="blog-details-area pt-180 pb-80">
    <div class="container">
        <div class="standard-blog-item blog-details-content mx-0">
            <div class="standard-blog-content">
                <h2 class="title poxel-title text-center mb-30">Our Loyal Customers</h2>

                <p class="text-center">We're grateful for every customer who has chosen and trusted us with our services, and we look forward to continuing to serve them for years to come.</p>

                <div class="row gap-2 justify-content-center p-5" >
                    @foreach($customers as $customer)
                    <div class="col-xl-2 col-md-3 col-sm-6 mb-5 d-flex align-items-center justify-content-center" style="background: white; min-height: 13rem;">
                    <div>
                    <img style="width:95%" src="{{ $customer }}" alt="{{ $customer }}">

                    </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
