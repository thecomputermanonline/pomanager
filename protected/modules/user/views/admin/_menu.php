<!--<ul class="actions">
<?php 
	if (count($list)) {
		foreach ($list as $item)
			echo "<li>".$item."</li>";
	}
?>
	<li><?php echo CHtml::link(UserModule::t('List User'),array('/user')); ?></li>
	<li><?php echo CHtml::link(UserModule::t('Manage User'),array('admin')); ?></li>
	<li><?php echo CHtml::link(UserModule::t('Manage Profile Field'),array('profileField/admin')); ?></li>
</ul> actions -->

<!--<div class="span1">
    <a href="#" class="aqua-shortcut text-align-center search-button">
        <span class="modernpics newline">s</span>
        <span class="label label-info">Advanced Search</span>
    </a>
</div>-->
<!--<div class="span1">
    <a href="<?php echo $this->createUrl('/user'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">4</span>
        <span class="label label-info">List users</span>
    </a>
</div>-->
<div class="span1">
    <a href="<?php echo $this->createUrl('create'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">V</span>
        <span class="label label-info">Create Users</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('admin'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Manage Users</span>
    </a>
</div>