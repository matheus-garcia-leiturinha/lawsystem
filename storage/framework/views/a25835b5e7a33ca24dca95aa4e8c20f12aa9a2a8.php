<?php $__env->startSection('title', 'Criar Vara'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo e(Form::open(array('url' => 'varas/save'))); ?>


       <?php echo e(Form::label('id', 'Numero')); ?>

       <?php echo e(Form::Text('id', '',["class" => "form-control"])); ?>


       <?php echo e(Form::label('nome', 'Nome da Vara Hahahaha')); ?>

       <?php echo e(Form::Text('nome', '',["class" => "form-control"])); ?>


       <?php echo e(Form::label('cidade', 'Cidade')); ?>

       <?php echo e(Form::Text('cidade', '',["class" => "form-control"])); ?>


       <?php echo e(Form::submit('Enviar',["class"=>'btn btn-default'])); ?>

    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('varas.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>