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
                            <h4 style="color: #c2a270;">EDIT BLOG POST</h4><hr>

                            @include('errors.list')

                            {{ Form::model($posts,['method'=>'PATCH','route'=>['blog.update', $posts->id],'autocomplete' => 'off', 'files' => true]) }}

                            @include('partials.form',['subBtn' => 'UPDATE THIS POST'])
                            {{ Form::close() }}

                        </div>
                    </div>

                    <div class="btn btn-info pull-left col-sm-3">
                        <a href="{{ route('blog.show', $posts->id) }}" class="text-warning"><span class="glyphicon glyphicon-menu-left"></span> Return back</a>
                    </div>

                    <div class="col-sm-3" style="margin-left: 12%;">
                        {{ Form::open(['method' => 'DELETE', 'route'=>['blog.destroy', $posts->id]]) }}

                            {{ Form::button('<span class="glyphicon glyphicon-minus-sign"></span> Delete this post', ['type'=>'submit', 'class'=>'btn btn-danger','style'=>'background-color: red;color:#fff;']) }}

                        {{ Form::close() }}
                    </div>

                    <div class="btn btn-info pull-right  col-sm-3">
                        <a href="{{ route('blog.index') }}" class="text-warning"><span class="glyphicon glyphicon-eye-open"></span> View blog posts</a>
                    </div>

                    <div class="clearfix"></div>
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
