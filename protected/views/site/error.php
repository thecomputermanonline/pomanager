<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = Yii::app()->name . ' - Error';
$this->breadcrumbs = array(
    'Error',
);
?>

<div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">x</i><span class="panel-divider"></span><h2>Error <?php echo $code; ?></h2>
        </div>
        <div class="aqua-panel-content">
            <div class="alert in alert-block fade alert-error error-page">
                <div class="span2">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/error.png" alt="error" width="226" height="250" />
                </div>
                <div class="span4">
                    <?php echo CHtml::encode($message); ?>
                    <div class="clear"><br/><br/></div>
                    <span class="error-code">Error <?php echo $code; ?></span>
                </div>
               
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
