

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'orders-form',
    // 'id' => 'verticalForm',
'type' => 'horizontal',
'htmlOptions' => array('class' => 'well'),
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<?php echo $form->errorSummary($profile); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span4')); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span4')); ?>

	<?php echo $form->dropDownListRow($model,'superuser',array('class'=>'span4','maxlength'=>30)); ?>

	<?php echo $form->dropDownListRow($model,'status',array('class'=>'span4')); ?>


<?php 
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>
	<div class="row">
		<?php //echo CHtml::activeLabelEx($profile,$field->varname); ?>
		<?php 
		if ($field->widgetEdit($profile)) {
			echo $field->widgetEdit($profile);
		} elseif ($field->range) {
			echo $form->dropDownListRow($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			
                        echo $form->textAreaRow($profile,$field->varname,array('rows'=>6, 'cols'=>50, 'class'=>'span4')); 
		} else {
			//echo CHtml::activeTextField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		 echo $form->textFieldRow($profile,$field->varname,array('class'=>'span4','maxlength'=>(($field->field_size)?$field->field_size:255))); 

                        }
		 ?>
		<?php echo CHtml::error($profile,$field->varname); ?>
	</div>	
			<?php
			}
		}
?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'size'=>'large',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>


	
	
