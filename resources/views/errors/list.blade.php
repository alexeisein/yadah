@if($errors->any())
    <div class="alert alert-danger">
       @foreach($errors->all() as $error)
            <ul class="list-unstyled">
               <li class="text-left"><span class="glyphicon glyphicon-exclamation-sign"></span> {{ ucwords($error) }}</li> 
            </ul>
            
        @endforeach 
    </div>
    
@endif