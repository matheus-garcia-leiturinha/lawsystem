<?php $__env->startSection('title', 'Criar Clientes'); ?>

<?php $__env->startSection('content'); ?>
   <?php echo $__env->make('clients.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('clients.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>