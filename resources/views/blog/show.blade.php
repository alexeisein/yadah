@extends('layouts.main')

@section('title', 'Welcome to my Blog')

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

                            <h4 style="color: #c2a270;">WELCOME TO MY BLOG</h4><hr>

                            <div>

																<h5 class="text-warning" style="border-bottom: 1px dotted #3e3e3e; padding-bottom: 10px;">{{ htmlspecialchars( $posts->title ) }}
                                </h5>
																@if ($posts->post_image !== 'avatar.jpg')
																	<img src="{{ asset('yadah/images/post/'.$posts->post_image) }}" alt="{{ $posts->title }}"><hr>
																@else
																	''
																@endif
																<h5 style="color:#fff;text-transform:lowercase;"><em>{{ $posts->subtitle }}</em></h5><hr>
                                <p>{{ strip_tags($posts->description) }}</p>

                            </div>

                        </div>
                    </div>

                    <div class="btn btn-info pull-left col-sm-3">
                        <a href="{{ route('blog.index') }}" class="text-warning"><span class="glyphicon glyphicon-menu-left"></span> Back to blog posts</a>
                    </div>

                    <div class="btn btn-info col-sm-3" style="margin-left: 15%;">
                        <a href="{{ route('blog.edit', $posts->id) }}" class="text-warning"><span class="glyphicon glyphicon-edit"></span> Edit this post</a>
                    </div>


                    <div class="pull-right col-sm-4">
                        {{ Form::open(['method' => 'DELETE', 'route'=>['blog.destroy', $posts->id]]) }}

                            <div class="pull-right">
                                {{ Form::button('<span class="glyphicon glyphicon-trash"></span> Delete this post', ['type'=>'submit', 'class'=>'btn btn-danger','style'=>'background-color: red;color:#fff;']) }}
                            </div>

                        {{ Form::close() }}
                    </div>

                    <div class="clearfix"></div>
                </div>
                {{-- <div class="text-center">
                    <span style="color: red;">{{ $posts->links() }}</span>
                </div> --}}
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
