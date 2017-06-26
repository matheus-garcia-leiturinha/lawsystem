<?php $__env->startSection('styles'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('/css/contrarios.css')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##;
    <?php echo $__env->yieldContent('body'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##;

    <script src="<?php echo e(asset('/js/contrarios.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>