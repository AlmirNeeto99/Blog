<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" type="image/png">

	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/app.css" />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Blinker:wght@100;200;300;400;600;700;800;900&display=swap" rel="stylesheet">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<nav class="navbar navbar-expand navbar-light bg-light">
		<div class="container px-3">
			<a class="navbar-brand" href="/">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/conexa.png" alt="Conexa Blog">
			</a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<div class="dropdown">
						<button class="btn btn-outline-conexa dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-cog"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="/">

								<i class="fa fa-home mr-1"></i>

								Home
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?= Yii::app()->createUrl("post/create") ?>">
								<i class="fa fa-plus mr-1"></i>
								Cadastre seu post
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?= Yii::app()->createUrl("post/index") ?>">
								<i class="fa fa-list-ul mr-1"></i>
								Posts
							</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<header class="container my-3">
		<?php if (isset($this->breadcrumbs) && !empty($this->breadcrumbs)) : ?>
			<div class="row justify-content-end">
				<div class="col-12 col-md-5">
					<?php $this->widget('Breadcrumb', array(
						'links' => $this->breadcrumbs,
					)); ?>
					<!-- breadcrumbs -->
				</div>
			</div>
		<?php endif ?>
	</header>
	<main class="min-vh-100 my-3">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php echo $content; ?>
				</div>
			</div>
		</div>

	</main>
	<footer class="bg-conexa text-white text-center py-2">
		Copyright &copy; <?php echo date('Y'); ?> by Conexa.<br />
		All Rights Reserved.<br />
		<?php echo Yii::powered(); ?>
	</footer>

	<script src="<?= Yii::app()->baseUrl ?>/assets/bootstrap/jquery-3.5.1.min.js"></script>
	<script src="<?= Yii::app()->baseUrl ?>/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>