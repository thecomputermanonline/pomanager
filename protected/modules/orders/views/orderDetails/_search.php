<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'orderid',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'productid',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'quantity',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'unitprice',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'discount',array('class'=>'span4')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
		    'type'=>'primary',
		    'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
