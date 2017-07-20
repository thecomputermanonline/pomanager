<tr class="view">
<td>
    <table class="table table-striped table-condensed">
       
	 <tr><th><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</th>
	<td><?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('customerid')); ?>:</th>
	<td><?php echo CHtml::encode($data->customerid); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('employeeid')); ?>:</th>
	<td><?php echo CHtml::encode($data->employeeid); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('order_date')); ?>:</th>
	<td><?php echo CHtml::encode($data->order_date); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('purchase_order_number')); ?>:</th>
	<td><?php echo CHtml::encode($data->purchase_order_number); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ship_date')); ?>:</th>
	<td><?php echo CHtml::encode($data->ship_date); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('shipping_methodid')); ?>:</th>
	<td><?php echo CHtml::encode($data->shipping_methodid); ?>
	</td></tr>

	<?php /*
	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('freight_charge')); ?>:</th>
	<td><?php echo CHtml::encode($data->freight_charge); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('taxes')); ?>:</th>
	<td><?php echo CHtml::encode($data->taxes); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('payment_received')); ?>:</th>
	<td><?php echo CHtml::encode($data->payment_received); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</th>
	<td><?php echo CHtml::encode($data->comment); ?>
	</td></tr>

	*/ ?>
    </table>
</td>
</tr>