@extends('layouts.main')

@section('title', config("app.name"))

@section('content')
	<div class="container">
        <div class="row-fluid">
            <div class="span8 offset2">
                <div class="site-header">

                    @include('partials.header')

                </div>  {{-- site-header --}}


                <div class="portfolio-block">
                    <div class="row-fluid">
                        <ul class="thumbnails">

                          <li class="no-space">
							<h4>Sarit Tomlinson</h4>
							<p>Africa - PR &amp; Manager <br>
								<b>sarit@capacityrelations.co.za</b><br>
								+27 (82) 990 7005
							</p>
                            <a href="#" class="circle"><img src="yadah/img/img1.png" alt=""></a>
                          </li>

                          <li class="pull-right">
							<h4>Laura Gibson</h4>
							<p>USA - Manager <br>
								<b>lgibson@generatela.com</b><br>
								+1 (424) 645 6111
							</p>
                            <a href="#" class="circle"><img src="yadah/img/img2.png" alt=""></a>
                          </li>

                          <li class="col-sm-12">
							<h4>Shannon Barr</h4>
							<p>USA - PR<br>
								<b>sbarr@rogersandcowan.com</b><br>
								+1 (310) 854 8155
							</p>
                            <a href="#" class="circle"><img src="yadah/img/img3.png" alt=""></a>
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
    <script>
    $('#myCarousel').carousel({
        interval: 1800
    });
    </script>

@endsection
