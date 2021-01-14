<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
?>
<div class="row">
	<div class="col-12 col-md-6 mx-auto">
		<h1 class="text-center">Login</h1>
		<?php $this->widget("Divider") ?>

		<p>Preencha os campos abaixo com seus dados de login:</p>
	</div>
</div>
<div class="row">

	<div class="col-12 col-md-6 mx-auto">

		<div class="form">
			<?php $form = $this->beginWidget('CActiveForm', array(
				'id' => 'login-form',
				'enableClientValidation' => true,
				'clientOptions' => array(
					'validateOnSubmit' => true,
				),
			)); ?>

			<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

			<div class="row">
				<?php echo $form->labelEx($model, 'username'); ?>
				<?php echo $form->textField($model, 'username', array("class" => 'form-control')); ?>
				<?php echo $form->error($model, 'username'); ?>
			</div>

			<div class="row">

				<?php echo $form->labelEx($model, 'password'); ?>
				<?php echo $form->passwordField($model, 'password', array("class" => 'form-control')); ?>
				<?php echo $form->error($model, 'password'); ?>
			</div>

			<div class="row rememberMe">
				<div class="custom-control custom-checkbox">
					<?php echo $form->checkBox($model, 'rememberMe', array("class" => 'custom-control-input')); ?>
					<?php echo $form->label($model, 'rememberMe', array("class" => "custom-control-label")); ?>
				</div>

				<?php echo $form->error($model, 'rememberMe'); ?>
			</div>

			<div class="row buttons">
				<div class="col-12 text-center">
					<?php echo CHtml::submitButton('Login', array("class" => "btn btn-outline-conexa")); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>
		</div><!-- form -->
	</div>
</div>