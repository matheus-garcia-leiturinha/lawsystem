<?php echo e(Form::open(array('url' => 'contrarios/save',"class" => "contrarios"))); ?>


<?php echo e(Form::radio('type', 'cpf', ['checked' => 'checked'],['id'=> 'contra_cpf'])); ?>

<?php echo e(Form::label('contra_cpf', 'Física',['class'=> 'radio first','checked' => 'checked'])); ?>

<?php echo e(Form::radio('type', 'cnpj',false,['id'=> 'contra_cnpj'])); ?>

<?php echo e(Form::label('contra_cnpj', 'Jurídica',['class'=> 'radio'])); ?>



<div class="doc cpf checked">
    <div class="block">
        <?php echo e(Form::label('fname', 'Nome')); ?>

        <?php echo e(Form::text('fname', '',["class" => "form-control"])); ?>

    </div>

    <div class="block">
        <?php echo e(Form::label('ftype_value', 'CPF')); ?>

        <?php echo e(Form::text('ftype_value', '',["title" => "Digite um CPF", "class" => "form-control"])); ?>

    </div>
</div>

<div class="doc cnpj">
    <div class="block">
        <?php echo e(Form::label('jname', 'Razão Social')); ?>

        <?php echo e(Form::text('jname', '',["class" => "form-control"])); ?>

    </div>
    <div class="block">
        <?php echo e(Form::label('jtype_value', 'CNPJ')); ?>

        <?php echo e(Form::text('jtype_value', '',["title" => "Digite um CNPJ", "class" => "form-control"])); ?>

    </div>
</div>

<div class="block">
    <?php echo e(Form::label('telefone', 'Telefone')); ?>

    <?php echo e(Form::Text('telefone', '',["class" => "form-control"])); ?>

</div>
<div class="block">
    <?php echo e(Form::label('email', 'E-Mail')); ?>

    <?php echo e(Form::Text('email', '',["class" => "form-control"])); ?>



</div>

<div class="block address">

    <?php echo e(Form::label('', 'Endereço')); ?>


    <?php echo e(Form::text('logradouro','',["class" => "form-control", "placeholder" => "Rua"])); ?>


    <div class="inline first">
        <?php echo e(Form::text('numero','',["class" => "form-control s1", "placeholder" => "Número"])); ?>

    </div>
    <div class="inline">
        <?php echo e(Form::text('complemento','',["class" => "form-control s2", "placeholder" => "Complemento"])); ?>

    </div>


    <?php echo e(Form::text('bairro','',["class" => "form-control", "placeholder" => "Bairro"])); ?>


    <?php echo e(Form::text('cidade','',["class" => "form-control", "placeholder" => "Cidade"])); ?>



    <select class="selectpicker s1 no-search" data-live-search=true title="Estado" name="estado">
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


    <?php echo e(Form::text('cep','',["class" => "form-control","placeholder" => "CEP"])); ?>

</div>

<div class="block">
    <?php echo e(Form::label('caixa_postal', 'Caixa Postal')); ?>

    <?php echo e(Form::text('caixa_postal','',["class" => "form-control"])); ?>

</div>



<div class="doc cpf checked">

    <?php echo e(Form::label('pis', 'PIS')); ?>


    <div class="block">
        <?php echo e(Form::number('pis','',["class" => "form-control s2"])); ?>

    </div>

</div>

<div  class="doc cpf checked">

    <?php echo e(Form::label('ctps', 'CTPS')); ?>


    <div class="block">

        <?php echo e(Form::number('ctps_numero','',["class" => "form-control ", "placeholder" => "Número"])); ?>

        <?php echo e(Form::number('ctps_serie','',["class" => "form-control s1", "placeholder" => "Série"])); ?>

        <?php echo e(Form::text('ctps_estado','',["class" => "form-control s1", "placeholder" => "Estado"])); ?>


    </div>
</div>


<div  class="doc cpf checked">

    <?php echo e(Form::label('mae', 'Nome da Mãe')); ?>

    <?php echo e(Form::text('mae','',["class" => "form-control"])); ?>


</div>

<?php echo e(Form::submit('Enviar',["class"=>'btn btn-default'])); ?>


<?php echo e(Form::close()); ?>