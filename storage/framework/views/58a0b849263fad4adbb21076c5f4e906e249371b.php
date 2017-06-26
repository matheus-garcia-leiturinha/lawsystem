<?php $__env->startSection('title', 'Criar Pericia'); ?>


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('pericias.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pericias.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>