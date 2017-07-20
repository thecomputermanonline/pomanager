<tr class="view">
<td>
    <table class="table table-striped table-condensed">
       
	 <tr><th><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</th>
	<td><?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('orderid')); ?>:</th>
	<td><?php echo CHtml::encode($data->orderid); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('productid')); ?>:</th>
	<td><?php echo CHtml::encode($data->productid); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</th>
	<td><?php echo CHtml::encode($data->quantity); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('unitprice')); ?>:</th>
	<td><?php echo CHtml::encode($data->unitprice); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('discount')); ?>:</th>
	<td><?php echo CHtml::encode($data->discount); ?>
	</td></tr>

    </table>
</td>
</tr>