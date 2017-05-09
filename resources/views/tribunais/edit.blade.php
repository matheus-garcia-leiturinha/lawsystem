
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
        <option title="AC">Acre</option>
        <option title="AL">Alagoas</option>
        <option title="AP">Amapá</option>
        <option title="AM">Amazonas</option>
        <option title="BA">Bahia</option>
        <option title="CE">Ceará</option>
        <option title="DF">Distrito Federal</option>
        <option title="ES">Espírito Santo</option>
        <option title="GO">Goiás</option>
        <option title="MA">Maranhão</option>
        <option title="MT">Mato Grosso</option>
        <option title="MS">Mato Grosso do Sul</option>
        <option title="MG">Minas Gerais</option>
        <option title="PA">Pará</option>
        <option title="PB">Paraíba</option>
        <option title="PR">Paraná</option>
        <option title="PE">Pernambuco</option>
        <option title="PI">Piauí</option>
        <option title="RJ">Rio de Janeiro</option>
        <option title="RN">Rio Grande do Norte</option>
        <option title="RS">Rio Grande do Sul</option>
        <option title="RO">Rondônia</option>
        <option title="RR">Roraima</option>
        <option title="SC">Santa Catarina</option>
        <option title="SP">São Paulo</option>
        <option title="SE">Sergipe</option>
        <option title="TO">Tocantins</option>
    </select>

       {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}
    {{ Form::close() }}
@endsection