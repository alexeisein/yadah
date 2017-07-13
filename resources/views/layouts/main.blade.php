<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="no-js">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="description" content="">
    <link rel="stylesheet" href="{{ asset('yadah/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{  asset('yadah/css/bootstrap-responsive.css') }}">
    <link rel="stylesheet" href="{{  asset('yadah/css/custom-styles.css') }}">
    <link rel="stylesheet" href="{{  asset('yadah/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{  asset('yadah/css/font-awesome-ie7.css') }}">
    <script src="{{  asset('yadah/js/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
    <script src="{{  asset('yadah/js/script/carousel.js') }}"></script>
    <script src="{{  asset('yadah/js/jquery-1.9.1.js') }}"></script>

    {{-- bootstrap CDN --}}
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body>

    @include('flash.message');

    @yield('content')


</body>
</html>
