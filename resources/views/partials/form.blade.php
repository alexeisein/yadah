{{ Html::script(asset('yadah/js/alexeis.js')) }}

<div class="col-sm-12 form-group" onkeyup="slugBlog()">
    {{ Form::text('title', null, ['placeholder'=>'Blog title here...','class'=>'form-control', 'id'=>'title','style'=>'height:32px' ]) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::text('subtitle', null, ['placeholder'=>'Blog subtitle here...','class'=>'form-control', 'id'=>'subtitle','style'=>'height:32px']) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::textarea('description', null, ['placeholder'=>'Write your blog here...','class'=>'form-control']) }}
</div>

<div class="col-sm-12 form-group">
    {{ Form::text('slug', null, ['class'=>'form-control','style'=>'height:32px','placeholder'=>'Blog slug','id' => 'slug']) }}
</div>

<div class="col-sm-12 form-group" style="color: #fff;">
    {{ Form::file('post_image', null, ['placeholder'=>'Upload blog photo','class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::button('<span class="glyphicon glyphicon-send"></span> '.$subBtn, ['class'=>'btn btn-primary','type'=>'submit'])}}
</div>