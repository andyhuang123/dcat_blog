<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts --> 
    <script src="{{ asset('js/popper.js') }}" defer></script> 
    <script src="{{ mix('js/app.js') }}" defer></script>
  
    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
    <!-- Styles -->  
    <link rel="stylesheet" href="{{ asset('lib/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
   
</head>
<body>
    <div class="wrapper"> 

        @include('layouts.nav')

        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.model')  

    </div>
       @include('layouts.footer')
</body> 
<script src="{{ asset('lib/slick/slick.min.js') }}" defer></script> 
</html>
