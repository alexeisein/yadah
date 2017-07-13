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
                            <h4 id="welcome">WELCOME TO MY BLOG</h4><hr>

                            @forelse($posts as $post)

                                <div class="col-sm-5 text-center text-info" id="text-intro">
                                    {{-- IMAGE --}}
																		@if ($post->post_image == 'avatar.jpg')
																			{{-- TITLE --}}
	                                    <h5 id="post-title" title="{{ strip_tags($post->title) }}">
	                                        <a href="{{ route('blog.show', $post->id) }}" class="img-thumbnail btn-primary">
	                                        {{ substr(strip_tags($post->title),0,20) }}
	                                        {{ strlen(strip_tags($post->title)) > 20 ? "[...]" : "" }}
	                                        </a>
	                                    </h5>
	                                    {{-- SUBTITLE --}}
	                                    <h6 id="post-subtitle" title="{{ strip_tags($post->subtitle) }}">
	                                        {{ substr(strip_tags($post->subtitle),0,30) }}
	                                        {{ strlen(strip_tags($post->subtitle)) > 30 ? "[...]" : "" }}
	                                    </h6>
	                                    {{-- DESCRIPTION --}}
	                                    <p class="text-muted">
	                                        {!! substr($post->description, 0, 300) !!}
	                                        {!! strlen($post->description )> 300 ? '[...]' : "" !!}
	                                    </p>
	                                    <a href="{{ route('blog.show', $post->id) }}" class="btn btn-info">Read on...</a><br><br>

																		@else
																			<a href="{{ route('blog.show',$post->id) }}"><img src="{{ asset('yadah/images/post/'.$post->post_image) }} " id="featured_img"></a>
																			{{-- TITLE --}}
	                                    <h5 id="post-title" title="{{ strip_tags($post->title) }}">
	                                        <a href="{{ route('blog.show', $post->id) }}" class="img-thumbnail btn-primary">
	                                        {{ substr(strip_tags($post->title),0,20) }}
	                                        {{ strlen(strip_tags($post->title)) > 20 ? "[...]" : "" }}
	                                        </a>
	                                    </h5>
	                                    {{-- SUBTITLE --}}
	                                    <h6 id="post-subtitle" title="{{ strip_tags($post->subtitle) }}">
	                                        {{ substr(strip_tags($post->subtitle),0,30) }}
	                                        {{ strlen(strip_tags($post->subtitle)) > 30 ? "[...]" : "" }}
	                                    </h6>
	                                    {{-- DESCRIPTION --}}
	                                    <p class="text-muted">
	                                        {!! substr($post->description, 0, 300) !!}
	                                        {!! strlen($post->description )> 300 ? '[...]' : "" !!}
	                                    </p>
	                                    <a href="{{ route('blog.show', $post->id) }}" class="btn btn-info">Read on...</a><br><br>
																		@endif

                                </div>

                            @empty
                                <h4 class="text-center" id="no-blog">No blog published yet !</h4>
                                <a href="{{ route('blog.create') }}" class="btn btn-info">Creat a blog</a>

                            @endforelse

                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <span>{{ $posts->links() }}</span>
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
