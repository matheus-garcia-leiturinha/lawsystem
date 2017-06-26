

@extends('base')

@section('content')

    @parent();
    @yield('body')
@endsection

@section('scripts')

    <script src="{{ asset('/js/recolhimentos.js') }}"></script>

@endsection