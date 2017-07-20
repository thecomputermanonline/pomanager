<tr class="view">
<td>
    <table class="table table-striped table-condensed">
       
	 <tr><th><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</th>
	<td><?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('product_name')); ?>:</th>
	<td><?php echo CHtml::encode($data->product_name); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('unit_price')); ?>:</th>
	<td><?php echo CHtml::encode($data->unit_price); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('In_stock')); ?>:</th>
	<td><?php echo CHtml::encode($data->In_stock); ?>
	</td></tr>

    </table>
</td>
</tr>