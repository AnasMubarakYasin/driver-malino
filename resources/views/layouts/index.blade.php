<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>

    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/logo DM 2.png') }}">

    @vite('resources/js/app.js')

    @yield('head')

</head>

<body>

    @yield('body')

    @vite('resources/css/app.css')
</body>

</html>
