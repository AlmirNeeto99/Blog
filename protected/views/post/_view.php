<?php
/* @var $this PostController */
/* @var $data Post */
?>
<div class="col-12 col-md-6">
	<div class="card my-2 shadow">
		<div class="card-body">
			<ul class="list-unstyled">
				<li>
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
					</b>
					<?php echo CHtml::link(CHtml::encode("#" . $data->id), array('view', 'id' => $data->id)); ?>
				</li>
				<li>
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('categoria_nome')); ?>:
					</b>
					<?php echo CHtml::encode($data->categoria->nome); ?>

				</li>
				<li>
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:
					</b>
					<?php echo CHtml::encode($data->conteudo); ?>
				</li>
				<li>
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('autor')); ?>:
					</b>
					<?php echo CHtml::encode($data->autor); ?>
				</li>
			</ul>
		</div>
		<div class="card-footer">
			Em: <?php echo date("d/m/Y H:i", strtotime($data->data)); ?>
		</div>
	</div>
</div>