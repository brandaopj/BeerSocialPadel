<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
    <!-- Scripts -->
    <!--start gmaps -->
    
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCEtQa2fJNK0O801-9OmIU3IyFMjssRdwc"></script>
    <script src="\addins\gmaps\gmaps.js"></script>
    
    <!--end gmaps -->
 
   <script src="{{ asset('js/app.js') }}"></script>


    <title>{{ config('app.name', 'Laravel') }}</title>
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">



        @include ('layouts.nav')
       


        <!-- start .flash-message -->
        <div class="flash-message">
          @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
          @endforeach
        </div>
        <!-- end .flash-message -->
        

        <div class="container">

            <div class="row">

                @yield('content')

               @yield('sidecontent')

            </div>


        </div>
        
    </div>

    
    
</body>
</html>
