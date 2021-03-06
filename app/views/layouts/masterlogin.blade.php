<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Capstoneconnect 
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <!-- CSS are placed here -->
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/master-bootstrap-overwrite.css" />
        <link rel="stylesheet" type="text/css" href="css/base.css" />
        <link rel="stylesheet" type="text/css" media="only screen and (max-width: 767px), only screen and (max-device-width: 767px)" href="css/small-device.css" />
        @yield('stylesheets')
        <style>
            @yield('styles')
        </style>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        {{ HTML::script('js/jquery-2.0.3.js') }}
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('js/bootstrap.js') }}
        @yield('head')
    </head>
    <div class="text-center">
        @yield('header')
    </div>
    <body>
        @yield('content')   
    </body>
</html>