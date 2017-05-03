
@extends('clients.layout')

@section('title', 'Criar Clientes')

@section('content')
    {{ Form::open(array('url' => 'clientes/save')) }}

        {{ Form::label('type', 'Física') }}
        {{ Form::radio('type', 'cpf', ['checked' => 'checked']) }}
        {{ Form::label('type', 'Jurídica') }}
        {{ Form::radio('type', 'cnpj') }}


        <div class="doc cpf checked">

        {{ Form::label('fname', 'Nome') }}
        {{ Form::text('fname', '',["class" => "form-control"]) }}

        {{ Form::label('ftype_value', 'CPF') }}
        {{ Form::text('ftype_value', '',["title" => "Digite um CPF", "class" => "form-control"]) }}

        </div>
        <div class="doc cnpj">

        {{ Form::label('jname', 'Razão Social') }}
        {{ Form::text('jname', '',["class" => "form-control"]) }}

        {{ Form::label('jtype_value', 'CNPJ') }}
        {{ Form::text('jtype_value', '',["title" => "Digite um CNPJ", "class" => "form-control"]) }}
        </div>


        {{ Form::label('logradouro', 'Logradouro') }}
        {{ Form::text('logradouro','',["class" => "form-control"]) }}

        {{ Form::label('numero', 'Numero') }}
        {{ Form::text('numero','',["class" => "form-control"]) }}

        {{ Form::label('complemento', 'Complemento') }}
        {{ Form::text('complemento','',["class" => "form-control"]) }}

        {{ Form::label('cidade', 'Cidade') }}
        {{ Form::text('cidade','',["class" => "form-control"]) }}

        {{ Form::label('estado', 'Estado') }}
        {{ Form::text('estado','',["class" => "form-control"]) }}

        {{ Form::label('caixa_postal', 'Caixa Postal') }}
        {{ Form::text('caixa_postal','',["class" => "form-control"]) }}

        {{ Form::label('banco', 'Banco') }}
        {{ Form::text('banco','',["class" => "form-control"]) }}

        {{ Form::label('agencia', 'Agencia') }}
        {{ Form::text('agencia','',["class" => "form-control"]) }}

        {{ Form::label('conta', 'Conta') }}
        {{ Form::text('conta','',["class" => "form-control"]) }}

        {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
    {{ Form::close() }}
@endsection