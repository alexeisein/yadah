{{ Form::open(['route'=>'pages.contact']) }}
  <div class="controls">
      {{ Form::text('name', null, ['id'=>'name', 'placeholder'=>'Name here..', 'class'=>'span5']) }}
      {{ form::text('email', null, ['id'=>'email', 'placeholder'=>'Email here..', 'class'=>'span5']) }}
  </div>
  <div class="controls">
      {{ Form::textarea('message', null, ['id'=>'message', 'placeholder'=>'Message here..', 'class'=>'span10', 'rows'=>5]) }}
  </div>

  <div class="controls">
      {{ Form::button('<span class="glyphicon glyphicon-send"></span> Submit Form', ['type' => 'submit','id'=>'contact-submit', 'class'=>'btn btn-info']) }}
      {{-- <button id="contact-submit" type="submit" class="btn">Submit</button> --}}
  </div>
  {{ Form::close() }}