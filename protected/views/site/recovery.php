

<?php
$this->breadcrumbs = array(
    'Password recovery',
);
?>



<div class="span3 offset2">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">R</i><span class="panel-divider"></span><h2>Password recovery</h2>
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

            <?php echo $form->errorSummary($model); ?>
            <?php echo $form->textFieldRow($model, 'name', array('prepend' => '<div class="modernpics icons24">f</div>','append'=>'', 'hint' => '<strong>Note:</strong> You can use Your name or email to recover Your password.', 'style' => 'width:306px;')); ?>
            <div class="clear"></div>

            <hr/>
            <?php $this->widget('bootstrap.widgets.TbButton', array('size' => 'large', 'buttonType' => 'submit', 'type' => 'warning', 'block' => true, 'label' => 'Reset password', 'htmlOptions' => array('class' => 'pull-right'))); ?>

            <div class="clear"></div>
            <?php $this->endWidget(); ?>


        </div>
    </div>
</div>
<div class="clear"></div>
<div class="span1 offset2">
    <a href="<?php echo CHtml::normalizeUrl(array('site/login')); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">n</span>
        <span class="label label-success">Login</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo CHtml::normalizeUrl(array('site/signup')); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">+</span>
        <span class="label label-info">Signup</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo CHtml::normalizeUrl(array('site/recovery')); ?>" class="aqua-shortcut text-align-center disabled">
        <span class="modernpics newline">R</span>
        <span class="label">Reset Password</span>
    </a>
</div>
<div class="span1 offset3">
    <a href="<?php echo CHtml::normalizeUrl(array('/')); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">S</span>
        <span class="label label-inverse">Back to Dashboard</span>
    </a>
</div>
