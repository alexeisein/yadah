@extends('layouts.main')

@section('title', 'Events')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=e9fix1c1togpupgglxxvjeo0nd67ents8f43hjae965s9lj5"></script>
<script>
    tinymce.init({

        selector:'textarea',
        plugins:'code link',
        // menubar: false,

        });
    </script>

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
                            <h4 style="color: #c2a270;">CREATE A NEW EVENT</h4><hr>

                            @include('errors.list')

                            {{ Form::open(['route'=>'event.store','files'=>true, 'autocomplete' => 'off']) }}

                                @include('partials.event.form', ['subBtn' => 'PUBLISH EVENT'])

                            {{ Form::close() }}

                        </div>
                    </div>

                    <div class="btn btn-info pull-left col-sm-3">
                        <a href="{{ route('event.index') }}" class="text-warning"><span class="glyphicon glyphicon-menu-left"></span> Back to event</a>
                    </div>

                    <div class="btn btn-info pull-right  col-sm-3">
                        <a href="{{ route('event.index') }}" class="text-warning"><span class="glyphicon glyphicon-eye-open"></span> View event</a>
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
