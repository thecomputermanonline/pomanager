<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>


<?php echo $content; ?>


<?php if(count($this->menu)!=0): ?>
<div class="span2" id="sidemenu">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">(</i><span class="panel-divider"></span>
            <h2>Operations<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <?php
           
            $this->widget('bootstrap.widgets.TbMenu', array(
                'items' => $this->menu,
                'htmlOptions' => array('class' => 'operations'),
            ));
           
            ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php $this->endContent(); ?>