@extends('layouts.main')

@section('title', 'Welcome to my Blog')

<style media="screen">
	#event_date{
		color:lightblue;text-transform:lowercase;
		font-size: 17px;
	}
	.event_details{
		text-align: left;
	}
	.event_details p{
		font-size: 15px;
		text-transform: capitalize;
	}
	.detail-list{
		text-transform: uppercase;
		font-size: 20px;
	}
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

                            <h4 style="color: #c2a270;">{{ $event->title }}</h4><hr>

                            <div>

															<img src="{{ asset('yadah/images/event/'.$event->event_image) }}" alt="{{ $event->title }}"><hr>
															<h5 id="event_date"><em>{{ $event->event_date }}</em></h5><hr>
                              <p>{{ strip_tags($event->description) }}</p>

                            </div>

														<div class="event_details text-primary">
															<h4>Event details:</h4>
															<p><span class="label label-default detail-list">Location:</span> {{ $event->location }}</p>
															<p><span class="label label-default detail-list">Date:</span> {{ $event->event_date }}</p>
															<p><span class="label label-default detail-list">Time:</span> {{ $event->event_date }}</p>
															<p><span class="label label-default detail-list">Fee:</span> ${{ $event->ticket }}.00</p>
														</div>

                        </div>
                    </div>

                    <div class="btn btn-info pull-left col-sm-3">
                        <a href="{{ route('event.index') }}" class="text-warning"><span class="glyphicon glyphicon-menu-left"></span> Back to blog event</a>
                    </div>

                    <div class="btn btn-info col-sm-3" style="margin-left: 15%;">
                        <a href="{{ route('event.edit', $event->id) }}" class="text-warning"><span class="glyphicon glyphicon-edit"></span> Edit this event</a>
                    </div>


                    <div class="pull-right col-sm-4">
                        {{ Form::open(['method' => 'DELETE', 'route'=>['event.destroy', $event->id]]) }}

                            <div class="pull-right">
                                {{ Form::button('<span class="glyphicon glyphicon-trash"></span> Delete this event', ['type'=>'submit', 'class'=>'btn btn-danger','style'=>'background-color: red;color:#fff;']) }}
                            </div>

                        {{ Form::close() }}
                    </div>

                    <div class="clearfix"></div>
                </div>
                {{-- <div class="text-center">
                    <span style="color: red;">{{ $event->links() }}</span>
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
