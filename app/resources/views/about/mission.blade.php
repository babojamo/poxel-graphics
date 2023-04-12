@extends('layouts.app')

@section('content')
<section class="blog-details-area pt-180 pb-80">
    <div class="container">
        <div class="standard-blog-item blog-details-content">
            <div class="standard-blog-content">
                <div class="row">
                    <div class="col-6">
                        <h4 class="title text-center">Our Mission</h4>
                        <img src="{{ asset('assets/img/others/quality.png') }}" alt="">
                        
                        <p>
                            Our mission is to offer high-quality prints and high-value products aiming to provide total
                            satisfaction to the customers as well as comfort.
                        </p>
                    </div>

                    <div class="col-6">
                        <h4 class="title text-center">Our Vision</h4>
                        <p>Our vision is to be the top and leading provider of custom apparel, signages, and other
                            printing
                            services by empowering creative designs and high-quality products. Thus, building a long-
                            lasting
                            relationship and partnership with the customers through comfort and satisfaction.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
