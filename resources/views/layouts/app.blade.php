<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>
    @include('partials.header')
    @include('partials.navbar')

    <main class="" id="site_main">
        @include('partials.jumbotron')
        @yield('comics')
        @yield('character_title')
        @yield('movies_title')

    </main>
    <!-- /#site_main -->

    @include('partials.footer')
    

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>