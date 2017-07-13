{{ Html::script(asset('yadah/js/alexeis.js')) }}

<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<style media="screen">
  #event_date{
    position: relative;
    font-size: 20px;
  }
</style>


<div class="col-sm-12 form-group" onkeyup="slugBlog()">
    {{ Form::text('title', null, ['placeholder'=>'Event title here...','class'=>'form-control', 'id'=>'title','style'=>'height:32px' ]) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::textarea('description', null, ['placeholder'=>'Event description here...','class'=>'form-control', 'id'=>'subtitle','style'=>'height:32px']) }}
</div>


<div class="col-sm-12 form-group">
    {{ Form::text('location', null, ['placeholder'=>'Event location','class'=>'form-control','style'=>'height:32px']) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::text('ticket', null, ['placeholder'=>'Ticket cost','class'=>'form-control','style'=>'height:32px','size'=>20]) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::date('event_date', \Carbon\Carbon::now(), ['placeholder'=>'','class'=>'form-control','style'=>'height:32px']) }}
</div>

<div class="col-sm-12 form-group">
    {{-- {{ Form::time('event_time', null, ['style'=>'height:32px','id'=>'event_time']) }} --}}
    <input type="text" id="event_time" placeholder="Time">
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

<script type="text/javascript">
    var timepicker = new TimePicker('event_time', {
    theme: 'blue-grey', // or 'blue-grey',dark
    lang: 'en' // 'en', 'pt' for now
    });
    timepicker.on('change', function(evt){
    console.info(evt);

    var value = (evt.hour || '00') + ':' + (evt.minute || '00');
    evt.element.value = value;
    });
</script>
