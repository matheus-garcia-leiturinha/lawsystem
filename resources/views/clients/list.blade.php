
@extends('clients.layout')

@section('title', 'Listar Clientes')

@section('content')

    <a type="button" class="btn btn-primary btn-lg" href={{ url('/clientes/criar') }} >Criar Cliente</a>

    {!! $grid !!}
@endsection