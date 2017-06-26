<?php $__env->startSection('title', 'Criar Trinunal'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo e(Form::open(array('url' => 'tribunais/save'))); ?>


       <?php echo e(Form::label('id', 'Numero')); ?>

       <?php echo e(Form::Text('id', '',["class" => "form-control"])); ?>


       <?php echo e(Form::label('nome', 'Nome Tribunal')); ?>

       <?php echo e(Form::Text('nome', '',["class" => "form-control"])); ?>


       
       

    <select class="selectpicker s1" data-live-search=true title="Estado" name="estado">
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

       <?php echo e(Form::submit('Enviar',["class"=>'btn btn-default'])); ?>

    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('tribunais.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>