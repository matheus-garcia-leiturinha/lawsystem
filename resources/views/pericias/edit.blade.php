
@extends('pericias.layout')

@section('title', 'Criar Pericia')


@section('content')
    {{ Form::open(array('url' => 'pericias/save')) }}

    {{ Form::hidden('id', $pericia['id']) }}

    {{ Form::label('type', 'Tipo') }}
    {{ Form::Text('type', $pericia['type'],["class" => "form-control"]) }}

    {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
    {{ Form::close() }}
@endsection