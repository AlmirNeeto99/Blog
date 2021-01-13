<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
	<div class="col-12 col-md-6">
		<?php echo $content; ?>
	</div>
	<div class="col-12 col-md-6 justify-items-end">
		<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title' => 'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items' => $this->menu,
			'htmlOptions' => array('class' => 'operations'),
		));
		$this->endWidget();
		?>
	</div>
</div>
<?php $this->endContent(); ?>