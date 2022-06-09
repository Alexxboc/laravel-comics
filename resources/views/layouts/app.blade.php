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
    <header id="site_header"></header>
    <!-- /#site_header -->
    <main class="" id="site_main">
        @yield('comics')
    </main>
    <!-- /#site_main -->
    <footer id="site_footer"></footer>
    <!-- /#site_footer -->

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>