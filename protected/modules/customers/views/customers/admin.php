<?php
$this->breadcrumbs=array(
	'Customers'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List Customers','url'=>array('index')),
//	array('label'=>'Create Customers','url'=>array('create')),
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





<div class="span1">
    <a href="#" class="aqua-shortcut text-align-center search-button">
        <span class="modernpics newline">s</span>
        <span class="label label-info">Advanced Search</span>
    </a>
</div>
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
<div class="clear"></div>
<div class="span7 search-panel" style="display:none">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Manage Customers<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">

            <div class="search-form">
                <?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
            </div><!-- search-form -->
        </div>
    </div>
</div>

<div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Manage Customers<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">









            <?php $this->widget('bootstrap.widgets.TbGridView',array(
            'type'=>'striped bordered condensed',
            'id'=>'customers-grid',
            'dataProvider'=>$model->search(),
            'template'=>'{summary}{pager}{items}{summary}{pager}',
            'filter'=>$model,
            'columns'=>array(
            		'id',
		'company_name',
		'first_name',
		'last_name',
		'billing_address',
		'city',
		/*
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
		*/
            array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            ),
            ),
            )); ?>

        </div>
    </div>
</div>




