<?php $__env->startSection('title', 'Listar Processos'); ?>

<?php $__env->startSection('content'); ?>


  <table id="table" class="mdl-data-table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Número Processual</th>
                  <th>Natureza</th>
                  <th>Tribunal</th>
                  <th>Vara</th>
                  <th>Opções</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Número Processual</th>
                  <th>Natureza</th>
                  <th>Tribunal</th>
                  <th>Vara</th>
                  <th>Opções</th>
              </tr>
          </tfoot>
          <tbody>

              <?php $__currentLoopData = $processes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $process): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                        <td><?php echo e($process->numero_processual); ?></td>
                        <td><?php echo e($process->natureza); ?></td>
                        <td><?php echo e($process->tribunal); ?></td>
                        <td><?php echo e($process->vara); ?></td>
                        <td><i class="fa fa-edit"></i><i class="fa fa-trash"></i></td>
                  </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </tbody>
      </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('process.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>