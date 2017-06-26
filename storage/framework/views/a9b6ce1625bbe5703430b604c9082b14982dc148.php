<?php $__env->startSection('title', 'Listar Depositos'); ?>

<?php $__env->startSection('content'); ?>

    <table id="table" class="mdl-data-table" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Tipo</th>
            <th>Opções</th>

        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Tipo</th>
            <th>Opções</th>


        </tr>
        </tfoot>
        <tbody>

        <?php $__currentLoopData = $depositos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($deposito->type); ?></td>
                <td>
                    <a href="<?php echo e(url('/depositos/editar/'.$deposito->id)); ?>"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(url('/depositos/deletar/'.$deposito->id)); ?>"><i class="fa fa-trash"></i></a>
                </td>


            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('depositos.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>