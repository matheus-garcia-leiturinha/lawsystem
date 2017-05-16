
@extends('advocates.layout')

@section('title', 'Criar Advogados')

@section('content')
    {{ Form::open(array('url' => 'advogados/save',"class" => "advocates")) }}

        {{ Form::hidden('id', $advocate['id']) }}
        {{ Form::label('nome', 'Nome') }}
        {{ Form::Text('nome', $advocate['nome'],["class" => "form-control"]) }}

        {{ Form::label('oab', 'OAB') }}
        {{ Form::Text('oab', $advocate['oab'],["class" => "form-control"]) }}

        {{ Form::label('telefone', 'Telefone') }}
        {{ Form::Text('telefone', $advocate['telefone'],["class" => "form-control"]) }}


        {{ Form::label('email', 'E-Mail') }}
        <div class="input-group">
            <span class="input-group-addon">@</span>
            {{ Form::Text('email', $advocate['email'],["class" => "form-control","title" => "Digite um e-mail no formato: joe.dane@email.com","placeholder" => "joe.dane@email.com"]) }}
        </div>
        <br/>
        {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
    {{ Form::close() }}
@endsection