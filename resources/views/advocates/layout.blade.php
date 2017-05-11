

@extends('base')

@section('content')

    @parent();
    @yield('body')
@endsection

@section('scripts')

	<script src="{{ asset('/js/advocates.js') }}"></script>

@endsection