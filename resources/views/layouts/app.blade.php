<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- website_keyword -->
    <meta name="keywords" content=" ">
     <!-- website_desc -->
    <meta name="description" content=" ">
     <!-- Styles -->  
    <link rel="stylesheet" href="{{ asset('lib/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->  
    <script src="{{ asset('js/popper.js') }}"></script> 
    <script src="{{ asset('js/app.js') }}"></script> 
  
    <!-- Fonts --> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
    
    @livewireStyles

</head>
    <body>
         <div class="wrapper" id="app">  
            @include('layouts.nav') 
            <!-- Page Content --> 
            @yield('content') 
        </div>
        @include('layouts.footer') 
    </body>
    <script src="{{ asset('lib/slick/slick.min.js') }}" defer></script> 
    @yield('js')
    
    @livewireScripts 
    
   
</html>
 