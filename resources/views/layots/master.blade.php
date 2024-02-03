<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPizza - @yield('title', 'Best Pizza')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="wrapper">

    <head>
        @include('partials.navbar')
    </head>

    <main class="container">
        @yield('content')
    </main>

    @section('footerScripts')
        <script src="https://kit.fontawesome.com/df80c925c5.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    @show
</body>

</html>
