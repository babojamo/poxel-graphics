@extends('layouts.app')

@section('meta-description')
At Poxel Graphics and Apparel Services, we strive to provide the highest level of customer service to all of our valued clients. Whether you have a question about our products, need assistance with an order, or just want to provide feedback, our friendly and knowledgeable customer service team is here to help. Talk to us!
@endsection
@section('meta-keyword', "Poxel graphics and printing services, contact us, printing, products")

@section('menu-about', 'active')
@section('title', 'Contact us')
@section('header-imports')
<style>
    .login-welcome-content {
        width: unset !important;
        flex: unset !important;
    }
</style>
@endsection
@section('content')
<section class="blog-details-area pt-180 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="login-welcome-wrap">
                    <div class="login-welcome-content">
                        <h2 class="title poxel-title">Contact Us</h2>
                        <p>At Poxel Graphics and Apparel Services, we strive to provide the highest level of customer
                            service to all of our valued clients. Whether you have a question about our products, need
                            assistance with an order, or just want to provide feedback, our friendly and knowledgeable
                            customer service team is here to help. <a href="#talk-to-us">Talk to us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="standard-blog-item blog-details-content">
            <div class="standard-blog-content">
                <div class="row mb-90">
                    <div class="col-12">

                        <div class="row">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4 id="talk-to-us" class="mb-40 text-center">Talk to us</h4>
                                <div class="d-flex justify-content-center">
                                    <ul>
                                        <li class="mb-20">
                                            <div class="d-flex flex-row align-items-center">
                                                <div class="mx-3">
                                                    <img style="max-width: 30px;"
                                                        src="{{ asset('assets/img/others/smartphone.png') }}"
                                                        alt="Facebook page">
                                                </div>
                                                <p class="m-0">0935 931 6851 | 0926 298 7574</p>
                                            </div>
                                        </li>
                                        <li class="mb-20">
                                            <div class="d-flex flex-row align-items-center">
                                                <div class="mx-3">
                                                    <img style="max-width: 30px;"
                                                        src="{{ asset('assets/img/others/telephone.png') }}"
                                                        alt="Facebook page">
                                                </div>
                                                <p class="m-0">(032) 888-0827</p>
                                            </div>
                                        </li>
                                        <li class="mb-20">
                                            <div class="d-flex flex-row align-items-center">
                                                <div class="mx-3">
                                                    <img style="max-width: 30px;"
                                                        src="{{ asset('assets/img/others/email.png') }}"
                                                        alt="Facebook page">
                                                </div>
                                                <p class="m-0">sales@poxelgraphics.com</p>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12 text-center">
                                <h4 class="mb-40">Social Media</h4>
                                <div class="mb-30">
                                    <a target="_blank" href="https://www.facebook.com/Poxelgraphicsandapparel">
                                        <img style="max-width: 80px;"
                                            src="{{ asset('assets/img/others/facebook.png') }}" alt="Facebook page">
                                    </a>
                                </div>
                                <p>Just send us your questions by connecting and following us with our social media
                                    account.</p>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12 text-center">
                                <h4 class="mb-40">Ask for Quotation</h4>
                                <a href="http://localhost:8000/quotation" href="#" class="btn">Get a
                                    Quote</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-90">
                    <div class="col-12">
                        <h2 class="title text-center poxel-title ">Our Location</h2>
                        <div class="d-flex justify-content-center mb-20">
                            <div class="mx-3">
                                <img style="max-width: 20px;" src="{{ asset('assets/img/others/place.png') }}"
                                    alt="Facebook page">
                            </div>
                            <p class="m-0">M.L.Quezon Ave, Lapu-Lapu City, Cebu, Lapu-Lapu City, Philippines</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="770" height="510" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=poxel graphics and apparels&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                        href="https://2yu.co">2yu</a><br>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 510px;
                                            width: 770px;
                                        }
                                    </style><a href="https://embedgooglemap.2yu.co">html embed google map</a>
                                    <style>
                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 510px;
                                            width: 770px;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
