<?php $__env->startSection('title', 'Criar Advogados'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo e(Form::open(array('url' => 'advogados/save'))); ?>


        <?php echo e(Form::hidden('id', $advocate['id'])); ?>

        <?php echo e(Form::label('nome', 'Nome')); ?>

        <?php echo e(Form::Text('nome', $advocate['nome'],["class" => "form-control"])); ?>


        <?php echo e(Form::label('oab', 'OAB')); ?>

        <?php echo e(Form::Text('oab', $advocate['oab'],["class" => "form-control"])); ?>


        <?php echo e(Form::label('telefone', 'Telefone')); ?>

        <?php echo e(Form::Text('telefone', $advocate['telefone'],["class" => "form-control"])); ?>



        <?php echo e(Form::label('email', 'E-Mail')); ?>

        <div class="input-group">
            <span class="input-group-addon">@</span>
            <?php echo e(Form::Text('email', $advocate['email'],["class" => "form-control","title" => "Digite um e-mail no formato: joe.dane@email.com","placeholder" => "joe.dane@email.com"])); ?>

        </div>
        <br/>
        <?php echo e(Form::submit('Enviar',["class"=>'btn btn-default'])); ?>

    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('advocates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>