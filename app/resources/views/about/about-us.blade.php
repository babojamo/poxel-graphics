@extends('layouts.app')
@section('menu-about', 'active')
@section('title', 'Who we are')

@section('meta-description')
Established in 2017, Poxel Graphics and Apparels Printing Services started as Ace Printing Services. Providing customers with sticker and tarpaulin printing services.
In 2020, Ace Printing Services became Poxel Graphics and Apparels Printing Services.
Despite the challenges faced during the Covid-19 pandemic, Poxel Graphics
courageously fought and continued its operations.
Now also offering custom apparel and sublimation printing services, Poxel Graphics is
providing high-quality prints and products to its customers as well as acknowledging
and showcasing the skills and talents of its employees.
@endsection

@section('meta-keyword', "Poxel graphics and printing services, about us, printing, products")

@section('header-imports')
<link rel="stylesheet" href="assets/css/members.css">

<style>
   @media (max-width: 767.98px) {
    .blog-details-content blockquote {
        display: block !important;
    }
   }
</style>
@endsection

@section('content')
<section class="blog-details-area pt-180 pb-80">
    <div class="container">
        <div class="standard-blog-item mx-0 blog-details-content">
            <div class="standard-blog-content">
                <div class="row mb-90">
                    <div class="col-12">
                        <h2 class="title poxel-title text-center mb-30">Who we are?</h2>
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-md-4 col-sm-12">
                                <img src="{{ asset('assets/img/logo/poxel_logo.png') }}" alt="">
                                <img src="{{ asset('assets/img/logo/poxel_apparels.png') }}" alt="">

                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p>Established in 2017, Poxel Graphics and Apparels Printing Services started as Ace
                                    Printing Services. Providing customers with sticker and tarpaulin printing services.
                                </p>
                                <p>In 2020, Ace Printing Services became Poxel Graphics and Apparels Printing Services.
                                    Despite the challenges faced during the Covid-19 pandemic, Poxel Graphics
                                    courageously fought and continued its operations.</p>
                                <p>Now also offering custom apparel and sublimation printing services, Poxel Graphics is
                                    providing high-quality prints and products to its customers as well as acknowledging
                                    and showcasing the skills and talents of its employees.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-90">
                    <div class="col-12">
                        <h2 class="title poxel-title text-center mb-30" id="objectives">Our Objectives</h2>
                        <p class="text-center"></p>
                        <blockquote>
                            “Making the brand memorable. Thus, attracting and retaining customers.“
                        </blockquote>
                    </div>
                </div>
                <div class="row mb-90">
                    <div class="col-12">
                        <h2 class="title poxel-title text-center mb-50" id="core-values">Poxel Core Values</h2>
                        <div class="row  m-auto w-50">
                            <div class="col-12">
                                <img class="img" src="{{ asset('assets/img/others/poxel-core-values.png') }}"
                                    alt="poxel core values">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-90">
                    <div class="col-12">
                        <h2 class="title poxel-title text-center mb-30" id="mission">Our Mission</h2>
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <img class="img img-responsive" width="200" src="{{ asset('assets/img/others/bullseye.png') }}"
                                    alt="Our mission">
                            </div>
                            <div class="col-8">
                                <p>
                                    Our mission is to offer high-quality prints and high-value products aiming to
                                    provide total
                                    satisfaction to the customers as well as comfort.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-100">
                    <div class="col-12">
                        <h2 class="title poxel-title text-center mb-30" id="vision">Our Vision</h2>

                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <img  class="img img-responsive" width="200"  src="{{ asset('assets/img/others/vision.png') }}" alt="Our vision">
                            </div>
                            <div class="col-8">
                                <p>Our vision is to be the top and leading provider of custom apparel, signages, and other printing services by empowering creative designs and high-quality products. Thus, building a long-lasting relationship and partnership with the customers through comfort and satisfaction.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-50 mb-90">
                    <div class="col-12">
                        <h2 class="title poxel-title text-center mb-20" id="team">Meet the Management and the Team</h2>
                        <div style="width: 100% !important;" class="content">
                            <ul class="team">
                                <li class="member founder">
                                    <div class="thumb"><img
                                            src="https://assets.codepen.io/39255/internal/avatars/users/default.png?height=120&width=120">
                                    </div>
                                    <div class="description">
                                        <h3>Zepho Amparo</h3>
                                        <p>"What do you need to start a business? Three simple things: know your product better than anyone. Know your customer, and have a burning desire to succeed." - Dave Thomas, Founder, Wendy's</p>
                                    </div>
                                </li>

                                <li class="member co-founder">
                                    <div class="thumb"><img
                                            src="https://assets.codepen.io/39255/internal/avatars/users/default.png?height=120&width=120">
                                    </div>
                                    <div class="description">
                                        <h3>Hon. Raul Sususco</h3>
                                        <p>"If you're passionate about something and you work hard, then I think you will be successful." - Pierre Omidyar, eBay Founder and Chairman</p>
                                    </div>
                                </li>
                                <li class="member co-founder operations-manager">
                                    <div class="thumb"><img
                                            src="https://assets.codepen.io/39255/internal/avatars/users/default.png?height=120&width=120">
                                    </div>
                                    <div class="description">
                                        <h3>Zepho Amparo</h3>
                                        <p>"Progress cannot be generated when we are satisfied with existing situations." - Taiichi Ohnoe</p>
                                    </div>
                                </li>
                                <li class="member co-founder hr-manager">
                                    <div class="thumb"><img
                                            src="https://assets.codepen.io/39255/internal/avatars/users/default.png?height=120&width=120">
                                    </div>
                                    <div class="description">
                                        <h3>Christine Amparo</h3>
                                        <p>"It's about getting the best people, retaining them, nurturing a creative environment & helping to find a way to innovate." — Marissa Mayer</p>
                                    </div>
                                </li>
                                <li class="member co-founder production-manager">
                                    <div class="thumb"><img
                                            src="https://assets.codepen.io/39255/internal/avatars/users/default.png?height=120&width=120">
                                    </div>
                                    <div class="description">
                                        <h3>Nico Panilag</h3>
                                        <p>"Your most unhappy customers are your greatest source of learning.' - Bill Gates</p>
                                    </div>
                                </li>

                                <li class="member co-founder purchaser">
                                    <div class="thumb"><img
                                            src="https://assets.codepen.io/39255/internal/avatars/users/default.png?height=120&width=120">
                                    </div>
                                    <div class="description">
                                        <h3>Christine Amparo</h3>
                                        <p>"Everything is worth what its purchaser will pay for it." - Publilius Syrus/p>
                                    </div>
                                </li>


                                <li class="member co-founder accounting-staff">
                                    <div class="thumb"><img
                                            src="https://assets.codepen.io/39255/internal/avatars/users/default.png?height=120&width=120">
                                    </div>
                                    <div class="description">
                                        <h3>Christine Amparo</h3>
                                        <p>"Accounting is the language of business". - Warren Buffett</p>
                                    </div>
                                </li>


                                <li class="member co-founder production-supervisor">
                                    <div class="thumb"><img
                                            src="https://assets.codepen.io/39255/internal/avatars/users/default.png?height=120&width=120">
                                    </div>
                                    <div class="description">
                                        <h3>Jun Bryan Estrella</h3>
                                        <p>"Leadership is about taking responsibility, not making excuses." - Mitt Romney</p>
                                    </div>
                                </li>

                                <li class="member co-founder sales-supervisor">
                                    <div class="thumb"><img
                                            src="https://assets.codepen.io/39255/internal/avatars/users/default.png?height=120&width=120">
                                    </div>
                                    <div class="description">
                                        <h3>Sharmen Recaplaza & 5 sales staff</h3>
                                        <p>"You don't close a sale; you open a relationship if you want to build a long-term, successful enterprise." - Patricia Fripp</p>
                                    </div>
                                </li>


                                <li class="member co-founder senior-graphic-artist">
                                    <div class="thumb"><img
                                            src="https://assets.codepen.io/39255/internal/avatars/users/default.png?height=120&width=120">
                                    </div>
                                    <div class="description">
                                        <h3>Dhan Josef Arellano & 5 junior graphic artists</h3>
                                        <p>"Design creates culture. Culture shapes values. Values determine the future." - Robert L. Peters/p>
                                    </div>
                                </li>
                                <li class="member co-founder quality-control-staff">
                                    <div class="thumb"><img
                                            src="https://assets.codepen.io/39255/internal/avatars/users/default.png?height=120&width=120">
                                    </div>
                                    <div class="description">
                                        <h3>Geraldine Arnaiz & Julie Ann Molejon</h3>
                                        <p>"Give them quality. That's the best kind of advertising." - Milton Hersey</p>
                                    </div>
                                </li>
                                <li class="member">
                                    <div class="thumb"><img
                                            src="https://assets.codepen.io/39255/internal/avatars/users/default.png?height=120&width=120">
                                    </div>
                                    <div class="description">
                                        <h3>14 Production Operators & 10 Freelancers</h3>
                                        <p>"Pleasure in the job puts perfection in the work." - Aristotle</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection