


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'documents-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
     'htmlOptions' => array('enctype' => 'multipart/form-data'),
    
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'orderid',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'document_name',array('class'=>'span1')); ?>

	<?php echo $form->dropdownListRow($model,'document_type',array('word'=>'MsWord','pdf'=>'Pdf','excel'=>'MsExcel')); ?>

	<?php echo $form->fileFieldRow($model,'document_filename',array('class'=>'span3')); ?>

	<?php // echo $form->textFieldRow($model,'date_created',array('class'=>'span4')); ?>

	<?php // echo $form->textFieldRow($model,'date_updated',array('class'=>'span4')); ?>

	<?php // echo $forme->textFieldRow($model,'created_by',array('class'=>'span4')); ?>

	<?php // echo $form->textFieldRow($model,'updated_by',array('class'=>'span4')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'size'=>'large',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
