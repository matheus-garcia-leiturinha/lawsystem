<?php echo e(Form::open(array('url' => 'advogados/save',"class" => "advocates"))); ?>


    <div class="">

        <div class="tipos">
            <?php echo e(Form::radio('tipo', '1',false,['id'=> 'adv_interno'])); ?>

            <?php echo e(Form::radio('tipo', '2',false,['id'=> 'adv_contrario' ])); ?>

        </div>

    </div>

    <div class="">
        <div class="tipos">
            <?php echo e(Form::radio('tipo', '3',false,['id'=> 'adv_participante' ])); ?>

        </div>
    </div>

    <?php echo e(Form::label('nome', 'Nome')); ?>

    <?php echo e(Form::Text('nome', '',["class" => "form-control"])); ?>


    <?php echo e(Form::label('oab', 'OAB')); ?>

    <?php echo e(Form::Text('oab', '',["class" => "form-control"])); ?>


    <?php echo e(Form::label('telefone', 'Telefone')); ?>

    <?php echo e(Form::Text('telefone', '',["class" => "form-control"])); ?>


    <?php echo e(Form::label('email', 'E-Mail')); ?>

    <?php echo e(Form::Text('email', '',["class" => "form-control","title" => "Digite um e-mail no formato: joe.dane@email.com","placeholder" => "joe.dane@email.com"])); ?>


    <br/>
    <?php echo e(Form::submit('Enviar',["class"=>'btn btn-default'])); ?>

<?php echo e(Form::close()); ?>

