{{ Form::open(array('url' => 'advogados/save',"class" => "advocates")) }}

    {{ Form::label('nome', 'Nome') }}
    {{ Form::Text('nome', '',["class" => "form-control"]) }}

    {{ Form::label('oab', 'OAB') }}
    {{ Form::Text('oab', '',["class" => "form-control"]) }}

    {{ Form::label('telefone', 'Telefone') }}
    {{ Form::Text('telefone', '',["class" => "form-control"]) }}

    {{ Form::label('email', 'E-Mail') }}
    {{ Form::Text('email', '',["class" => "form-control","title" => "Digite um e-mail no formato: joe.dane@email.com","placeholder" => "joe.dane@email.com"]) }}

    <br/>
    {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
{{ Form::close() }}
