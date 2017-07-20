


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span4')); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'last_visit',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'status_id',array('class'=>'span4')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'size'=>'large',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
