
@extends('clients.layout')

@section('title', 'Criar Clientes')

@section('content')
    {{ Form::open(array('url' => 'clientes/save')) }}

        {{ Form::hidden('id', $client['id']) }}

<?php
 if($document['type'] == "cpf"){ ?>

    {{ Form::radio('type', 'cpf', ['checked' => 'checked'],['id'=> 'cpf']) }}
    {{ Form::label('cpf', 'Física',['class'=> 'radio first','checked' => 'checked']) }}
    {{ Form::radio('type', 'cnpj',false,['id'=> 'cnpj']) }}
    {{ Form::label('cnpj', 'Jurídica',['class'=> 'radio']) }}

    <div class="doc cpf checked">
        <div class="block">
            {{ Form::label('fname', 'Nome') }}
            {{ Form::text('fname', $client['razao_social'],["class" => "form-control"]) }}
        </div>

        <div class="block">
            {{ Form::label('ftype_value', 'CPF') }}
            {{ Form::text('ftype_value', $document['number'],["title" => "Digite um CPF", "class" => "form-control"]) }}
        </div>
    </div>
    <div class="doc cnpj ">
        <div class="block">
            {{ Form::label('jname', 'Razão Social') }}
            {{ Form::text('jname', '',["class" => "form-control"]) }}
        </div>
        <div class="block">
            {{ Form::label('jtype_value', 'CNPJ') }}
            {{ Form::text('jtype_value', '',["title" => "Digite um CNPJ", "class" => "form-control"]) }}
        </div>
    </div>
<?php
 }
 else{ ?>
    {{ Form::radio('type', 'cpf', false,['id'=> 'cpf']) }}
    {{ Form::label('cpf', 'Física',['class'=> 'radio first','checked' => 'checked']) }}
    {{ Form::radio('type', 'cnpj',['checked' => 'checked'],['id'=> 'cnpj']) }}
    {{ Form::label('cnpj', 'Jurídica',['class'=> 'radio']) }}

    <div class="doc cpf ">
        <div class="block">
            {{ Form::label('fname', 'Nome') }}
            {{ Form::text('fname', '',["class" => "form-control"]) }}
        </div>

        <div class="block">
            {{ Form::label('ftype_value', 'CPF') }}
            {{ Form::text('ftype_value', '',["title" => "Digite um CPF", "class" => "form-control"]) }}
        </div>
    </div>
    <div class="doc cnpj checked">
        <div class="block">
            {{ Form::label('jname', 'Razão Social') }}
            {{ Form::text('jname', $client['razao_social'],["class" => "form-control"]) }}
        </div>
        <div class="block">
            {{ Form::label('jtype_value', 'CNPJ') }}
            {{ Form::text('jtype_value', $document['number'],["title" => "Digite um CNPJ", "class" => "form-control"]) }}
        </div>
    </div>

 <?php
 }
?>





        <div class="block address">

            {{ Form::label('', 'Endereço') }}

            {{ Form::text('logradouro',$client['logradouro'],["class" => "form-control", "placeholder" => "Rua"]) }}

            <div class="inline first">
                {{ Form::text('numero',$client['numero'],["class" => "form-control s1", "placeholder" => "Número"]) }}
            </div>
            <div class="inline">
                {{ Form::text('complemento',$client['complemento'],["class" => "form-control s2", "placeholder" => "Complemento"]) }}
            </div>


        {{ Form::text('bairro',$client['bairro'],["class" => "form-control", "placeholder" => "Bairro"]) }}

        {{ Form::text('cidade',$client['cidade'],["class" => "form-control", "placeholder" => "Cidade"]) }}


            <select class="selectpicker s1" data-live-search=true title="{{$client['estado']}}" name="estado">
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
        </div>

        <div class="block">
            {{ Form::label('caixa_postal', 'Caixa Postal') }}
            {{ Form::text('caixa_postal',$client['caixa_postal'],["class" => "form-control"]) }}
        </div>

        <div class="block">

        {{ Form::label('cep', 'CEP') }}
        {{ Form::text('cep',$client['cep'],["class" => "form-control"]) }}

            {{ Form::text('banco',$client['banco'],["class" => "form-control s2", "placeholder" => "Banco"]) }}
            {{ Form::text('agencia',$client['agencia'],["class" => "form-control s1", "placeholder" => "Agência"]) }}
            {{ Form::text('conta',$client['conta'],["class" => "form-control s1", "placeholder" => "Conta"]) }}
        </div>

        {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}

    {{ Form::close() }}
@endsection