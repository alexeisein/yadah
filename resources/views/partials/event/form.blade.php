{{ Html::script(asset('yadah/js/alexeis.js')) }}

<div class="col-sm-12 form-group" onkeyup="slugBlog()">
    {{ Form::text('title', null, ['placeholder'=>'Event title here...','class'=>'form-control', 'id'=>'title','style'=>'height:32px' ]) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::textarea('description', null, ['placeholder'=>'Event description here...','class'=>'form-control', 'id'=>'subtitle','style'=>'height:32px']) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::text('artists[]', null, ['placeholder'=>'Featuring Artists','class'=>'form-control', 'multiple' => 'multiple','style'=>'height:32px']) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::text('location', null, ['placeholder'=>'Event location','class'=>'form-control','style'=>'height:32px']) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::text('ticket', null, ['placeholder'=>'Ticket cost','class'=>'form-control','style'=>'height:32px','size'=>20]) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::text('host', null, ['placeholder'=>'Host of the event','class'=>'form-control','style'=>'height:32px']) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::text('date', null, ['placeholder'=>'Event date','class'=>'form-control','style'=>'height:32px']) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::text('slug', null, ['class'=>'form-control','style'=>'height:32px','placeholder'=>'Blog slug','id' => 'slug','style'=>'height:32px']) }}
</div>

<div class="col-sm-12 form-group" style="color: #fff;">
    {{ Form::file('event_image', null, ['placeholder'=>'Upload event photo','class'=>'form-control','style'=>'height:32px']) }}
</div>

<div class="form-group">
    {{ Form::button('<span class="glyphicon glyphicon-send"></span> '.$subBtn, ['class'=>'btn btn-primary','type'=>'submit'])}}
</div>
