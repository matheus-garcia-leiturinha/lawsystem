{{ Form::open(array('url' => 'pedidos/save',"class" => "pedidos")) }}

{{ Form::label('type', 'Tipo') }}
{{ Form::Text('type', '',["class" => "form-control"]) }}

{{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
{{ Form::close() }}