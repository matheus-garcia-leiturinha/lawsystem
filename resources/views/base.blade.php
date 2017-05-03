<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="{{ asset('/js/lib/html5shiv.min.js') }}"></script>
            <script src="{{ asset('/js/lib/respond.min.js') }}"></script>
        <![endif]-->

        <link rel="stylesheet" href="{{ asset('/css/lib/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/lib/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/datatables.css') }}">
    <body>

        <a type="button" class="btn btn-primary btn-lg" href={{ url('/') }} >HOME</a>
        <div class="container">
            @yield('content')
        </div>
    </body>

	<script src="{{ asset('/js/lib/jquery.min.js') }}"></script>
	<script src="{{ asset('/js/lib/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/datatables.js') }}"></script>
	<script src="{{ asset('/frameworks/inputmask/jquery.inputmask.bundle.js') }}"></script>

    @yield('scripts')

</html>