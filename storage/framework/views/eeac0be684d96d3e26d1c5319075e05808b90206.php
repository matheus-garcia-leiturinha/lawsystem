<?php $__env->startSection('modal'); ?>
<?php echo e(Form::open(array('url' => 'advogados/save'))); ?>


    <?php echo e(Form::label('nome', 'Nome')); ?>

    <?php echo e(Form::Text('nome', '',["class" => "form-control"])); ?>


    <?php echo e(Form::label('oab', 'OAB')); ?>

    <?php echo e(Form::Text('oab', '',["class" => "form-control"])); ?>


    <?php echo e(Form::label('telefone', 'Telefone')); ?>

    <?php echo e(Form::Text('telefone', '',["class" => "form-control"])); ?>


    <?php echo e(Form::label('email', 'E-Mail')); ?>

    <div class="input-group">
        <span class="input-group-addon">@</span>
        <?php echo e(Form::Text('email', '',["class" => "form-control","title" => "Digite um e-mail no formato: joe.dane@email.com","placeholder" => "joe.dane@email.com"])); ?>

    </div>
    <br/>
    <?php echo e(Form::submit('Enviar',["class"=>'btn btn-default'])); ?>

<?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>