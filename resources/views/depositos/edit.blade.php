
@extends('depositos.layout')

@section('title', 'Criar Deposito')


@section('content')
    {{ Form::open(array('url' => 'depositos/save',"class" => "depositos")) }}

    {{ Form::hidden('id', $deposito['id']) }}

    {{ Form::label('type', 'Tipo') }}
    {{ Form::Text('type', $deposito['type'],["class" => "form-control"]) }}

    {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
    {{ Form::close() }}
@endsection