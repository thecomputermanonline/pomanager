<?php
$this->breadcrumbs=array(
	'Order Details'=>array('index'),
	'View',
);

//$this->menu=array(
//	array('label'=>'List Orders','url'=>array('index')),
//	array('label'=>'Create Orders','url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    if($('.search-panel').is(':hidden')){
        $('.search-panel').slideDown('fast');
    }
    else{
        $('.search-panel').slideUp('fast');
   }
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('user-grid', {
data: $(this).serialize()
});
return false;
});
");
?>




<!--
<div class="span1">
    <a href="#" class="aqua-shortcut text-align-center search-button">
        <span class="modernpics newline">s</span>
        <span class="label label-info">Advanced Search</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('index'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">4</span>
        <span class="label label-info">List Orders</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('create'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">V</span>
        <span class="label label-info">Create Orders</span>
    </a>
</div>
<div class="clear"></div>-->
<!--<div class="span7 search-panel" style="display:none">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Manage Orders<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">

            <div class="search-form">
                <?php //$this->renderPartial('_search',array(
//	'model'=>$model,
//)); ?>
            </div> search-form 
        </div>
    </div>
</div>-->

<div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Manage Order Details <span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">









            <?php $this->widget('bootstrap.widgets.TbGridView',array(
            'type'=>'striped bordered condensed',
            'id'=>'orders-grid',
            'dataProvider'=>$model,
            'template'=>'{summary}{pager}{items}{summary}{pager}',
            //'filter'=>$model,
            'columns'=>array(
            			//'id',
		//'orderid',
		//'productid',
                array(
        'name' => 'Products in this order',
        'value' => '$data->product->product_name',   //where name is Client model attribute 
       ),
		'quantity',
		'unitprice',
		'discount',
            array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
//            ),
                'template'=>'{add} {list} {update} {print_act}',
            'buttons'=>array
            (
                'add' => array
                (
                    'label'=>'Add',
                    'icon'=>'plus',
                    'url'=>'Yii::app()->createUrl("reception/create", array("id"=>$data->id))',
                    'options'=>array(
                        'class'=>'btn btn-small',
                    ),
                ),
//                'list' => array
//                (
//                    'label'=>'Список предоставленных услуг',
//                    'icon'=>'list white',
//                    'url'=>'Yii::app()->createUrl("patient/update", array("id"=>$data->id))',
//                    'options'=>array(
//                        'class'=>'btn btn-small btn-info',
//                    ),
//                ),
                'update' => array
                (
                    'label'=>'Update',
                    'icon'=>'pencil white',
                    'url'=>'Yii::app()->createUrl("customer/update", array("id"=>$data->id))',
                    'options'=>array(
                        'class'=>'btn btn-small btn-success',
                    ),
                ),
                   'delete' => array
                (
                    'label'=>'Delete',
                    'icon'=>'pencil red',
                    'url'=>'Yii::app()->createUrl("customer/update", array("id"=>$data->id))',
                    'options'=>array(
                        'class'=>'btn btn-small btn-success',
                    ),
                ),
//                'print_act' => array
//                (
//                    'label'=>'Печать акта выполненных работ',
//                    'icon'=>'print',
//                    'url'=>'Yii::app()->createUrl("customer/printAct", array("id"=>$data->id))',
//                    'options'=>array(
//                        'class'=>'btn btn-small',
//                    ),
//                ),
            ),
            'htmlOptions'=>array(
                'style'=>'width: 220px',
            ),
            ),
            ))); 
?>
        </div>
    </div>
</div>





