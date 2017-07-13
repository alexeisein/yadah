{{ Html::script(asset('yadah/js/alexeis.js')) }}

<div class="col-sm-12 form-group" onkeyup="slugCatTag()">
    {{ Form::text('name', null, ['placeholder'=>'Tag name here...','class'=>'form-control', 'id'=>'name','style'=>'height:32px']) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::text('slug', null, ['class'=>'form-control','style'=>'height:32px','placeholder'=>'Tag slug', 'id'=>'slug']) }}
</div>

<div class="form-group">
    {{ Form::button('<span class="glyphicon glyphicon-send"></span> '.$subBtn, ['class'=>'btn btn-primary','type'=>'submit'])}}
</div>