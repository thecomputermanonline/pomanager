<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'customerid',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'employeeid',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'order_date',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'purchase_order_number',array('class'=>'span4','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'ship_date',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'shipping_methodid',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'freight_charge',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'taxes',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'payment_received',array('class'=>'span4','maxlength'=>1)); ?>

	<?php echo $form->textAreaRow($model,'comment',array('rows'=>6, 'cols'=>50, 'class'=>'span4')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
		    'type'=>'primary',
		    'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
