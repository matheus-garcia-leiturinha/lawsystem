
@extends('pedidos.layout')

@section('title', 'Criar Pedido')


@section('content')
    {{ Form::open(array('url' => 'pedidos/save',"class" => "pedidos")) }}

    {{ Form::hidden('id', $pedido['id']) }}

    {{ Form::label('type', 'Tipo') }}
    {{ Form::Text('type', $pedido['type'],["class" => "form-control"]) }}

    {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
    {{ Form::close() }}
@endsection