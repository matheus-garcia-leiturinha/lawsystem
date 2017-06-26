<?php $__env->startSection('title', 'Criar Processos'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo e(Form::open(array('url' => 'processos/save',"class" => "processos"))); ?>


        <div class="block">
            <?php echo e(Form::label('cliente', 'Cliente')); ?>

            <a class="create-new" data-toggle="modal" data-target="#modal_client">Criar novo</a>
             <select class="selectpicker" data-live-search=true title=" " name="cliente" id="cliente">
                <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option title="<?php echo e($client['razao_social']); ?>" value="<?php echo e($client['id']); ?>"><?php echo e($client['razao_social']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
        </div>

        <div class="block">

            <?php echo e(Form::label('', 'Polo')); ?>


            <div class="polos">
                <?php echo e(Form::radio('polo', '1', ['checked' => 'checked'],['id'=> 'ativo'])); ?>

                <?php echo e(Form::label('ativo', 'Ativo',['class'=> 'radio first','checked' => 'checked'])); ?>

                <?php echo e(Form::radio('polo', '2',false,['id'=> 'passivo'])); ?>

                <?php echo e(Form::label('passivo', 'Passivo',['class'=> 'radio'])); ?>

            </div>

        </div>

        <div class="block">

            <?php echo e(Form::label('', 'Tipo do Processo')); ?>


            <div class="tipos">
                <?php echo e(Form::radio('tipo', '1', ['checked' => 'checked'],['id'=> 'tipo1'])); ?>

                <?php echo e(Form::label('tipo1', 'Tipo 1',['class'=> 'radio first column1','checked' => 'checked'])); ?>

                <?php echo e(Form::radio('tipo', '2',false,['id'=> 'tipo2'])); ?>

                <?php echo e(Form::label('tipo2', 'Tipo 2',['class'=> 'radio column1'])); ?>

            </div>

        </div>

        <div class="block">

            <div class="tipos">
                <?php echo e(Form::radio('tipo', '3',false,['id'=> 'tipo3'])); ?>

                <?php echo e(Form::label('tipo3', 'Tipo 3',['class'=> 'first radio'])); ?>

                <?php echo e(Form::radio('tipo', '4',false,['id'=> 'tipo4'])); ?>

                <?php echo e(Form::label('tipo4', 'Tipo 4',['class'=> 'radio'])); ?>

            </div>

        </div>

        <div class="block">
            <?php echo e(Form::label('adv_responsavel', 'Quem abriu o processo?')); ?>


            <a class="create-new" data-toggle="modal" data-target="#modal_adv">Criar novo</a>
             <select class="selectpicker" data-live-search=true title=" " name="adv_responsavel" id="adv_responsavel">
                <?php $__currentLoopData = $advogados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option title="<?php echo e($adv['nome']); ?>" value="<?php echo e($adv['id']); ?>"><?php echo e($adv['nome']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>

        </div>

        <div class="block">
            <?php echo e(Form::label('number', 'Número do processo')); ?>

            <?php echo e(Form::number('number', '',["class" => "form-control"])); ?>

        </div>

        

            

            
                
                
                
                
            

        

        
            
             
                
                    
                
             
        

        
            
             
                
                    
                
             
        

        <div class="block">
            <?php echo e(Form::label('adv_terceiro', 'Advogado contrário')); ?>

            <a class="create-new" data-toggle="modal" data-target="#modal_adv">Criar novo</a>
            <select class="selectpicker" data-live-search=true title=" " name="adv_terceiro" id="adv_terceiro">
                <?php $__currentLoopData = $advogados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option title="<?php echo e($adv['nome']); ?>" value="<?php echo e($adv['id']); ?>"><?php echo e($adv['nome']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>


        <div class="block">
            <?php echo e(Form::label('contrario', 'Parte contrária')); ?>

            <a class="create-new" data-toggle="modal" data-target="#modal_contrario">Criar novo</a>
            <select class="selectpicker" data-live-search=true title=" " name="contrario" id="contrario">
                <?php $__currentLoopData = $contrarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option title="<?php echo e($contrario['nome']); ?>" value="<?php echo e($contrario['id']); ?>"><?php echo e($contrario['nome']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>



        <div class="block">
            <?php echo e(Form::label('valor', 'Valor da causa')); ?>

            <?php echo e(Form::number('valor', '',["class" => "form-control"])); ?>

        </div>

        <div class="block datepickerblock" id="date">
            <?php echo e(Form::label('data_ajuizamento', 'Data do Ajuizamento')); ?>

            <?php echo e(Form::text('data_ajuizamento', '',["class" => "date form-control",'id' => 'datetimepicker'])); ?>

        </div>

        <div class="block">

            <?php echo e(Form::label('', 'Audiência inaugural')); ?>


            <div class="audiencias">
                <?php echo e(Form::radio('audiencia', 1, false,['id'=> 'true'])); ?>

                <?php echo e(Form::label('true', 'Sim',['class'=> 'radio first s0','checked' => 'checked'])); ?>

                <?php echo e(Form::radio('audiencia', 2,['checked' => 'checked'],['id'=> 'false'])); ?>

                <?php echo e(Form::label('false', 'Não',['class'=> 'radio s0'])); ?>

            </div>

        </div>

        <div class="block datepickerblock data_audiencia_inaugural">
            <?php echo e(Form::label('data_audiencia_inaugural', 'Data da audiência inaugural')); ?>

            <?php echo e(Form::text('data_audiencia_inaugural', '',["class" => "date form-control",'id' => 'datetimepicker2'])); ?>

        </div>

        <div class="block">

            <?php echo e(Form::label('', 'Motivo de perícia')); ?>


            <div class="pericias">
                <?php echo e(Form::radio('pericias', 1, false,['id'=> 'true1'])); ?>

                <?php echo e(Form::label('true1', 'Sim',['class'=> 'radio first s0','checked' => 'checked'])); ?>

                <?php echo e(Form::radio('pericias', 2,['checked' => 'checked'],['id'=> 'false1'])); ?>

                <?php echo e(Form::label('false1', 'Não',['class'=> 'radio s0'])); ?>

            </div>

        </div>

        <div class="pericias-component">
            <div class="block pericia">
                <?php echo e(Form::label('pericia', 'Natureza da pericia')); ?>

                <a class="create-new" data-toggle="modal" data-target="#modal_pericia">Criar novo</a>
                <select class="selectpicker" data-live-search=true title=" " name="pericia" id="pericia">
                    <?php $__currentLoopData = $pericias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pericia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option title="<?php echo e($pericia['type']); ?>" value="<?php echo e($pericia['id']); ?>"><?php echo e($pericia['type']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="block pericia">
                <?php echo e(Form::label('value_pericia', 'Honorários prévios de perícia')); ?>

                <?php echo e(Form::number('value_pericia', '',["class" => "form-control"])); ?>

            </div>

            <div class="block pericia">
                <a onclick="processo.add('pericia');">Adicionar</a>
            </div>
        </div>

        <div class="block">

            <?php echo e(Form::label('', 'Depósito')); ?>


            <div class="depositos">
                <?php echo e(Form::radio('depositos', 1, false,['id'=> 'true2'])); ?>

                <?php echo e(Form::label('true2', 'Sim',['class'=> 'radio first s0','checked' => 'checked'])); ?>

                <?php echo e(Form::radio('depositos', 2,['checked' => 'checked'],['id'=> 'false2'])); ?>

                <?php echo e(Form::label('false2', 'Não',['class'=> 'radio s0'])); ?>

            </div>

        </div>

        <div class="depositos-component">
            <div class="block deposito">
                <?php echo e(Form::label('deposito', 'Motivo do deposito')); ?>

                <a class="create-new" data-toggle="modal" data-target="#modal_deposito">Criar novo</a>
                <select class="selectpicker" data-live-search=true title=" " name="deposito" id="deposito">
                    <?php $__currentLoopData = $depositos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option title="<?php echo e($deposito['type']); ?>" value="<?php echo e($deposito['id']); ?>"><?php echo e($deposito['type']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="block deposito">
                <?php echo e(Form::label('value_deposito', 'Valor do depósito')); ?>

                <?php echo e(Form::number('value_deposito', '',["class" => "form-control"])); ?>

            </div>

            <div class="block deposito">
                <a onclick="processo.add('deposito');">Adicionar</a>
            </div>
        </div>


        <div class="block">

            <?php echo e(Form::label('', 'Recolhimento')); ?>


            <div class="custos">
                <?php echo e(Form::radio('custos', 1, false,['id'=> 'true3'])); ?>

                <?php echo e(Form::label('true3', 'Sim',['class'=> 'radio first s0','checked' => 'checked'])); ?>

                <?php echo e(Form::radio('custos', 2,['checked' => 'checked'],['id'=> 'false3'])); ?>

                <?php echo e(Form::label('false3', 'Não',['class'=> 'radio s0'])); ?>

            </div>

        </div>

        <div class="custos-component">
            <div class="block custo">
                <?php echo e(Form::label('custo', 'Motivo do Recolhimento')); ?>

                <a class="create-new" data-toggle="modal" data-target="#modal_custo">Criar novo</a>
                <select class="selectpicker" data-live-search=true title=" " name="custo" id="custo">
                    <?php $__currentLoopData = $custos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $custo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option title="<?php echo e($custo['type']); ?>" value="<?php echo e($custo['id']); ?>"><?php echo e($custo['type']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="block custo">
                <?php echo e(Form::label('value_custo', 'Valor do Recolhimento')); ?>

                <?php echo e(Form::number('value_custo', '',["class" => "form-control"])); ?>

            </div>

            <div class="block custo">
                <a onclick="processo.add('custo');">Adicionar</a>
            </div>
        </div>



        <div class="block">

            <?php echo e(Form::label('', 'Depósito Judicial')); ?>


            <div class="deposito_judicial">
                <?php echo e(Form::radio('deposito_judicial', 1, false,['id'=> 'true4'])); ?>

                <?php echo e(Form::label('true4', 'Sim',['class'=> 'radio first s0','checked' => 'checked'])); ?>

                <?php echo e(Form::radio('deposito_judicial', 2,['checked' => 'checked'],['id'=> 'false4'])); ?>

                <?php echo e(Form::label('false4', 'Não',['class'=> 'radio s0'])); ?>

            </div>

        </div>

        <div class="block">
            <?php echo e(Form::label('ocorrencia_inaugural', 'Ocorrência Inaugural')); ?>

            <?php echo e(Form::textarea('ocorrencia_inaugural', '',["class" => "form-control"])); ?>

        </div>

        <div class="pedidos-component">
            <div class="block pedido">
                <?php echo e(Form::label('pedidos', 'Pedidos')); ?>

                <select class="selectpicker" data-live-search=true title=" " name="pedido" id="pedido">
                    <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option title="<?php echo e($pedido['type']); ?>" value="<?php echo e($pedido['id']); ?>"><?php echo e($pedido['type']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="block pedido">
                <a onclick="processo.add('pedido');">Adicionar</a>
            </div>
        </div>

        <?php echo e(Form::submit('Enviar')); ?>

    <?php echo e(Form::close()); ?>


<div class="modal fade" id="modal_adv" tabindex="-1" role="dialog" aria-labelledby="modal_advModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_advModalLabel">Cadastrar Advogado</h4>
      </div>
      <div class="modal-body">
        <?php echo $__env->make('advocates.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	    <script src="<?php echo e(asset('/js/advocates.js')); ?>"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_client" tabindex="-1" role="dialog" aria-labelledby="modal_clientModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_clienteModalLabel">Cadastrar Cliente</h4>
      </div>
      <div class="modal-body">
        <?php echo $__env->make('clients.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	    <script src="<?php echo e(asset('/js/clients.js')); ?>"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_contrario" tabindex="-1" role="dialog" aria-labelledby="modal_contrarioModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_contrarioModalLabel">Cadastrar Parte Contrária</h4>
      </div>
      <div class="modal-body">
        <?php echo $__env->make('contrarios.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	    <script src="<?php echo e(asset('/js/contrarios.js')); ?>"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_pericia" tabindex="-1" role="dialog" aria-labelledby="modal_periciaModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_periciaModalLabel">Cadastrar Natureza de Perícia</h4>
      </div>
      <div class="modal-body">
        <?php echo $__env->make('pericias.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	    <script src="<?php echo e(asset('/js/pericias.js')); ?>"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_deposito" tabindex="-1" role="dialog" aria-labelledby="modal_depositoModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_depositoModalLabel">Cadastrar Motivo do Depósito</h4>
      </div>
      <div class="modal-body">
        <?php echo $__env->make('depositos.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	    <script src="<?php echo e(asset('/js/depositos.js')); ?>"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('process.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>