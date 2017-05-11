<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <script src="{{ asset('/lib/js/jquery-3.2.1.min.js') }}"></script>

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="{{ asset('/js/lib/html5shiv.min.js') }}"></script>
            <script src="{{ asset('/js/lib/respond.min.js') }}"></script>
        <![endif]-->

        @yield('styles')



        <link rel="stylesheet" href="{{ asset('/frameworks/jquery-ui/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/lib/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/lib/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/datatables.css') }}">
        <link rel="stylesheet" href="{{ asset('/frameworks/bootstrap-select/bootstrap-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/frameworks/material/dataTables.material.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/frameworks/material/material.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/frameworks/datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">

        <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
    </head>

    <body>

        @include('header')

        <div class="content">
            @yield('content')
        </div>

        <script src="{{ asset('/frameworks/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('/js/lib/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/datatables.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/frameworks/inputmask/jquery.inputmask.bundle.js') }}"></script>
        <script src="{{ asset('/frameworks/bootstrap-select/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('/frameworks/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('/frameworks/datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>

        @yield('scripts')

    </body>

</html>