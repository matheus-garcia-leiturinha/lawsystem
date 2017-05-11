

@extends('base')
@section('styles')

    <link rel="stylesheet" href="{{ asset('/css/contrarios.css') }}">

@endsection
@section('content')

    @parent();
    @yield('body')
@endsection

@section('scripts')

    @parent();

    <script src="{{ asset('/js/contrarios.js') }}"></script>

@endsection