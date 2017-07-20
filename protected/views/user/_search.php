<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'last_visit',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'status_id',array('class'=>'span4')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
		    'type'=>'primary',
		    'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
