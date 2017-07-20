


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'order-details-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'orderid',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'productid',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'quantity',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'unitprice',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'discount',array('class'=>'span4')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'size'=>'large',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
