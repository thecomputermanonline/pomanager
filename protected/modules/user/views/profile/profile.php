<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Profile");
$this->breadcrumbs=array(
    UserModule::t("Dashboard"),
	UserModule::t("/Profile"),
);
?>
<?php echo $this->renderPartial('menu'); ?>

<?php if(Yii::app()->user->hasFlash('profileMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('profileMessage'); ?>
</div>
<?php endif; ?>
<div class="span4">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Company Profile <span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <div id="graph1" style="height:464px;padding: 0;">
                
                 <div >
    <div>
      <div id="userphoto">
           <img src="<?php echo Yii::app()->baseUrl; ?>/images/avatar.png" alt="user"  />
        </div>
      <h1><?php echo $company->company_name ?></h1>

      <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="#bio" class="sel"><i class="modernpics icons32">r</i></a></li>
          <li><a href="#activity"><i class="modernpics icons32">a</i></a></li>
          <li><a href="#friends"><i class="modernpics icons32">b</i></a></li>
          <li><a href="#settings"><i class="modernpics icons32">f</i></a></li>
        </ul>
      </nav>
      
      <section id="bio">
        <p>Various content snippets courtesy of <a href="http://bluthipsum.com/">Bluth Ipsum</a>.</p>
        
        <p>Can't a guy call his mother pretty without it seeming strange? Amen. I think that's one of Mom's little fibs, you know, like I'll sacrifice anything for my children.</p>
        
        <p>She's always got to wedge herself in the middle of us so that she can control everything. Yeah. Mom's awesome. I run a pretty tight ship around here. With a pool table.</p>
      </section>
      
      <section id="activity" class="hidden">
        <p>Most recent actions:</p>
        
        <p class="activity">@10:15PM - Submitted a news article</p>
        
        <p class="activity">@9:50PM - Submitted a news article</p>
        
        <p class="activity">@8:15PM - Posted a comment</p>
        
        <p class="activity">@4:30PM - Added <strong>someusername</strong> as a friend</p>
        
        <p class="activity">@12:30PM - Submitted a news article</p>
      </section>
      
      <section id="friends" class="hidden">
        <p>Friends list:</p>
        
        <ul id="friendslist" class="clearfix">
          <li><a href="#"><img src="images/avatar.png" width="22" height="22"> Username</a></li>
          <li><a href="#"><img src="images/avatar.png" width="22" height="22"> SomeGuy123</a></li>
          <li><a href="#"><img src="images/avatar.png" width="22" height="22"> PurpleGiraffe</a></li>
        </ul>
      </section>
      
      <section id="settings" class="hidden">
        <p>Edit your user settings:</p>
        
        <p class="setting"><span><?php echo CHtml::encode($model->getAttributeLabel('username')); ?> </span> <?php echo CHtml::encode($model->username); ?></p>
      
        <?php 
		$profileFields=ProfileField::model()->forOwner()->sort()->findAll();
		if ($profileFields) {
			foreach($profileFields as $field) {
				//echo "<pre>"; print_r($profile); die();
			?>

<p class="setting"><span><?php echo CHtml::encode(UserModule::t($field->title)); ?></span>

   <?php echo (($field->widgetView($profile))?$field->widgetView($profile):CHtml::encode((($field->range)?Profile::range($field->range,$profile->getAttribute($field->varname)):$profile->getAttribute($field->varname)))); ?>
</p>

			<?php
			}//$profile->getAttribute($field->varname)
		}
?>
     
        <p class="setting"><span><?php echo CHtml::encode($model->getAttributeLabel('email')); ?> <img src="images/edit.png" alt="*Edit*"></span> <?php echo CHtml::encode($model->email); ?></p>
        
        <p class="setting"><span><?php echo CHtml::encode($model->getAttributeLabel('createtime')); ?> <img src="images/edit.png" alt="*Edit*"></span> <?php echo date("d.m.Y H:i:s",$model->createtime); ?></p>
     
         <p class="setting"><span><?php echo CHtml::encode($model->getAttributeLabel('lastvisit')); ?> <img src="images/edit.png" alt="*Edit*"></span> <?php echo date("d.m.Y H:i:s",$model->lastvisit); ?></p>
        
        <p class="setting"><span><?php echo CHtml::encode($model->getAttributeLabel('status')); ?> <img src="images/edit.png" alt="*Edit*"></span> <?php echo CHtml::encode(User::itemAlias("UserStatus",$model->status));
    ?></p>
     </section>
    </div><!-- @end #content -->
<!--    <span style="float:right" class="label label-inverse">  
        <a href="<?php echo $this->createUrl('/user/profile/edit'); ?>" class="">
        update company profile
    </a></span> -->
    <div class="well">
                <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'label' => 'Update Profile',
                    'type' => 'primary',
                    'htmlOptions' => array(
                        'data-toggle' => 'modal',
                        'data-target' => '#myModal',
                    ),
                ));
                ?>
                <?php $this->beginWidget('bootstrap.widgets.TbModal', array('id' => 'myModal')); ?>

                <div class="modal-header">
                    <a class="close" data-dismiss="modal">&times;</a>
                    <h4>Modal header</h4>
                </div>

                <div class="modal-body">
                    <p>Modal body...</p>
                </div>

                <div class="modal-footer">
                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'type' => 'primary',
                        'label' => 'Ok',
                        'url' => '#',
                        'htmlOptions' => array('data-dismiss' => 'modal'),
                    ));
                    ?>
                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'label' => 'Close',
                        'url' => '#',
                        'htmlOptions' => array('data-dismiss' => 'modal'),
                    ));
                    ?>
                </div>

                <?php $this->endWidget(); ?>
            </div>
  </div><!-- @end #w -->
            </div>
        </div>
    </div>
