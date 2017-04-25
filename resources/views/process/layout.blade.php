

@extends('base')

@section('content')

    @parent();
    @yield('body')
@endsection

@section('scripts')

    @parent();

	<script src="{{ asset('/js/clients.js') }}"></script>

@endsection