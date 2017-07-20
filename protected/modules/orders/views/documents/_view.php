<tr class="view">
<td>
    <table class="table table-striped table-condensed">
       
	 <tr><th><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</th>
	<td><?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('orderid')); ?>:</th>
	<td><?php echo CHtml::encode($data->orderid); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('document_name')); ?>:</th>
	<td><?php echo CHtml::encode($data->document_name); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('document_type')); ?>:</th>
	<td><?php echo CHtml::encode($data->document_type); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('document_filename')); ?>:</th>
	<td><?php echo CHtml::encode($data->document_filename); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</th>
	<td><?php echo CHtml::encode($data->date_created); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('date_updated')); ?>:</th>
	<td><?php echo CHtml::encode($data->date_updated); ?>
	</td></tr>

	<?php /*
	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</th>
	<td><?php echo CHtml::encode($data->created_by); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</th>
	<td><?php echo CHtml::encode($data->updated_by); ?>
	</td></tr>

	*/ ?>
    </table>
</td>
</tr>