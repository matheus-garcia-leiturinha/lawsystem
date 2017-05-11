
@extends('contrarios.layout')

@section('title', 'Criar Contrario')

@section('content')
    {{ Form::open(array('url' => 'contrarios/save')) }}

    {{ Form::hidden('id', $contrario['id']) }}

    <?php
    if($document['type'] == "cpf"){ ?>

    {{ Form::radio('type', 'cpf', ['checked' => 'checked'],['id'=> 'cpf']) }}
    {{ Form::label('cpf', 'Física',['class'=> 'radio first','checked' => 'checked']) }}
    {{ Form::radio('type', 'cnpj',false,['id'=> 'cnpj']) }}
    {{ Form::label('cnpj', 'Jurídica',['class'=> 'radio']) }}

    <div class="doc cpf checked">
        <div class="block">
            {{ Form::label('fname', 'Nome') }}
            {{ Form::text('fname', $contrario['nome'],["class" => "form-control"]) }}
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
            {{ Form::text('jname', $contrario['nome'],["class" => "form-control"]) }}
        </div>
        <div class="block">
            {{ Form::label('jtype_value', 'CNPJ') }}
            {{ Form::text('jtype_value', $document['number'],["title" => "Digite um CNPJ", "class" => "form-control"]) }}
        </div>
    </div>

    <?php
    }
    ?>



    <div class="block">
        {{ Form::label('telefone', 'Telefone') }}
        {{ Form::Text('telefone', $contrario['telefone'],["class" => "form-control"]) }}


    </div>

    {{ Form::label('email', 'E-Mail') }}
    <div class="input-group">
        <span class="input-group-addon">@</span>
        {{ Form::Text('email', $contrario['email'],["class" => "form-control","title" => "Digite um e-mail no formato: joe.dane@email.com","placeholder" => "joe.dane@email.com"]) }}
    </div>
    <br>

    <div class="block address">

        {{ Form::label('', 'Endereço') }}

        {{ Form::text('logradouro',$contrario['logradouro'],["class" => "form-control", "placeholder" => "Rua"]) }}

        <div class="inline first">
            {{ Form::text('numero',$contrario['numero'],["class" => "form-control s1", "placeholder" => "Número"]) }}
        </div>
        <div class="inline">
            {{ Form::text('complemento',$contrario['complemento'],["class" => "form-control s2", "placeholder" => "Complemento"]) }}
        </div>


        {{ Form::text('bairro',$contrario['bairro'],["class" => "form-control", "placeholder" => "Bairro"]) }}

        {{ Form::text('cidade',$contrario['cidade'],["class" => "form-control", "placeholder" => "Cidade"]) }}


        <select class="selectpicker s1" data-live-search=true title="{{$contrario['estado']}}" name="estado">
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
    </div>

    <div class="block">
        {{ Form::label('caixa_postal', 'Caixa Postal') }}
        {{ Form::text('caixa_postal',$contrario['caixa_postal'],["class" => "form-control"]) }}
    </div>

    <div class="block">

        {{ Form::label('cep', 'CEP') }}
        {{ Form::text('cep',$contrario['cep'],["class" => "form-control"]) }}

    </div>

    <div class="block">

        {{ Form::label('pis', 'PIS') }}
        {{ Form::text('pis',$contrario['pis'],["class" => "form-control s2"]) }}

    </div>

    <div class="block">

        {{ Form::label('ctps', 'CTPS') }}


        {{ Form::text('ctps_numero',$contrario['ctps_numero'],["class" => "form-control s2", "placeholder" => "Número"]) }}
        {{ Form::text('ctps_serie',$contrario['ctps_serie'],["class" => "form-control s1", "placeholder" => "Série"]) }}
        {{ Form::text('ctps_estado',$contrario['ctps_estado'],["class" => "form-control s1", "placeholder" => "Estado"]) }}
    </div>


    <div class="block">

        {{ Form::label('mae', 'Nome da Mãe') }}
        {{ Form::text('mae',$contrario['nome_mae'],["class" => "form-control"]) }}

    </div>

    {{ Form::submit('Enviar',["class"=>'btn btn-default']) }}

    {{ Form::close() }}

    <script>
        $("option[value={{$contrario['estado']}}]").attr('selected','selected');
    </script>
@endsection