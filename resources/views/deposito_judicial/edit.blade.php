
@extends('deposito_judicial.layout')

@section('title', 'Criar Deposito Judicial')


@section('content')
    {{ Form::open(array('url' => 'deposito_judicial/save',"class" => "deposito_judicial")) }}

    {{ Form::hidden('id', $deposito_judicial['id']) }}

    {{ Form::label('type', 'Tipo') }}
    {{ Form::Text('type', $deposito_judicial['type'],["class" => "form-control"]) }}

    {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
    {{ Form::close() }}
@endsection