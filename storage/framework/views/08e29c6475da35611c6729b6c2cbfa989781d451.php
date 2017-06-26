<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title'); ?></title>

        <script src="<?php echo e(asset('/lib/js/jquery-3.2.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/lib/js/bootstrap-select.min.js')); ?>"></script>

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="<?php echo e(asset('/js/lib/html5shiv.min.js')); ?>"></script>
            <script src="<?php echo e(asset('/js/lib/respond.min.js')); ?>"></script>
        <![endif]-->

        <?php echo $__env->yieldContent('styles'); ?>



        <link rel="stylesheet" href="<?php echo e(asset('/frameworks/jquery-ui/jquery-ui.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('/css/lib/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('/css/lib/bootstrap-theme.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('/css/datatables.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('/frameworks/bootstrap-select/bootstrap-select.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('/frameworks/material/dataTables.material.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('/frameworks/material/material.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('/frameworks/datetimepicker/build/css/bootstrap-datetimepicker.min.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('/css/layout.css')); ?>">
    </head>

    <body>

        <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="content">

            <div class="flash-message">
                <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if(Session::has('alert-' . $msg)): ?>

                  <p class="alert alert-<?php echo e($msg); ?>"><?php echo e(Session::get('alert-' . $msg)); ?> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div> <!-- end .flash-message -->

            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <script src="<?php echo e(asset('/frameworks/jquery-ui/jquery-ui.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/lib/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/datatables.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('/frameworks/inputmask/jquery.inputmask.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('/frameworks/moment/min/moment.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/frameworks/datetimepicker/build/js/bootstrap-datetimepicker.min.js')); ?>"></script>

        <?php echo $__env->yieldContent('scripts'); ?>

    </body>

</html>