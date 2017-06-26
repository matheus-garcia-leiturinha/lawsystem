<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type='text/css'>

        <link rel="stylesheet" href="<?php echo e(asset('/css/home.css')); ?>">

    </head>
    <body>

        <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

    </body>
</html>
