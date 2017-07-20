<tr class="view users">
<td>
    <table class="table table-striped table-condensed">
       
	 <tr><th><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</th>
	<td><?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</th>
	<td><?php echo CHtml::encode($data->username); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</th>
	<td><?php echo CHtml::encode($data->password); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</th>
	<td><?php echo CHtml::encode($data->email); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</th>
	<td><?php echo CHtml::encode($data->create_time); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('last_visit')); ?>:</th>
	<td><?php echo CHtml::encode($data->last_visit); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</th>
	<td><?php echo CHtml::encode($data->status_id); ?>
	</td></tr>

    </table>
</td>
</tr>