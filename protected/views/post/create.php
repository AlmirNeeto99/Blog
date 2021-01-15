<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs = array(
	'Posts' => array('post/index'),
	'Cadastrar',
);
?>
<div class="row">
	<div class="col-12">
		<h1>Cadastrar Post</h1>
	</div>
</div>

<?php $this->widget("Divider"); ?>
<?php echo $this->renderPartial('_form', array('model' => $model, "categorias" => $categorias)); ?>