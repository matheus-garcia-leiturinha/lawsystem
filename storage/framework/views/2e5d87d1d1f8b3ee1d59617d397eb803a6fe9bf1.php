<?php $__env->startSection('title', 'Listar Clientes'); ?>

<?php $__env->startSection('content'); ?>

  <table id="table" class="mdl-data-table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Nome / Razão Social</th>
                  <th>Logradouro</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Tipo do Documento</th>
                  <th>Documento</th>
                  <th>Opções</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Nome / Razão Social</th>
                  <th>Logradouro</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Tipo do Documento</th>
                  <th>Documento</th>
                  <th>Opções</th>
              </tr>
          </tfoot>
          <tbody>

              <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                        <td><?php echo e($client->razao_social); ?></td>
                        <td><?php echo e($client->logradouro); ?></td>
                        <td><?php echo e($client->cidade); ?></td>
                        <td><?php echo e($client->estado); ?></td>
                        <td><?php echo e($client->documents->type); ?></td>
                        <td><?php echo e($client->documents->number); ?></td>
                        <td>
                            <a href="<?php echo e(url('/clientes/editar/'.$client->id)); ?>"><i class="fa fa-edit"></i></a>
                            <a href="<?php echo e(url('/clientes/deletar/'.$client->id)); ?>"><i class="fa fa-trash"></i></a>
                        </td>
                  </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </tbody>
      </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('clients.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>