</div>
<div class="span3">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>User Profile<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <div id="graph2" style="height:364px;padding: 0;">
                <div class="staff-profile">
  <a href="#">
    <h2><?php echo CHtml::encode($model->username); ?></h2>
    <div class="profile-q-a">
       <?php 
		$profileFields=ProfileField::model()->forOwner()->sort()->findAll();
		if ($profileFields) {
			foreach($profileFields as $field) {
				//echo "<pre>"; print_r($profile); die();
			?>
<p>
<span class="staff-question"><?php echo CHtml::encode(UserModule::t($field->title)); ?>:</span>
<span class="staff-answer">
   <?php echo (($field->widgetView($profile))?$field->widgetView($profile):CHtml::encode((($field->range)?Profile::range($field->range,$profile->getAttribute($field->varname)):$profile->getAttribute($field->varname)))); ?>
</span></p>

			<?php
			}//$profile->getAttribute($field->varname)
		}
?>
<p><span class="staff-question">Email: </span><span class="staff-answer"><?php echo CHtml::encode($model->email); ?></span></p>
      <p><span class="staff-question">Role: </span><span class="staff-answer ">Marketing Executive</span></p>
      
      <p><span class="staff-question q3">Status Message 
		: </span><span class="staff-answer">Time Travel</span></p>
      <div class="clear"></div>
    </div>
    <div class="find-out-more">
     find out more about Name &raquo;
    </div>
    <div class="staff-pic">
      <img class="poloaroid" src="http://placehold.it/170x150">
      <img class="paperclip" src="http://www.zesttas.com.au/themes/zest_new/images/paperclip.png">  
    </div>
    <div class="highlighter">
      <img src="http://www.zesttas.com.au/themes/zest_new/images/highlighter.png">
    </div>
  </a>
</div>
                
            </div>
        </div>
        <div class="well">
                <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'label' => 'Update Profile',
                    'type' => 'primary',
                    'htmlOptions' => array(
                        'data-toggle' => 'modal',
                        'data-target' => '#myModal',
                    ),
                ));
                ?>
                <?php $this->beginWidget('bootstrap.widgets.TbModal', array('id' => 'myModal')); ?>

                <div class="modal-header">
                    <a class="close" data-dismiss="modal">&times;</a>
                    <h4>Modal header</h4>
                </div>

                <div class="modal-body">
                    <p>Modal body...</p>
                </div>

                <div class="modal-footer">
                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'type' => 'primary',
                        'label' => 'Ok',
                        'url' => '#',
                        'htmlOptions' => array('data-dismiss' => 'modal'),
                    ));
                    ?>
                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'label' => 'Close',
                        'url' => '#',
                        'htmlOptions' => array('data-dismiss' => 'modal'),
                    ));
                    ?>
                </div>

                <?php $this->endWidget(); ?>
            </div>
    </div>
</div>


  
 
  
 
<script type="text/javascript">
$(function(){
  $('#profiletabs ul li a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#profiletabs ul li a').removeClass('sel');
    $(this).addClass('sel');
    
    $('#content section').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
    });
    
    $(newcontent).removeClass('hidden');
  });
});
</script>



