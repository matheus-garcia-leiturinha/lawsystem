

@extends('base')

@section('styles')

    <link rel="stylesheet" href="{{ asset('/css/process.css') }}">

@endsection

@section('content')

    @parent();
    @yield('body')
@endsection

@section('scripts')

    @parent();

	<script src="{{ asset('/js/process.js') }}"></script>

@endsection