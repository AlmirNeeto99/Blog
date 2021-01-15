<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'post-form',
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="col-12">
			<?php echo $form->labelEx($model, 'categoria_id'); ?>
			<?php echo $form->dropDownList($model, 'categoria_id', $categorias, array("class" => "form-control")) ?>
			<?php echo $form->error($model, 'categoria_id'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<?php echo $form->labelEx($model, 'titulo'); ?>
			<?php echo $form->textField($model, 'titulo', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
			<?php echo $form->error($model, 'titulo'); ?>
		</div>

	</div>

	<div class="row">
		<div class="col-12">
			<?php echo $form->labelEx($model, 'conteudo'); ?>
			<?php echo $form->textArea($model, 'conteudo', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
			<?php echo $form->error($model, 'conteudo'); ?>
		</div>

	</div>

	<div class="row">
		<div class="col-12">
			<?php echo $form->labelEx($model, 'autor'); ?>
			<?php echo $form->textField($model, 'autor', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
			<?php echo $form->error($model, 'autor'); ?>
		</div>

	</div>

	<div class="row">
		<div class="col-12 my-1">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Cadastrar' : 'Salvar', array('class' => 'btn btn-outline-conexa')); ?>
		</div>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->