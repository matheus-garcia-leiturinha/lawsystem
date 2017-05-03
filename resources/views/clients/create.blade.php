
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
        {{ Form::text('fname', '') }}

        {{ Form::label('ftype_value', 'CPF') }}
        {{ Form::text('ftype_value', '',["title" => "Digite um CPF"]) }}

        </div>
        <div class="doc cnpj">

        {{ Form::label('jname', 'Razão Social') }}
        {{ Form::text('jname', '') }}

        {{ Form::label('jtype_value', 'CNPJ') }}
        {{ Form::text('jtype_value', '',["title" => "Digite um CNPJ"]) }}
        </div>


        {{ Form::label('logradouro', 'Logradouro') }}
        {{ Form::text('logradouro') }}

        {{ Form::label('numero', 'Numero') }}
        {{ Form::text('numero') }}

        {{ Form::label('cidade', 'Cidade') }}
        {{ Form::text('cidade') }}

        {{ Form::label('estado', 'Estado') }}
        {{ Form::select('estado',array(
            "AC" => "Acre",
            "AL" => "Alagoas",
            "AP" => "Amapá",
            "AM" => "Amazonas",
            "BA" => "Bahia",
            "CE" => "Ceará",
            "DF" => "Distrito Federal",
            "ES" => "Espírito Santo",
            "GO" => "Goiás",
            "MA" => "Maranhão",
            "MT" => "Mato Grosso",
            "MS" => "Mato Grosso do Sul",
            "MG" => "Minas Gerais",
            "PA" => "Pará",
            "PB" => "Paraíba",
            "PR" => "Paraná",
            "PE" => "Pernambuco",
            "PI" => "Piauí",
            "RJ" => "Rio de Janeiro",
            "RN" => "Rio Grande do Norte",
            "RS" => "Rio Grande do Sul",
            "RO" => "Rondônia",
            "RR" => "Roraima",
            "SC" => "Santa Catarina",
            "SP" => "São Paulo",
            "SE" => "Sergipe",
            "TO" => "Tocantins"
        ),null,["class" => "selectpicker","data-live-search" => true ]) }}

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