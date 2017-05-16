
@extends('varas.layout')

@section('title', 'Editar Vara')

@section('content')
    {{ Form::open(array('url' => 'varas/save',"class" => "varas")) }}

       {{ Form::label('id', 'Numero') }}
       {{ Form::Text('id', $vara['id'],["class" => "form-control", "readonly" => "readonly"]) }}

       {{ Form::label('nome', 'Nome da Vara Hahahaha') }}
       {{ Form::Text('nome', $vara['nome'],["class" => "form-control"]) }}

       {{ Form::label('cidade', 'Cidade') }}
       {{ Form::Text('cidade', $vara['cidade'],["class" => "form-control"]) }}

       {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
    {{ Form::close() }}
@endsection