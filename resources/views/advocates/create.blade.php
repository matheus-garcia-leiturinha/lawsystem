
@extends('advocates.layout')

@section('title', 'Criar Advogados')

@section('content')
    {{ Form::open(array('url' => 'advogados/save')) }}

        {{ Form::label('nome', 'Nome') }}
        {{ Form::Text('nome', '',["class" => "form-control"]) }}

        {{ Form::label('oab', 'OAB') }}
        {{ Form::Text('oab', '',["class" => "form-control"]) }}

        {{ Form::label('telefone', 'Telefone') }}
        {{ Form::Text('telefone', '',["class" => "form-control"]) }}


        {{ Form::label('email', 'E-Mail') }}
        <div class="input-group">
            <span class="input-group-addon">@</span>
            {{ Form::Text('email', '',["class" => "form-control","title" => "Digite um e-mail no formato: joe.dane@email.com","placeholder" => "joe.dane@email.com"]) }}
        </div>
        <br/>
        {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
    {{ Form::close() }}
@endsection