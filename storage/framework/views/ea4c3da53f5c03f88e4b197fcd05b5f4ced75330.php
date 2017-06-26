<?php $__env->startSection('title', 'Criar Contrario'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('contrarios.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('contrarios.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>