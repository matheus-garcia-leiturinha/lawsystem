<?php $__env->startSection('title', 'Listar Advogados'); ?>

<?php $__env->startSection('content'); ?>


  <table id="table" class="mdl-data-table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Nome</th>
                  <th>OAB</th>
                  <th>Telefone</th>
                  <th>E-mail</th>
                  <th>Opções</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Nome</th>
                  <th>OAB</th>
                  <th>Telefone</th>
                  <th>E-mail</th>
                  <th>Opções</th>
              </tr>
          </tfoot>
          <tbody>

              <?php $__currentLoopData = $advocates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advocate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                        <td><?php echo e($advocate->nome); ?></td>
                        <td><?php echo e($advocate->oab); ?></td>
                        <td><?php echo e($advocate->telefone); ?></td>
                        <td><?php echo e($advocate->email); ?></td>
                        <td>
                            <a href="<?php echo e(url('/advogados/editar/'.$advocate->id)); ?>"><i class="fa fa-edit"></i></a>
                            <a href="<?php echo e(url('/advogados/deletar/'.$advocate->id)); ?>"><i class="fa fa-trash"></i></a>
                        </td>
                  </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </tbody>
      </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('advocates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>