
@extends('process.layout')

@section('title', 'Criar Processos')

@section('content')
    {{ Form::open(array('url' => 'processos/save')) }}

        {{ Form::label('type', 'Física') }}
        {{ Form::radio('type', 'cpf') }}
        {{ Form::label('type', 'Jurídica') }}
        {{ Form::radio('type', 'cnpj') }}


        {{ Form::submit('Enviar') }}
    {{ Form::close() }}
@endsection