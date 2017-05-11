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

        <main class="content">
            <div class="title m-b-md">
            </div>

            <div class="block">
                <a href="{{ url('/processos/criar') }}" class="box">

                    <i class="icon new"></i>
                    <span>Novo Processo</span>
                </a>
                <a href="{{ url('/processos') }}" class="box">
                    <i class="icon follow"></i>
                    <span>Andamento de Processos</span>
                </a>
                <a href="{{ url('/reports') }}" class="box">
                    <i class="icon report"></i>
                    <span>Gerar Relatórios</span>
                </a>
            </div>
        </main>

    </body>
</html>
