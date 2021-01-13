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
		<div class="col-12">
			<h2 class="text-center">
				Veja aqui os posts mais recentes
			</h2>
		</div>
		<?php if (empty($posts)) : ?>
			<div class="alert alert-danger my-4">
				<h3>
					Oops... Nenhum post encontrado.
				</h3>
				<p>
					Tente novamente mais tarde.
				</p>
			</div>
		<?php else : ?>
			<div class="col-12">
				<div class="row">
					<?php foreach ($posts as $post) : ?>

						<div class="col-12 my-1 col-md-4 animate__animated animate__fadeInUp">
							<div class="card">
								<div class="card-body">
									<div class="card-content">
										<h4>
											Post #<?= $post->id; ?>
										</h4>
										<div class="w-25 bg-conexa" style="height: 1px;"></div>
										<p class="mb-0">
											<small>
												<?= $post->category->title ?>
											</small>
										</p>
										<?= $post->content; ?>
									</div>
								</div>
								<div class="card-footer">
									<p class="mb-0">
										Por: <strong><?= $post->author; ?></strong>
									</p>
									<p class="mb-0">
										<small>
											Em: <?= date("d/m/Y H:i", strtotime($post->date)); ?>
										</small>
									</p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</main>