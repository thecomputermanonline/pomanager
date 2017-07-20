<!--<ul class="actions">
<?php 
//if(UserModule::isAdmin()) {
?>
<li><?php //echo CHtml::link(UserModule::t('Manage User'),array('/user/admin')); ?></li>
<?php 
//} else {
?>
<li><?php //echo CHtml::link(UserModule::t('List User'),array('/user')); ?></li>
<?php
//}
?>
<li><?php echo CHtml::link(UserModule::t('Profile'),array('/user/profile')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Edit'),array('edit')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Change password'),array('changepassword')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Logout'),array('/user/logout')); ?></li>
</ul>-->


<?php 
if(UserModule::isAdmin()) {
?>
<div class="span1">
    <a href="<?php echo $this->createUrl('/user/admin'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">4</span>
        <span class="label label-info">Manage Users</span>
    </a>
</div>

<?php
}
?>
<div class="span1">
    <a href="<?php echo $this->createUrl('/user/profile'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">4</span>
        <span class="label label-info">Profile</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('/user/profile/edit'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Edit</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('changepassword'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Change Password</span>
    </a>
</div>
<!--<div class="span1">
    <a href="<?php echo $this->createUrl('user/logout'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Log Out</span>
    </a>
</div>-->
<div class="span1">
                                    <span class="aqua-shortcut text-align-center">
                                        <span class="modernpics newline">f</span>
                                        <span class="label label-success">50 new users Today</span>
                                    </span>
                                </div>
                                <div class="span1">
                                    <span class="aqua-shortcut text-align-center">
                                        <span class="modernpics newline">i</span>
                                        <span class="label label-info">11 new orders Today</span>
                                    </span>
                                </div>
                                <div class="span1">
                                    <span class="aqua-shortcut text-align-center">
                                        <span class="modernpics newline">$</span>
                                        <span class="label label-warning">Total income: $55.487</span>
                                    </span>
                                </div>