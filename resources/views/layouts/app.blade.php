<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type='text/css'>

        <link rel="stylesheet" href="{{ asset('/css/home.css') }}">

    </head>
    <body>

        @include('header')

        @yield('content')

    </body>
</html>
