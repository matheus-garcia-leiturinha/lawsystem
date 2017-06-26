<?php $__env->startSection('title', 'Listar Varas'); ?>

<?php $__env->startSection('content'); ?>

  <table id="table" class="mdl-data-table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Número</th>
                  <th>Nome</th>
                  <th>Cidade</th>
                  <th>Opções</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Número</th>
                  <th>Nome</th>
                  <th>Cidade</th>
                  <th>Opções</th>

              </tr>
          </tfoot>
          <tbody>

              <?php $__currentLoopData = $varas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vara): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($vara->id); ?></td>
                    <td><?php echo e($vara->nome); ?></td>
                    <td><?php echo e($vara->cidade); ?></td>
                    <td>
                        <a href="<?php echo e(url('/varas/editar/'.$vara->id)); ?>"><i class="fa fa-edit"></i></a>
                        <a href="<?php echo e(url('/varas/deletar/'.$vara->id)); ?>"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </tbody>
      </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('varas.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>