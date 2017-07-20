<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AquaBlue - Admin Theme</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/css/style.css"); ?>
        <?php // Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/css/aquablue.css"); ?>
    </head>
    <body>
        
        <?php
        $this->widget('bootstrap.widgets.TbAlert', array(
            'block' => true, // display a larger alert block?
            'fade' => true, // use transitions?
            'closeText' => '&times;', // close link text - if set to false, no close link is displayed
            'alerts' => array(// configurations per alert type
                'success' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), // success, info, warning, error or danger
            ),
        ));
        ?>
        <div id="breadcrumbs">
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>
        </div>

        <div class="aqua-container">

            <?php echo $content; ?>

        </div>
        <div class="clear"></div>
       

        <?php
        $this->widget('ext.eguiders.EGuider', array(
            'id' => 'start',
            'next' => 'menu',
            'title' => 'Welcome',
            'buttons' => array(array('name' => 'Next')),
            'description' => 'This is sample Guide tour. You can use it to teach new users, show some new functions etc.',
            'overlay' => true,
            'xButton' => true,
            'show' => false
                )
        );
        ?>



        <?php
        $this->widget('ext.eguiders.EGuider', array(
            'id' => 'menu',
            'next' => 'menu1',
            'title' => 'Notify Icons in header',
            'attachTo' => '.aqua-well-mini-green',
            'position' => 5,
            'buttons' => array(
                array(
                    'name' => 'Previous',
                    'onclick' => "js:function(){guiders.prev();}"
                ),
                array(
                    'name' => 'Next',
                    'onclick' => "js:function(){guiders.next();}"
                ),
                array(
                    'name' => 'Exit',
                    'onclick' => "js:function(){guiders.hideAll();}"
                )
            ),
            'description' => $this->renderPartial('//guide/headerIcons', null, true),
            'overlay' => true,
            'xButton' => true,
            'show' => false,
            'width' => '600px',
                )
        );
        ?>

        <?php
        $this->widget('ext.eguiders.EGuider', array(
            'id' => 'menu1',
            'next' => 'menu2',
            'title' => 'Menu',
            'attachTo' => '#yw5',
            'position' => 6,
            'buttons' => array(array('name' => 'Next')),
            'description' => 'Guides can easly stick to ID or Class of css elements.',
            'overlay' => true,
            'xButton' => true,
            'show' => false
                )
        );
        ?>
        <?php
        $this->widget('ext.eguiders.EGuider', array(
            'id' => 'menu2',
            'next' => 'menu3',
            'title' => 'Menu',
            'attachTo' => '#yw5',
            'position' => 5,
            'buttons' => array(array('name' => 'Next')),
            'description' => 'Guides can easly stick to ID or Class of css elements.',
            'overlay' => true,
            'xButton' => true,
            'show' => false
                )
        );
        ?>
        <?php
        $this->widget('ext.eguiders.EGuider', array(
            'id' => 'menu3',
            'title' => 'Menu',
            'attachTo' => '#yw5',
            'position' => 3,
            'buttons' => array(array('name' => 'Next')),
            'description' => 'Guides can easly stick to ID or Class of css elements.',
            'overlay' => true,
            'xButton' => true,
            'show' => false
                )
        );
        ?>


        <?php
        Yii::app()->clientScript->registerScript('min-max', '

$(".aqua-panel-tabs-icons .minimize").click(function(){

     $(this).parents(".aqua-panel").children(".aqua-panel-content").slideToggle("fast");

    return false;
});

$(".aqua-panel-tabs-icons .maximize").click(function(){
    var panel = $(this).parents(".aqua-panel");


    
    if($(panel).hasClass("fullscreen")){
        $(panel).removeClass("fullscreen");
       $(panel).children(".aqua-panel-content").css("height", "auto");
       $(panel).children(".aqua-panel-content").css("width", "auto");
       $(panel).children(".aqua-panel-content").css("overflow", "inherit");
        $("body").css("overflow-y", "auto");
    }
    else{
    
        

        var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName("body")[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
        $(panel).addClass("fullscreen");
        $(panel).children(".aqua-panel-content").slideDown("fast");
        $(panel).children(".aqua-panel-content").css("height", y-60);
        $(panel).children(".aqua-panel-content").css("overflow-y", "scroll");
        $("body").css("overflow-y", "hidden");
        $(panel).children(".aqua-panel-content").css("width", x-20);
       
    }
    return false;
});

');
        ?>
    </body>
</html>
