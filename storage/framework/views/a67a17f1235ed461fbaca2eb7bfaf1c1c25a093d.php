<?php $__env->startSection("content"); ?>
    <main class="content">
        <div class="title m-b-md">
        </div>

        <div class="block">
            <a href="<?php echo e(url('/processos/criar')); ?>" class="box">

                <i class="icon new"></i>
                <span>Novo Processo</span>
            </a>
            <a href="<?php echo e(url('/processos')); ?>" class="box">
                <i class="icon follow"></i>
                <span>Andamento de Processos</span>
            </a>
            <a href="<?php echo e(url('/reports')); ?>" class="box">
                <i class="icon report"></i>
                <span>Gerar Relatórios</span>
            </a>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>