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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'category_id', array('class' => 'label')); ?>
		<?php echo $form->textField($model, 'category_id', array('size' => 10, 'maxlength' => 10, 'class' => 'form-control')); ?>
		<?php echo $form->error($model, 'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'content'); ?>
		<?php echo $form->textArea($model, 'content', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
		<?php echo $form->error($model, 'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'author'); ?>
		<?php echo $form->textField($model, 'author', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
		<?php echo $form->error($model, 'author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'date'); ?>
		<?php echo $form->textField($model, 'date', array('class' => 'form-control')); ?>
		<?php echo $form->error($model, 'date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-outline-danger')); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->