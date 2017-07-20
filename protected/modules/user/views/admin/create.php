<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('admin'),
	UserModule::t('Create'),
);
?>
<!--<h1><?php echo UserModule::t("Create User"); ?></h1>-->

<?php 
	echo $this->renderPartial('_menu',array(
		'list'=> array(),
	));
        
        
	
?>

<div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Create Users<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
 <?php   echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile)); ?>   </div>
    </div>
</div>