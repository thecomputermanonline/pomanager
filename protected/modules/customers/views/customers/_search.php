<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'company_name',array('class'=>'span4','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'first_name',array('class'=>'span4','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'last_name',array('class'=>'span4','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'billing_address',array('class'=>'span4','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'city',array('class'=>'span4','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'state',array('class'=>'span4','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'zip_code',array('class'=>'span4','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span4','maxlength'=>75)); ?>

	<?php echo $form->textAreaRow($model,'company_website',array('rows'=>6, 'cols'=>50, 'class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'phone_number',array('class'=>'span4','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'fax_number',array('class'=>'span4','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'ship_address',array('class'=>'span4','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'ship_city',array('class'=>'span4','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'ship_state',array('class'=>'span4','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'ship_zipcode',array('class'=>'span4','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'ship_phone_number',array('class'=>'span4','maxlength'=>30)); ?>

	<?php echo $form->textAreaRow($model,'Notes',array('rows'=>6, 'cols'=>50, 'class'=>'span4')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
		    'type'=>'primary',
		    'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
