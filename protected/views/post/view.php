<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs = array(
	'Posts' => array('post/index'),
	$model->id,
); ?>

<?php if ($newRecord) : ?>
	<div class="alert alert-success">
		Post cadastrado com sucesso
	</div>
<?php endif; ?>
<?php if ($newComentario) : ?>
	<div class="alert alert-success">
		Comentário cadastrado com sucesso
	</div>
<?php endif; ?>
<?php if ($fail) : ?>
	<div class="alert alert-danger">
		Falha ao salvar comentário
	</div>
<?php endif; ?>
<h1 class="mb-4">
	Post: <strong>#<?= $model->id ?></strong>
	<?php $this->widget("Divider", array("size" => "small")) ?>
</h1>
<div class="row">
	<div class="col-12">
		<p>
			<small>
				Categoria: <strong><?= $model->categoria->nome ?></strong>
			</small>
		</p>
		<p class="text">
			<?= $model->conteudo ?>
		</p>
	</div>
	<div class="col-12">
		<div class="row">
			<div class="col-12 col-md-6">
				<p>
					Por: <strong><?= $model->autor ?></strong>
				</p>
			</div>
			<div class="col-12 col-md-6">
				<p class="text-right">
					Em: <?= date("d/m/Y H:i", strtotime($model->data)); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="col-12 my-3">
		<?php $this->widget("Divider", array("size" => "large")) ?>
		<div class="row">
			<div class="col-6 my-2">
				<h4>
					<i class="far fa-comment-alt"></i>
					Comentários
				</h4>
			</div>
			<div class="col-6 text-right">
				<button data-toggle="modal" class="btn btn-conexa" data-target="#createComentario">
					Comentar
				</button>
			</div>
		</div>
	</div>
	<div class="col-12">
		<?php if ($model->comentariosCount == 0) : ?>
			<div class="alert alert-danger">
				<h4>
					<i class="far fa-frown"></i>
				</h4>
				<p class="mb-0">
					Esse post ainda não possui comentários
				</p>
			</div>
		<?php endif; ?>
	</div>
	<div class="col-12">
		<ul class="list-group mr-0">
			<?php foreach ($comentarios as $key => $value) { ?>
				<li class="list-group-item">
					<p>
						<small class="text-muted">
							Em: <?= date("d/m/Y H:i", strtotime($value['data'])); ?>
						</small>
					</p>
					<?= $value['texto'] ?>
					<p class="mb-0">
						<small>
							Por: <?= $value['autor'] ?>
						</small>
					</p>
				</li>
			<?php } ?>
		</ul>
	</div>

	<div class="modal fade" id="createComentario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Comentar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php $this->renderPartial("../comentario/_form", ["model" => $comentario, "post" => $model->id]); ?>
				</div>
			</div>
		</div>
	</div>
</div>