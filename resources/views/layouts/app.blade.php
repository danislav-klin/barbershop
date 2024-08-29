<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/slick/slick.css">
    <link rel="stylesheet" href="/public/jquery-ui/jquery-ui.min.css">
</head>
<body>
    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')

    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/js/jquery-3.7.1.min.js"></script>
    <script src="/public/slick/slick.js"></script>
    
    <script src="/public/jquery-ui/jquery-ui.min.js"></script>
    <script src="/public/js/scripts.js"></script>
</body>
</html>