<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
//$this->breadcrumbs=array(
	//UserModule::t("Login"),
//);
?>


<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>

<!--<p><?php echo UserModule::t("Please fill out the following form with your login credentials:"); ?></p>-->

<!--<div class="form">
<?php echo CHtml::beginForm(); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	
	<?php echo CHtml::errorSummary($model); ?>
	
	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'username'); ?>
		<?php echo CHtml::activeTextField($model,'username') ?>
	</div>
	
	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'password'); ?>
		<?php echo CHtml::activePasswordField($model,'password') ?>
	</div>
	
	<div class="row">
		<p class="hint">
		<?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
		</p>
	</div>
	
	<div class="row rememberMe">
		<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
		<?php echo CHtml::activeLabelEx($model,'rememberMe'); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(UserModule::t("Login")); ?>
	</div>
	
<?php echo CHtml::endForm(); ?>
</div> form -->

<div class="span3 offset2">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">n</i><span class="panel-divider"></span><h2>Track Your Orders - Login</h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">

            <?php
            /** @var BootActiveForm $form */
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id' => 'varticalForm',
                'type' => 'inline',
                'enableClientValidation' => true,
                    ));
            ?>
  <div class="alert in alert-block fade alert-info"><a class="close" data-dismiss="alert">×</a><span class="modernpics icons-blue">!</span><span class="panel-divider"></span>  Login with your credentials </div>

          
            <?php echo $form->errorSummary($model); ?>
            <?php echo $form->textFieldRow($model, 'username', array('prepend' => '<div class="modernpics icons24">f</div>', 'hint' => '<strong>Note:</strong> You can use Your name or email to login.', 'style' => 'width:310px;')); ?>
            <?php echo $form->passwordFieldRow($model, 'password', array('prepend' => '<div class="modernpics icons24">n</div>', 'style' => 'width:340px;')); ?>
            
            <?php echo $form->checkboxRow($model, 'rememberMe'); ?>


            <hr/>
            <?php $this->widget('bootstrap.widgets.TbButton', array('size' => 'large', 'buttonType' => 'submit', 'type' => 'primary', 'block' => true, 'label' => 'Login', 'htmlOptions' => array('class' => 'pull-right'))); ?>

            <div class="clear"></div>
            <?php $this->endWidget(); ?>


        </div>
    
    </div>
   
    
</div>
<div class="clear"></div>
 <div class="span2 offset3">
    <a href="<?php echo CHtml::normalizeUrl(array('site/recovery')); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">R</span>
        <span class="label label-warning">Reset Password</span>
    </a>
</div>
<!--<div class="span1 offset2">
    <a href="<?php echo CHtml::normalizeUrl(array('site/login')); ?>" class="aqua-shortcut text-align-center disabled">
        <span class="modernpics newline">n</span>
        <span class="label">Login</span>
    </a>
</div>-->
<!--<div class="span1 offset2">
    <a href="<?php echo CHtml::normalizeUrl(array('site/signup')); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">+</span>
        <span class="label label-info">Signup</span>
    </a>
</div>-->


<!--<div class="span1 offset3">
    <a  href="<?php echo CHtml::normalizeUrl(array('/')); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">S</span>
        <span class="label label-inverse">Back to Dashboard</span>
    </a>
</div>-->

<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>