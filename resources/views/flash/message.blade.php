@if(Session::has('success'))
        <div class="alert alert-success text-center">
            <h4>{{ Session::get('success') }}</h4>
        </div>

    @endif

    <script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>

    <script type="text/javascript">
        $('div.alert').not('alert-success').not('alert-danger').delay(5000).slideUp(300);
    </script>