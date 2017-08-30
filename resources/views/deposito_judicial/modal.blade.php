
{{ Form::open(array('url' => 'deposito_judicial/save',"class" => "depositos_judiciais")) }}

{{ Form::label('type', 'Tipo') }}
{{ Form::Text('type', '',["class" => "form-control"]) }}

{{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
{{ Form::close() }}