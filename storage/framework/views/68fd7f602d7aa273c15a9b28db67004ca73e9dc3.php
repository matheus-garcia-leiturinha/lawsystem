
<?php echo e(Form::open(array('url' => 'pericias/save',"class" => "pericias"))); ?>


<?php echo e(Form::label('type', 'Tipo')); ?>

<?php echo e(Form::Text('type', '',["class" => "form-control"])); ?>


<?php echo e(Form::submit('Enviar',["class"=>'btn btn-default'])); ?>

<?php echo e(Form::close()); ?>