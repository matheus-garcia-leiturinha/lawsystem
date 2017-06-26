
{{ Form::open(array('url' => 'recolhimentos/save',"class" => "recolhimentos")) }}

{{ Form::label('type', 'Tipo') }}
{{ Form::Text('type', '',["class" => "form-control"]) }}

{{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
{{ Form::close() }}