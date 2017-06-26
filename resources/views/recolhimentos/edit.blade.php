
@extends('recolhimentos.layout')

@section('title', 'Criar Recolhimento')


@section('content')
    {{ Form::open(array('url' => 'recolhimentos/save',"class" => "recolhimentos")) }}

    {{ Form::hidden('id', $recolhimento['id']) }}

    {{ Form::label('type', 'Tipo') }}
    {{ Form::Text('type', $recolhimento['type'],["class" => "form-control"]) }}

    {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
    {{ Form::close() }}
@endsection