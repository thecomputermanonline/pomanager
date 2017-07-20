<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'first_name',array('class'=>'span4','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'last_name',array('class'=>'span4','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span4','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'work_phone',array('class'=>'span4','maxlength'=>30)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
		    'type'=>'primary',
		    'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
