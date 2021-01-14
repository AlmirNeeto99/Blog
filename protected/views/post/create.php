<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs = array(
	'Posts' => array('index'),
	'Cadastrar',
);

$this->menu = array(
	array('label' => 'List Post', 'url' => array('index')),
	array('label' => 'Manage Post', 'url' => array('admin')),
);
?>

<h1>Cadastrar Post</h1>

<?php $this->widget("Divider"); ?>

<?php echo $this->renderPartial('_form', array('model' => $model, "categorias" => $categorias)); ?>