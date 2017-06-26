<?php $__env->startSection('title', 'Listar Tribunais'); ?>

<?php $__env->startSection('content'); ?>


  <table id="table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Número</th>
                  <th>Nome</th>
                  <th>Estado</th>
                  <th>Opções</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Número</th>
                  <th>Nome</th>
                  <th>Estado</th>
                  <th>Opções</th>
              </tr>
          </tfoot>
          <tbody>

          <?php $__currentLoopData = $tribunais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tribunal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                    <td><?php echo e($tribunal->id); ?></td>
                    <td><?php echo e($tribunal->nome); ?></td>
                    <td><?php echo e($tribunal->estado); ?></td>
                    <td>
                        <a href="<?php echo e(url('/tribunais/editar/'.$tribunal->id)); ?>"><i class="fa fa-edit"></i></a>
                        <a href="<?php echo e(url('/tribunais/deletar/'.$tribunal->id)); ?>"><i class="fa fa-trash"></i></a>
                    </td>
              </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </tbody>
      </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tribunais.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>