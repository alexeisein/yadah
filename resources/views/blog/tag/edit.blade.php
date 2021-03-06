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
                            <h4 style="color: #c2a270;">EDIT TAG</h4><hr>

                            @include('errors.list')

                            {{ Form::model($tag,['method'=>'PATCH','route' =>['tag.update', $tag->id],'autocomplete' => 'off']) }}

                                @include('partials.blogtag.form', ['subBtn' => 'UPDATE THIS TAG'])

                            {{ Form::close() }}
                            
                            
                        </div>
                    </div>

                    <div class="btn btn-info pull-left col-sm-3">
                        <a href="{{ route('tag.index') }}" class="text-warning"><span class="glyphicon glyphicon-menu-left"></span> Back to blog tags</a>
                    </div>

                    <div class="btn btn-info pull-right  col-sm-3">
                        <a href="{{ route('tag.index') }}" class="text-warning"><span class="glyphicon glyphicon-eye-open"></span> View blog tags</a>
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
