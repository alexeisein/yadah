@extends('layouts.main')

@section('title', 'Welcome to Yadah')

@section('content')
	<div class="container">
        <div class="row-fluid">
            <div class="span8 offset2">
                <div class="site-header">

                    @include('partials.header')

                </div>  {{-- site-header --}}

                <div class="banner-shadow">
                    <div class="banner">
                        <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="yadah/images/yada1.jpg" alt="" style="opacity: 0.5; width: 770px;">
                                    <div class="carousel-caption">
                                      <div class="social-icons">
                                        <ul>
                                            <li><a href="#"><i class="fw-icon-facebook icon" ></i></a></li>
                                            <li><a href="#"><i class="fw-icon-twitter icon"></i></a></li>
                                            <li><a href="#"><i class="fw-icon-linkedin icon"></i></a></li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured-heading">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <h1>Hello, I'am Agada Praise</h1>
                            <h2>considered a media darling, <strong>Agaga Praise</strong> has become a sought after personality <span>world-wide</span> just as her priceless namesake suggests.</h2>
                            <a href="{{ route('pages.about') }}" class="btn">more about me</a>
                        </div>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="block">
                                <h1>Nunc dignissim risus </h1>
                                <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu <span>vulputate magna eros eu erat</span>. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                                <a href="#" class="btn">more info</a>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="block">
                                <h1>Vivamus vestibulum nulla </h1>
                                <p class="last">Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                                <ul class="ruler-top">
                                    <li><a href="#">Integer vita /</a></li>
                                    <li><a href="#">Egestis /</a></li>
                                    <li><a href="#">Tindidunt</a></li>
                                </ul>
                                <a href="#" class="btn">more info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-block">
                    <div class="portfolio-title">
                    <h1>portfolio</h1>
                    <h2>Integer vitae libero ac risus egestas placerat</h2>
                    </div>
                    <div class="links">
                        <a href="#">Tomdicmt</a>
                        <a href="#">Voluptin</a>
                        <a href="#">fermentu</a>
                    </div>
                    <div class="row-fluid">
                        <ul class="thumbnails">
                          <li class="no-space">
                            <a href="#" class="circle"><img src="{{ asset('yadah/images/img1.png') }}" alt=""></a>
                          </li>
                          <li>
                            <a href="#" class="circle"><img src="yadah/images/img2.png" alt=""></a>
                          </li>
                          <li>
                            <a href="#" class="circle"><img src="yadah/images/img3.png" alt=""></a>
                          </li>
                          <li>
                            <a href="#" class="circle"><img src="yadah/images/img4.png" alt=""></a>
                          </li>
                          <li>
                            <a href="#" class="circle"><img src="yadah/images/img5.png" alt=""></a>
                          </li>
                          <li>
                            <a href="#" class="circle"><img src="yadah/images/img6.png" alt=""></a>
                          </li>
                          <li>
                            <a href="#" class="circle"><img src="yadah/images/img7.png" alt=""></a>
                          </li>
                        </ul>
                    </div>
                </div>

                <div class="contact-info" id="contact-info">
                    <h1>contact me</h1>
                    <h2>Get in touch with me.</h2>
                        @include('errors.list')

                        @include('partials.contact')
                </div>

                <div class="site-footer">
                    @include('partials.footer')
                </div>
            </div>
        </div>
    </div>

    <script src="yadah/js/jquery-1.9.1.js"></script>
    <script src="yadah/js/bootstrap.js"></script>
    {{ Html::script('yadah/js/script/carousel.js') }}

@endsection
