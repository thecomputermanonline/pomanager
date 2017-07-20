<?php
$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->id,
);

//$this->menu=array(
//array('label'=>'List Customers','url'=>array('index')),
//array('label'=>'Create Customers','url'=>array('create')),
//array('label'=>'Update Customers','url'=>array('update','id'=>$model->id)),
//array('label'=>'Delete Customers','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//array('label'=>'Manage Customers','url'=>array('admin')),
//);
?>


<div class="span1">
    <a href="<?php echo $this->createUrl('index'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">4</span>
        <span class="label label-info">List Customers</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('create'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">V</span>
        <span class="label label-info">Create Customers</span>
    </a>
</div>

<div class="span1">
    <a href="<?php echo $this->createUrl('update', array('id'=>$model->id)); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">r</span>
        <span class="label label-info">Update</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('admin'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Manage Customers</span>
    </a>
</div>

<div class="span1">
  <?php echo CHtml::link('<span class="modernpics newline icons-red">x</span><span class="label label-inverse">Delete</span>', '#', array('class'=>'aqua-shortcut text-align-center delete','submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')); ?></div>


<div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>View Customers #<?php echo $model->id; ?><span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <?php $this->widget('bootstrap.widgets.TbDetailView',array(
            'data'=>$model,
            'attributes'=>array(
            		'id',
		'company_name',
		'first_name',
		'last_name',
		'billing_address',
		'city',
		'state',
		'zip_code',
		'email',
		'company_website',
		'phone_number',
		'fax_number',
		'ship_address',
		'ship_city',
		'ship_state',
		'ship_zipcode',
		'ship_phone_number',
		'Notes',
            ),
            )); ?>
        </div>
    </div>
</div>