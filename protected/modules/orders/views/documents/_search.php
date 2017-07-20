<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'orderid',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'document_name',array('class'=>'span4','maxlength'=>500)); ?>

	<?php echo $form->textFieldRow($model,'document_type',array('class'=>'span4','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'document_filename',array('class'=>'span4','maxlength'=>500)); ?>

	<?php echo $form->textFieldRow($model,'date_created',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'date_updated',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'created_by',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'updated_by',array('class'=>'span4')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
		    'type'=>'primary',
		    'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
