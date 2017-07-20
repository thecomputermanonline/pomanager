<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'comment-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
     'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!--	<div class="row">
		<?php //echo $form->labelEx($model,'author'); ?>
		<?php //echo $form->textField($model,'author',array('size'=>60,'maxlength'=>128)); ?>
		<?php // echo $form->error($model,'author'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'email'); ?>
		<?php //echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php //echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'url'); ?>
		<?php //echo $form->textField($model,'url',array('size'=>60,'maxlength'=>128)); ?>
		<?php //echo $form->error($model,'url'); ?>
	</div>-->
<?php echo $form->textAreaRow($model,'content',array('class'=>'span7')); ?>
<!--	<div class="row">
		<?php //echo $form->labelEx($model,'content'); ?>
		<?php //echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'content'); ?>
	</div>

	<div class="row buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?>
	</div>-->

<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'size'=>'small',
			'label'=>$model->isNewRecord ? 'Submit Your Comment' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>


