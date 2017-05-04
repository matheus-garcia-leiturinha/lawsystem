
@extends('process.layout')

@section('title', 'Criar Processos')

@section('content')
    {{ Form::open(array('url' => 'processos/save')) }}


        {{ Form::label('number', 'Número Processual') }}
        {{ Form::text('number', '',["class" => "form-control"]) }}

        {{ Form::label('natureza', 'Natureza') }}
        {{ Form::number('natureza', '',["class" => "form-control"]) }}


        {{ Form::label('tribunal', 'Tribunal') }}
        {{ Form::select('tribunal', array_column($tribunais,"nome")) }}

        {{ Form::label('vara', 'Vara') }}
        {{ Form::select('vara', array_column($varas,"nome")) }}

        {{ Form::label('adv_responsavel', 'Advogado Responsável') }}
        {{ Form::select('adv_responsavel', array_column($advogados,"nome")) }}

        {{ Form::label('adv_terceiro', 'Advogado Terceiro') }}
        {{ Form::select('adv_terceiro', array_column($advogados,"nome")) }}

        {{ Form::submit('Enviar') }}
    {{ Form::close() }}
@endsection