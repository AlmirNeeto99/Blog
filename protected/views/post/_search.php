<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'action' => Yii::app()->createUrl($this->route),
		'method' => 'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id', array('size' => 10, 'maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'categoria_id'); ?>
		<?php echo $form->textField($model, 'categoria_id', array('size' => 10, 'maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'conteudo'); ?>
		<?php echo $form->textArea($model, 'conteudo', array('rows' => 6, 'cols' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'autor'); ?>
		<?php echo $form->textField($model, 'autor', array('size' => 60, 'maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data'); ?>
		<?php echo $form->textField($model, 'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- search-form -->