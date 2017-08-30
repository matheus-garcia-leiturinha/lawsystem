

@extends('base')

@section('content')

    @parent();
    @yield('body')
@endsection

@section('scripts')

    <script src="{{ asset('/js/deposito_judicial.js') }}"></script>

@endsection