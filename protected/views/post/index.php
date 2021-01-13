<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
	'Posts',
);

$this->menu = array(
	array('label' => 'Create Post', 'url' => array('create')),
	array('label' => 'Manage Post', 'url' => array('admin')),
);
?>

<h1>Posts</h1>

<?php $this->widget("Divider") ?>

<?php $this->beginWidget('CActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>
<div class="row">
	<div class="col-12 col-md-6">
		<div class="form-group">
			<label for="">
				Categoria
			</label>
			<?php $categorias = Categoria::model()->findAll(); ?>
			<select name="categoria" id="" class="form-control">
				<option value="">Selecione</option>
				<?php foreach ($categorias as $categoria) { ?>
					<option value="<?= $categoria->id ?>"><?= $categoria->nome; ?></option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="col-12">
		<div class="form-row">
			<div class="col-12 col-md-6">
				<label for="">
					De:
				</label>
				<input type="date" name="inicio" id="" class="form-control">
			</div>
			<div class="col-12 col-md-6">
				<label for="">
					Até
				</label>
				<input type="date" name="fim" id="" class="form-control">
			</div>
		</div>
	</div>
	<div class="col-12 my-1">
		<button class="btn btn-outline-info" type="submit">
			Filtrar
		</button>
	</div>
</div>

<?php $this->endWidget(); ?>

<?php $this->widget("Divider") ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider' => $dataProvider,
	'itemsCssClass' => "row",
	'itemView' => '_view',
	"pagerCssClass" => 'pagination',
	'summaryText' => 'Exibindo resultados de {start} a {end} - {count} encontrados',
	'summaryCssClass' => 'alert alert-secondary'
)); ?>