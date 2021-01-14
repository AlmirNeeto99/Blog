<div class="col-12 my-1 col-md-6 col-lg-4 animate__animated animate__fadeInUp">
	<div class="card shadow">
		<div class="card-body">
			<div class="card-content">
				<h4>
					Post #<?= $data->id; ?>
				</h4>
				<?php $this->widget("Divider", array("size" => "small")) ?>
				<p class="mb-0">
					<small>
						<?= $data->categoria->nome ?>
					</small>
				</p>
				<?= $data->conteudo; ?>
			</div>
		</div>
		<div class="card-footer">
			<p class="mb-0 text-muted">
				<small>
					<?= $data->comentariosCount == 0 ? "Nenhum comentário" : $post->comentariosCount . " comentarios" ?>
				</small>
			</p>
			<p class="mb-0">
				Por: <strong><?= $data->autor; ?></strong>
			</p>
			<p class="mb-0">
				<small>
					Em: <?= date("d/m/Y H:i", strtotime($data->data)); ?>
				</small>
			</p>
		</div>
	</div>
</div>