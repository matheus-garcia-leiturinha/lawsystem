<?php $__env->startSection('title', 'Listar Contrarios'); ?>

<?php $__env->startSection('content'); ?>

    <a type="button" class="btn btn-primary btn-lg" href=<?php echo e(url('/contrarios/criar')); ?> >Criar Contrarios</a>



    <table id="table" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Nome</th>
            <th>CPF/CNPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Nome</th>
            <th>CPF/CNPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Opções</th>

        </tr>
        </tfoot>
        <tbody>

        <?php $__currentLoopData = $contrarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($contrario->nome); ?></td>
                <td><?php echo e($contrario->documents->number); ?></td>
                <td><?php echo e($contrario->telefone); ?></td>
                <td><?php echo e($contrario->email); ?></td>
                <td>
                    <a href="<?php echo e(url('/contrarios/editar/'.$contrario->id)); ?>"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(url('/contrarios/deletar/'.$contrario->id)); ?>"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('contrarios.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>