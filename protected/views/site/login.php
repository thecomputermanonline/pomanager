

<?php
$this->breadcrumbs = array(
    'Login',
);
?>



<div class="span3 offset2">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">n</i><span class="panel-divider"></span><h2>Login</h2>
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
  <div class="alert in alert-block fade alert-info"><a class="close" data-dismiss="alert">×</a><span class="modernpics icons-blue">!</span><span class="panel-divider"></span> Login: admin, Password: admin </div>

          
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
<div class="span1 offset2">
    <a href="<?php echo CHtml::normalizeUrl(array('site/login')); ?>" class="aqua-shortcut text-align-center disabled">
        <span class="modernpics newline">n</span>
        <span class="label">Login</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo CHtml::normalizeUrl(array('site/signup')); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">+</span>
        <span class="label label-info">Signup</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo CHtml::normalizeUrl(array('site/recovery')); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">R</span>
        <span class="label label-warning">Reset Password</span>
    </a>
</div>

<div class="span1 offset3">
    <a  href="<?php echo CHtml::normalizeUrl(array('/')); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">S</span>
        <span class="label label-inverse">Back to Dashboard</span>
    </a>
</div>