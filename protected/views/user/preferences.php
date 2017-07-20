<?php
$this->breadcrumbs = array(
    'Users' => array('index'),
    'Preferences',
);

//$this->menu=array(
//	array('label'=>'List User','url'=>array('index')),
//	array('label'=>'Create User','url'=>array('create')),
//	array('label'=>'View User','url'=>array('view','id'=>$model->id)),
//	array('label'=>'Manage User','url'=>array('admin')),
//);
?>


<div class="span4">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>User <?php echo $model->username; ?><span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <?php
            $this->widget('bootstrap.widgets.TbTabs', array(
                'type' => 'tabs',
                'placement' => 'above', // 'above', 'right', 'below' or 'left'
                'htmlOptions' => array('class' => 'inpanel'),
                'encodeLabel' => false,
                'tabs' => array(
                    array('label' => '<span class="modernpics">=</span>', 'content' => $this->renderPartial('preferencesView', array('model' => $model), true)),
                    array('label' => '<span class="modernpics">(</span>', 'active' => true, 'content' => $this->renderPartial('_formPreferences', array('model' => $model), true)),
                ),
            ));
            ?>


        </div>
    </div>
</div>
<div class="span3">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">=</i><span class="panel-divider"></span>
            <h2>User <?php echo $model->username; ?><span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <?php echo $this->renderPartial('preferencesView', array('model' => $model), true); ?>
        </div>
    </div>
</div>