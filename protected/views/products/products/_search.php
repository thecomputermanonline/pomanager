<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'product_name',array('class'=>'span4','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'unit_price',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'In_stock',array('class'=>'span4','maxlength'=>1)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
		    'type'=>'primary',
		    'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
