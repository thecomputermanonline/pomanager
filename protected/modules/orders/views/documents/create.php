<?php
$this->breadcrumbs=array(
	'Documents'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Documents','url'=>array('index'), 'icon'=>'list'),
//	array('label'=>'Manage Documents','url'=>array('admin'), 'icon'=>'cog'),
//);
?>

<div class="span1">
    <a href="<?php echo $this->createUrl('index'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">4</span>
        <span class="label label-info">List Documents</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('admin'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Manage Documents</span>
    </a>
</div>


   <div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Create Documents<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>