<?php $__env->startSection('content'); ?>

    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##;
    <?php echo $__env->yieldContent('body'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

	<script src="<?php echo e(asset('/js/advocates.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>