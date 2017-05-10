
@extends('tribunais.layout')

@section('title', 'Editar Trinunal')

@section('content')
    {{ Form::open(array('url' => 'tribunais/save')) }}

       {{ Form::label('id', 'Numero') }}
       {{ Form::Text('id', $tribunal['id'],["class" => "form-control", "readonly" => "readonly"]) }}

       {{ Form::label('nome', 'Nome Tribunal') }}
       {{ Form::Text('nome', $tribunal['nome'],["class" => "form-control"]) }}

       {{--{{ Form::label('estado', 'Estado') }}--}}
       {{--{{ Form::Text('estado', '',["class" => "form-control"]) }}--}}

    <select class="selectpicker s1" data-live-search=true title="{{$tribunal['estado']}}" name="estado">
        <option title="AC" value="Acre">Acre</option>
        <option title="AL" value="Alagoas">Alagoas</option>
        <option title="AP" value="Amapá">Amapá</option>
        <option title="AM" value="Amazonas">Amazonas</option>
        <option title="BA" value="Bahia">Bahia</option>
        <option title="CE" value="Ceará">Ceará</option>
        <option title="DF" value="Distrito Federal">Distrito Federal</option>
        <option title="ES" value="Espírito Santo">Espírito Santo</option>
        <option title="GO" value="Goiás">Goiás</option>
        <option title="MA" value="Maranhão">Maranhão</option>
        <option title="MT" value="Mato Grosso">Mato Grosso</option>
        <option title="MS" value="Mato Grosso do Sul">Mato Grosso do Sul</option>
        <option title="MG" value="Minas Gerais">Minas Gerais</option>
        <option title="PA" value="Pará">Pará</option>
        <option title="PB" value="Paraíba">Paraíba</option>
        <option title="PR" value="Paraná">Paraná</option>
        <option title="PE" value="Pernambuco">Pernambuco</option>
        <option title="PI" value="Piauí">Piauí</option>
        <option title="RJ" value="Rio de Janeiro">Rio de Janeiro</option>
        <option title="RN" value="Rio Grande do Norte">Rio Grande do Norte</option>
        <option title="RS" value="Rio Grande do Sul">Rio Grande do Sul</option>
        <option title="RO" value="Rondônia">Rondônia</option>
        <option title="RR" value="Roraima">Roraima</option>
        <option title="SC" value="Santa Catarina">Santa Catarina</option>
        <option title="SP" value="São Paulo">São Paulo</option>
        <option title="SE" value="Sergipe">Sergipe</option>
        <option title="TO" value="Tocantins">Tocantins</option>
    </select>

       {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
    {{ Form::close() }}

    <script>
        $("option[value={{$tribunal['estado']}}]").attr('selected','selected');
    </script>
@endsection