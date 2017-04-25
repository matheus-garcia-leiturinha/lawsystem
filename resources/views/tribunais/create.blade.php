
@extends('tribunais.layout')

@section('title', 'Criar Trinunal')

@section('content')
    {{ Form::open(array('url' => 'tribunais/save')) }}

       {{ Form::label('id', 'Numero') }}
       {{ Form::Text('id', '',["class" => "form-control"]) }}

       {{ Form::label('nome', 'Tribunal') }}
       {{ Form::Text('nome', '',["class" => "form-control"]) }}

       {{ Form::label('estado', 'Estado') }}
       {{ Form::Text('estado', '',["class" => "form-control"]) }}

       {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
    {{ Form::close() }}
@endsection