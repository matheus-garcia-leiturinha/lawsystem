
@extends('clients.layout')

@section('title', 'Criar Clientes')

@section('content')
    {{ Form::open(array('url' => 'clientes/save')) }}

        {{ Form::label('type', 'Física') }}
        {{ Form::radio('type', 'cpf', true) }}
        {{ Form::label('type', 'Jurídica') }}
        {{ Form::radio('type', 'cnpj') }}

        <div class="fisica">

        {{ Form::label('fname', 'Nome') }}
        {{ Form::text('fname', '') }}

        {{ Form::label('ftype_value', 'CPF') }}
        {{ Form::text('ftype_value', '',["pattern" => "\\d{11}","title" => "Digite um CPF no formato: xxxxxxxxxxx","placeholder" => "xxxxxxxxxxx"]) }}

        </div>
        <div class="juridica hidden" >

        {{ Form::label('jname', 'Razão Social') }}
        {{ Form::text('jname', '') }}

        {{ Form::label('jtype_value', 'CNPJ') }}
        {{ Form::text('jtype_value', '',["pattern" => "[0-9]{8}\\[0-9]{6}","title" => "Digite um CNPJ no formato: xxxxxxxx\\xxxxxx","placeholder" => "xxxxxxxx\\xxxxxx"]) }}
        </div>


        {{ Form::label('logradouro', 'Logradouro') }}
        {{ Form::text('logradouro') }}

        {{ Form::label('numero', 'Numero') }}
        {{ Form::text('numero') }}

        {{ Form::label('cidade', 'Cidade') }}
        {{ Form::text('cidade') }}

        {{ Form::label('estado', 'Estado') }}
        {{ Form::text('estado') }}

        {{ Form::label('caixa_postal', 'Caixa Postal') }}
        {{ Form::text('caixa_postal') }}

        {{ Form::label('banco', 'Banco') }}
        {{ Form::text('banco') }}

        {{ Form::label('agencia', 'Agencia') }}
        {{ Form::text('agencia') }}

        {{ Form::label('conta', 'Conta') }}
        {{ Form::text('conta') }}

        {{ Form::submit('Enviar') }}
    {{ Form::close() }}
@endsection