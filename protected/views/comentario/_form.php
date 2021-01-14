<?php
/* @var $this ComentarioController */
/* @var $model Comentario */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'comentario-form',
		'enableAjaxValidation' => false,
		"method" => 'post',
		'action' => Yii::app()->createUrl("comentario/create")
	)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<h5 class="text-danger">
			Você está comentando no post #<?= $post ?>
		</h5>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model, 'post_id', array('size' => 10, 'maxlength' => 10, 'value' => $post)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'texto'); ?>
		<?php echo $form->textField($model, 'texto', array('size' => 60, 'maxlength' => 150, 'class' => 'form-control')); ?>
		<?php echo $form->error($model, 'texto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'autor'); ?>
		<?php echo $form->textField($model, 'autor', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
		<?php echo $form->error($model, 'autor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Comentar' : 'Salvar', array('class' => 'btn btn-outline-conexa')); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->