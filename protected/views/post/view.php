<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs = array(
	'Posts' => array('post/index'),
	$model->id,
);

$this->menu = array(
	array('label' => 'List Post', 'url' => array('index')),
	array('label' => 'Create Post', 'url' => array('create')),
	array('label' => 'Update Post', 'url' => array('update', 'id' => $model->id)),
	array('label' => 'Delete Post', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
	array('label' => 'Manage Post', 'url' => array('admin')),
);
?>

<h1>Visualizar Post #<?php echo $model->id; ?></h1>

<?php if ($newRecord) : ?>
	<div class="alert alert-success">
		Post cadastro com sucesso
	</div>
<?php endif; ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'id',
		'categoria_id',
		'conteudo',
		'autor',
		'data',
	),
	'htmlOptions' => array("class" => 'table table-striped table-bordered')
)); ?>