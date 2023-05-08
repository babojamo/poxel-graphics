@extends('layouts.app')
@section('menu-about', 'active')
@section('title', 'Frequenly Asked Questions')

@section('meta-description', 'Frequenly Asked Question (FAQ)')
@section('meta-keyword', "Poxel graphics and printing services, Frequenly asked questions, printing, products")

@section('header-imports')
<link rel="stylesheet" href="assets/css/members.css">
<style>
    .login-welcome-content {
        width: unset !important;
        flex: unset !important;
    }
</style>
@endsection
@section('content')
<section class="pt-180 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="login-welcome-wrap">
                    <div class="login-welcome-content">
                        <h2 class="title poxel-title">Frequenly Asked Question (FAQ)</h2>
                        <p>Do you need help? <a href="{{ route('about.contact') }}">contact us.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="standard-blog-item mx-0 blog-details-content">
            <div class="standard-blog-content">

                <blockquote>
                    <h5>Q: What is Sublimation Printing?</h5>

                    <ul>
                        <li>- Also called dye sublimation print</li>
                        <li>- A digital printing technique that involves heat to dye transfer the design to a
                            material or fabric</li>
                    </ul>
                </blockquote>
                <blockquote>
                    <h5>Q: How to order?</h5>
                    By clicking the "Get a Quote" and filling out the details needed, you will get a
                    response on the details on the order
                    process.
                </blockquote>
                <blockquote>
                    <h5>Q: What are your services?</h5>
                    We offer sublimation printing, signage (indoor & outdoor), tarpaulin, sticker, and many
                    more.
                </blockquote>
                <blockquote>
                    <h5>Q: What are your mode of payments?</h5>
                    We accept payment through Cash, Gcash, Bank Transfer, Check or through Palawan.
                </blockquote>
            </div>
        </div>
    </div>
</section>


@endsection