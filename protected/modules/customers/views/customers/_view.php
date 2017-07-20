<tr class="view">
<td>
    <table class="table table-striped table-condensed">
       
	 <tr><th><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</th>
	<td><?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('company_name')); ?>:</th>
	<td><?php echo CHtml::encode($data->company_name); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</th>
	<td><?php echo CHtml::encode($data->first_name); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</th>
	<td><?php echo CHtml::encode($data->last_name); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('billing_address')); ?>:</th>
	<td><?php echo CHtml::encode($data->billing_address); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</th>
	<td><?php echo CHtml::encode($data->city); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</th>
	<td><?php echo CHtml::encode($data->state); ?>
	</td></tr>

	<?php /*
	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('zip_code')); ?>:</th>
	<td><?php echo CHtml::encode($data->zip_code); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</th>
	<td><?php echo CHtml::encode($data->email); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('company_website')); ?>:</th>
	<td><?php echo CHtml::encode($data->company_website); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('phone_number')); ?>:</th>
	<td><?php echo CHtml::encode($data->phone_number); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('fax_number')); ?>:</th>
	<td><?php echo CHtml::encode($data->fax_number); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ship_address')); ?>:</th>
	<td><?php echo CHtml::encode($data->ship_address); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ship_city')); ?>:</th>
	<td><?php echo CHtml::encode($data->ship_city); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ship_state')); ?>:</th>
	<td><?php echo CHtml::encode($data->ship_state); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ship_zipcode')); ?>:</th>
	<td><?php echo CHtml::encode($data->ship_zipcode); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ship_phone_number')); ?>:</th>
	<td><?php echo CHtml::encode($data->ship_phone_number); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('Notes')); ?>:</th>
	<td><?php echo CHtml::encode($data->Notes); ?>
	</td></tr>

	*/ ?>
    </table>
</td>
</tr>