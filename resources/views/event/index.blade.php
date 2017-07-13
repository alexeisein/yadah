@extends('layouts.main')

@section('title', 'Welcome to my Blog')

<style media="screen">

	img#featured_img:hover{opacity: 0.1; transition: all ease-in 0.2s;}
	img#featured_img{height:220px;}
	#text-intro{height:550px; width:48%; border:1px solid #fff; margin:0 2% 20px 0; padding:20px 0;}
	#post-title{border-bottom: 1px solid #3e3e3e;}
	#post-subtitle{border-bottom: 1px solid #3e3e3e;}
	#no-blog{color: #fff;}
	#welcome{color: #c2a270;}
</style>

@section('content')
	<div class="container">
        <div class="row-fluid">
            <div class="span8 offset2">
                <div class="site-header">

                    @include('partials.header')

                </div>  {{-- site-header --}}

                <div class="featured-heading">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <h4 id="welcome">UPCOMING EVENTS</h4><hr>

                            @forelse($events as $event)

                                <div class="col-sm-5 text-center text-info" id="text-intro">
                                    {{-- IMAGE --}}
                                    <a href="{{ route('event.show',$event->id) }}"><img src="{{ asset('yadah/images/event/'.$event->event_image) }} " id="featured_img"></a>
																		{{-- TITLE --}}
                                    <h5 id="event-title" title="{{ strip_tags($event->title) }}">
                                        <a href="{{ route('event.show', $event->id) }}" class="img-thumbnail btn-primary">
                                        {{ substr(strip_tags($event->title),0,20) }}
                                        {{ strlen(strip_tags($event->title)) > 20 ? "[...]" : "" }}
                                        </a>
                                    </h5>

                                    {{-- DESCRIPTION --}}
                                    <p class="text-muted">
                                        {!! substr($event->description, 0, 300) !!}
                                        {!! strlen($event->description )> 300 ? '[...]' : "" !!}
                                    </p>

	                                  <a href="{{ route('event.show', $event->id) }}" class="btn btn-info">Read on...</a><br><br>

                                </div>

                            @empty
                                <h4 class="text-center" id="no-blog">No Event published yet !</h4>
                                <a href="{{ route('event.create') }}" class="btn btn-info">Creat an Event</a>

                            @endforelse

                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <span>{{ $events->links() }}</span>
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
