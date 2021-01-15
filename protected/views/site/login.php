<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= Yii::app()->name ?> - Login</title>
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" type="image/png">
	<link rel="stylesheet" href="<?= Yii::app()->baseUrl ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?= Yii::app()->baseUrl ?>/css/app.css">
	<style>
		body {
			background: url("/images/bg.jpeg");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			overflow: hidden;
		}
	</style>
</head>

<body>
	<main class="container vh-100">
		<div class="row h-100">
			<div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto align-self-center">
				<div class="card shadow border border-conexa-light animate__animated animate__fadeInUp">
					<div class="card-body">
						<div class="row">
							<div class="col-12 text-center">
								<img src="<?= Yii::app()->baseUrl ?>/images/conexa.png" alt="">
							</div>
							<div class="col-12">
								<?php $this->widget("Divider") ?>
								<h3 class="text-center">Login</h3>
								<p class="mb-0 text-center">
									<small>
										Preencha os campos abaixo com seus dados de login:
									</small>
								</p>
							</div>
							<div class="col-12">
								<div class="form">
									<?php $form = $this->beginWidget('CActiveForm', array(
										'id' => 'login-form',
										'enableClientValidation' => true,
										'clientOptions' => array(
											'validateOnSubmit' => true,
										),
									)); ?>
									<p class="text-center">
										<small>
											Campos com <span class="text-danger">*</span> são obrigatórios.
										</small>
									</p>
									<div class="row">
										<div class="col-12 col-md-6 my-1 mx-auto">
											<?php echo $form->labelEx($model, 'username'); ?>
											<?php echo $form->textField($model, 'username', array("class" => 'form-control')); ?>
											<?php echo $form->error($model, 'username', array("class" => 'text-danger')); ?>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-md-6 my-1 mx-auto">
											<?php echo $form->labelEx($model, 'password'); ?>
											<?php echo $form->passwordField($model, 'password', array("class" => 'form-control')); ?>
											<?php echo $form->error($model, 'password', array("class" => 'text-danger')); ?>
										</div>
									</div>
									<div class="row rememberMe">
										<div class="col-12 col-md-6 mx-auto my-2">
											<div class="custom-control custom-checkbox">
												<?php echo $form->checkBox($model, 'rememberMe', array("class" => 'custom-control-input')); ?>
												<?php echo $form->label($model, 'rememberMe', array("class" => "custom-control-label")); ?>
											</div>
											<?php echo $form->error($model, 'rememberMe'); ?>
										</div>
									</div>
									<div class="row buttons">
										<div class="col-12 my-2 text-center">
											<?php echo CHtml::submitButton('Login', array("class" => "btn btn-outline-conexa")); ?>
										</div>
									</div>
									<?php $this->endWidget(); ?>
								</div><!-- form -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>

</html>