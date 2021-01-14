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

<?php $this->widget("Divider", array("size" => "large")) ?>

<?php $this->beginWidget('CActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>
<div class="row">
	<?php if (!empty($errors)) { ?>
		<div class="col-12">
			<?php $this->widget("ErrorLog", array(
				"errors" => $errors
			)) ?>
		</div>
	<?php } ?>

	<div class="col-12 col-md-6">
		<div class="form-group">
			<label for="">
				Categoria
			</label>
			<?php $categorias = Categoria::model()->findAll(); ?>
			<select name="categoria" id="" class="form-control">
				<option value="">Selecione</option>
				<?php foreach ($categorias as $categoria) { ?>
					<option value="<?= $categoria->id ?>" <?php if (
																isset($_GET['categoria']) &&
																!empty($_GET['categoria']) &&
																$_GET['categoria'] == $categoria->id
															) echo 'selected'; ?>><?= $categoria->nome; ?></option>
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
				<input type="date" name="inicio" id="" class="form-control" value="<?= isset($_GET['inicio']) ? $_GET['inicio'] : "" ?>">
			</div>
			<div class="col-12 col-md-6">
				<label for="">
					Até
				</label>
				<input type="date" name="fim" id="" class="form-control" value="<?= isset($_GET['fim']) ? $_GET['fim'] : "" ?>">
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

<?php $this->widget("Divider", array("size" => "large")) ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider' => $dataProvider,
	'itemsCssClass' => "row",
	'itemView' => '_view',
	'summaryText' => 'Exibindo resultados de {start} a {end} - {count} encontrados',
	'summaryCssClass' => 'alert alert-secondary',
	'emptyText' => ""
)); ?>
<?php if (empty($dataProvider->data)) { ?>
	<div class="alert alert-danger">
		Nenhum post encontrado
	</div>
<?php } ?>

<script>
	function pagination() {
		$(".yiiPager li").removeClass().addClass("page-item");
		$(".yiiPager li a").removeClass().addClass("page-link");
		$(".yiiPager").removeClass().addClass("pagination");
		$(".pager")
			.contents()
			.filter(function() {
				return this.nodeType == 3; //Node.TEXT_NODE
			}).remove();
	}
	pagination();
	$("body").on("ajaxStop", function() {
		pagination();
	});
</script>