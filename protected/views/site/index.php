<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<main class="my-4">
	<div class="row">
		<div class="col-12">
			<h1 class="text-center">
				<?php echo CHtml::encode(Yii::app()->name); ?>
			</h1>
		</div>
		<div class="col-12 col-md-6 border-bottom border-conexa mx-auto my-3"></div>
	</div>
	<div class="row">
		<div class="col-12 my-2">
			<h2 class="text-center">
				Veja aqui os posts mais recentes
			</h2>
		</div>
		<?php if (empty($posts)) : ?>
			<div class="col-12 col-md-6 mx-auto">
				<div class="alert alert-danger my-4 text-center">
					<p>
						<i class="far fa-3x fa-sad-cry"></i>
					</p>
					<h3>
						Ops... Nenhum post encontrado.
					</h3>
					<p>
						Tente novamente mais tarde.
					</p>
				</div>
			</div>
		<?php else : ?>
			<div class="col-12">
				<div class="row">
					<?php foreach ($posts as $post) : ?>
						<div class="col-12 my-1 col-md-6 col-lg-4 animate__animated animate__fadeInUp">
							<div class="card shadow h-100">
								<div class="card-body">
									<div class="card-content">
										<h4>
											Post #<?= $post->id; ?>
										</h4>
										<?php $this->widget("Divider", array("size" => "small")) ?>
										<p class="mb-0">
											<small>
												<?= $post->categoria->nome ?>
											</small>
										</p>
										<?= $post->conteudo; ?>
									</div>
								</div>
								<div class="card-footer">
									<p class="mb-0 text-muted">
										<small>
											<?= $post->comentariosCount == 0 ? "Nenhum comentário" : $post->comentariosCount . " comentarios" ?>
										</small>
									</p>
									<p class="mb-0">
										Por: <strong><?= $post->autor; ?></strong>
									</p>
									<p class="mb-0">
										<small>
											Em: <?= date("d/m/Y H:i", strtotime($post->data)); ?>
										</small>
									</p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="row my-4">
					<div class="col-12">
						<?php $this->widget("Divider") ?>
						<h3 class="text-center">
							<p class="mb-0">
								<i class="far fa-grin"></i>
							</p>
							Gostou dos nossos posts?
						</h3>
						<p class="text-center text-muted">
							Clique no botão abaixo para verificar nossa listagem completa
						</p>
						<div class="text-center">
							<a href="<?= Yii::app()->createUrl("post") ?>" class="btn btn-outline-conexa-light mx-auto">
								Ver mais
							</a>
						</div>
						<div class="separator">Ou</div>
						<h4 class="text-center">
							Escolha uma categoria do seu interesse abaixo
						</h4>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-12">
						<h4>
							Nossas categorias de posts
						</h4>
						<?php $this->widget("Divider", array("size" => "small")) ?>
					</div>
				</div>
				<div class="row">
					<?php foreach (Categoria::model()->findAll() as $categoria) { ?>
						<div class="col-12 col-md-4 my-1" style="height:250px">
							<a href="<?= Yii::app()->createUrl("post/index", array("categoria" => $categoria->id)) ?>" class="d-flex text-decoration-none card-animated bg-conexa-light shadow h-100 border border-conexa justify-content-center align-items-center">
								<h4 class="text-white text-center">
									<i class="d-block fas fa-code"></i>
									<?= $categoria->nome ?>
								</h4>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</main>