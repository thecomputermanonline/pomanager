<tr class="view">
<td>
    <table class="table table-striped table-condensed">
       
	 <tr><th><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</th>
	<td><?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</th>
	<td><?php echo CHtml::encode($data->first_name); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</th>
	<td><?php echo CHtml::encode($data->last_name); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</th>
	<td><?php echo CHtml::encode($data->title); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('work_phone')); ?>:</th>
	<td><?php echo CHtml::encode($data->work_phone); ?>
	</td></tr>

    </table>
</td>
</tr>