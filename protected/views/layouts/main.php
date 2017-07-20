<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Order Management - track your orders</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/css/style.css"); ?>
        
             <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/mycss/styles.css"); ?>
                 <?php // Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/css/aquablue.css"); ?>
 <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/mycss/jquery-1.10.2.min.js', CClientScript::POS_END);?>
        <?php //Yii::app()->clientScript->registerScript('jquery',Yii::app()->request->baseUrl . "/mycss/jquery-1.10.2.min.js"); ?>
    </head>
    <body>
        <header>
            <div id="aqua-header">
                <div class="aqua-container">
                    <a href="<?php echo Yii::app()->baseUrl; ?>/" class="aqua-well-mini">
                        <h1 class="aqua-slogan">Purchase Order Manager</h1>
                        <h2 class="aqua-slogan">Track your orders with us</h2>
                    </a>
                    <div class="aqua-well-mini pull-right">
                        <div class="aqua-user">

                            <span class="aqua-user-name"><?php echo  Yii::app()->user->name; ?></span>

                            <div class="btn-group">
                                <a href="<?php echo Yii::app()->baseUrl; ?>/user/preferences/id/1" class="btn btn-small"><span class="icon-cog"></span></a>
                                <a href="#" class="btn btn-small dropdown-toggle" data-toggle="dropdown"> 
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu pull-right">
							
                                    <li><a href="<?php echo $this->createUrl('/user/profile'); ?>" tabindex="-1">Profile</a></li>
                                    <li><a href="<?php echo $this->createUrl('/message'); ?>" tabindex="-2">Messages</a></li>
                                    <li><a href="<?php echo $this->createUrl('changepassword'); ?>" tabindex="-2">Change Password</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo $this->createUrl('/user/logout')?>">Logout</a> </li>
                                </ul>
                            </div>


                        </div>
                        <span class="aqua-avatar">
                            <img src="<?php echo Yii::app()->baseUrl; ?>/images/user.png" alt="user" width="46" height="45" />
                        </span>

                    </div>
                    <div class="aqua-header-shortcuts pull-right ">
<!--                        <div class="btn-group pull-right">
                            <a data-toggle="dropdown" href="#" class="aqua-well-mini-blue text-align-center">
                                <span class="modernpics icons-white icons48 newline">f</span>
                                <span class="label label-info">5 new users</span>
                            </a>
                            <div class="dropdown-menu quick-info">
                                <table class="info-dropdown">
                                    <tr><td rowspan="4" class="aqua-avatar-quick-list"> <img class="img-rounded img-polaroid" src="<?php echo Yii::app()->baseUrl; ?>/images/avatar1.jpg" alt="user" height="45" /></td></tr>
                                    <tr><td><a href="#">John Doe <span class="modernpics icons16">=</span></a></td></tr>
                                    <tr><td>2/9/2012 10:15 <span class="modernpics icons16">}</span></td></tr>
                                    <tr><td>john.doe@mail.com <span class="modernpics icons16">@</span></td></tr>
                                </table>
                                <table class="info-dropdown">
                                    <tr><td rowspan="4" class="aqua-avatar-quick-list">  <img class="img-rounded img-polaroid" src="<?php echo Yii::app()->baseUrl; ?>/images/avatar2.jpg" alt="user" height="45" /></td></tr>
                                    <tr><td><a href="#">John Doe <span class="modernpics icons16">=</span></a></td></tr>
                                    <tr><td>2/9/2012 10:15 <span class="modernpics icons16">}</span></td></tr>
                                    <tr><td>john.doe@mail.com <span class="modernpics icons16">@</span></td></tr>
                                </table>
                                <table class="info-dropdown">
                                    <tr><td rowspan="4" class="aqua-avatar-quick-list">  <img class="img-rounded img-polaroid" src="<?php echo Yii::app()->baseUrl; ?>/images/avatar3.jpg" alt="user" height="45" /></td></tr>
                                    <tr><td><a href="#">John Doe <span class="modernpics icons16">=</span></a></td></tr>
                                    <tr><td>2/9/2012 10:15 <span class="modernpics icons16">}</span></td></tr>
                                    <tr><td>john.doe@mail.com <span class="modernpics icons16">@</span></td></tr>
                                </table>
                                <table class="info-dropdown">
                                    <tr><td rowspan="4" class="aqua-avatar-quick-list">  <img class="img-rounded img-polaroid" src="<?php echo Yii::app()->baseUrl; ?>/images/avatar4.jpg" alt="user" height="45" /></td></tr>
                                    <tr><td><a href="#">John Doe <span class="modernpics icons16">=</span></a></td></tr>
                                    <tr><td>2/9/2012 10:15 <span class="modernpics icons16">}</span></td></tr>
                                    <tr><td>john.doe@mail.com <span class="modernpics icons16">@</span></td></tr>
                                </table>

                            </div>
                        </div>-->

                        <a href="<?php echo $this->createUrl('/message'); ?>"  class="aqua-well-mini-red text-align-center">
                            <span class="modernpics icons-white newline">m</span>
                            <span class="label label-important"><?php if (Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId())): ?>
		(<?php echo Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId()); ?>)
		<?php endif; ?> messages</span>
                        </a>
<!--                        <a href="#" class="aqua-well-mini-green text-align-center">
                            <span class="modernpics icons-white newline">b</span>
                            <span class="label label-success">10 comments</span>
                        </a>-->


                    </div>
                </div>
            </div>
            <div  id="aqua-menu" data-offset-top="80" data-spy="affix" class="subnav navbar affix">

                <div class="aqua-container">
                    <a data-target="#collapse_2" data-toggle="collapse" class="btn btn-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>


                    <?php
                    $this->widget('bootstrap.widgets.TbMenu', array(
                        'activateParents' => true,
                        'activateItems' => true,
                        'items' => array(
                            array('label' => '', 'url' => array('site/index'), 'icon' => 'home white'),
							array('label' => 'Customers', 'url' => array('//customers/customers/admin'), 'icon' => 'picture white margin','visible' =>  yii::app()->user->data()->superuser),
			

                            array('label' => 'Orders', 'url' => array('//orders/orders/admin'), 'icon' => 'list white margin','visible' =>  yii::app()->user->data()->superuser),
							
                            array('label' => 'Your Orders', 'url' => array('//orders/orders/inbox'), 'icon' => 'list white margin', 'visible' => !yii::app()->user->data()->superuser),
							array('label' => 'Documents', 'url' => array('//orders/documents/admin'), 'icon' => 'pie-chart white margin','visible' =>  yii::app()->user->data()->superuser),
							array('label' => 'Products', 'url' => array('//products/products/admin'), 'icon' => 'th white margin','visible' =>  yii::app()->user->data()->superuser),
				array('label' => 'Documents', 'url' => array('//orders/documents/admin'), 'icon' => 'pie-chart white margin', 'visible' => !yii::app()->user->data()->superuser),
							array('label' => 'Products', 'url' => array('//products/products/admin'), 'icon' => 'th white margin', 'visible' => !yii::app()->user->data()->superuser),
								
//                            array('label' => 'Employees', 'url' => array('//employees/employees/admin'), 'icon' => 'th white margin','visible' =>  yii::app()->user->data()->superuser),
						
//                           array('label' => 'Forms', 'url' => array('site/forms'), 'icon' => 'list white margin'),
//                            array('label' => 'Charts', 'url' => array('site/charts'), 'icon' => 'pie-chart white margin'),
//                            array('label' => 'Grid', 'url' => array('site/grid'), 'icon' => 'th white margin'),
//                            array('label' => 'Icons', 'url' => array('site/icons'), 'icon' => 'picture white margin'),
//                            array('label' => 'Settings', 'url' => "#", 'icon' => 'play-circle white margin', 'itemOptions' => array('onclick' => 'guiders.show("1")')),
                            array('label' => 'Users', 'url' => array('#!'), 'icon' => 'user white margin','visible' =>  yii::app()->user->data()->superuser, 'items' => array(
                                    array('label' => 'Manage Users', 'url' => array('//user/admin'), 'icon' => 'edit margin'),
                                    array('label' => 'Manage Permissions', 'url' => array('//rights'), 'icon' => 'cog margin'),
                                    '---',
									
                                    //array('label' => 'Manage Messages', 'url' => array('//message'), 'icon' => 'lock margin'),
//                                    array('label' => 'Rights', 'url' => array('//rights'), 'icon' => 'check margin'),
//								
//                                    array('label' => 'Messages', 'url' => array('//message'), 'icon' => 'lock margin'),
//                                   // array('label' => 'Signup', 'url' => array('site/signup'), 'icon' => 'check margin'),
//									 '---',
//                                    array('label' => 'Login', 'url' => array('site/login'), 'icon' => 'lock margin'),
//                                    array('label' => 'Signup', 'url' => array('site/signup'), 'icon' => 'check margin'),
//                                    array('label' => 'Password Recovery', 'url' => array('site/recovery'), 'icon' => 'retweet margin'),
                            )),
                        /*    array('label' => '', 'url' => '#', 'items' => array(
                                    array('label' => 'More'),
                                    '---',
                                    array('label' => 'Icons', 'url' => array('site/icons'), 'icon' => 'th margin'),
                                    array('label' => 'Error Page', 'url' => array('site/errorpage'), 'icon' => 'share-alt margin'),
                                    '---',
                                    array('label' => 'SAMPLE MENU'),
                                    array('label' => 'Second Level', 'url' => '#', 'icon' => 'share-alt margin', 'items' => array(
                                            array('label' => 'ShortCut 1', 'url' => '#', 'icon' => 'share-alt margin'),
                                            array('label' => 'Another ShortCut', 'url' => '#', 'icon' => 'share-alt margin'),
                                            array('label' => 'Something else here', 'url' => '#', 'icon' => 'share-alt margin'),
                                    )),
                                    array('label' => 'One more ShortCut', 'url' => '#', 'icon' => 'share-alt margin'),
                            )),*/
                        ),
                    ));
                    ?>
                    <form action="#" class="navbar-form pull-right">
                        <button type="submit" class="aqua-search-button"><span class="icon-search icon-white"></span></button>
                        <input type="text" placeholder="Search..." class="span2">
                    </form>

                </div>

            </div>

        </header>
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
        <footer>
            <div id="footer">
                <div id="aqua-footer">
                    <div class="aqua-container">

                        <div class="span1">
                            <h4>About Us</h4>
                        </div>
                        <div class="span1 offset2">
                              <h4>Locate Us</h4>
                            <?php
//                            $this->widget('bootstrap.widgets.TbMenu', array(
//                                'activateParents' => true,
//                                'activateItems' => true,
//                                'firstItemCssClass' => 'first',
//                                'lastItemCssClass' => 'last',
//                                'items' => array(
//                                    array('label' => 'Footer links'),
//                                    array('label' => 'Charts link', 'url' => "#", 'icon' => 'pie-chart white margin'),
//                                    array('label' => 'Tables link', 'url' => "#", 'icon' => 'list-alt white margin'),
//                                    array('label' => 'Gallery link', 'url' => "#", 'icon' => 'picture white margin'),
//                                    array('label' => 'Forms link', 'url' => "#", 'icon' => 'list white margin'),
//                                    array('label' => 'Tutorial link', 'url' => "#", 'icon' => 'play-circle white margin'),
//                                ),
//                            ));
                            ?>
                        </div>

                        <div class="span1 offset2">
                              <h4>News</h4>
                            <?php
//                            $this->widget('bootstrap.widgets.TbMenu', array(
//                                'activateParents' => true,
//                                'activateItems' => true,
//                                'firstItemCssClass' => 'first',
//                                'lastItemCssClass' => 'last',
//                                'items' => array(
//                                    array('label' => 'Footer links'),
//                                    array('label' => 'Charts link', 'url' => "#", 'icon' => 'pie-chart white margin'),
//                                    array('label' => 'Tables link', 'url' => "#", 'icon' => 'list-alt white margin'),
//                                    array('label' => 'Gallery link', 'url' => "#", 'icon' => 'picture white margin'),
//                                    array('label' => 'Forms link', 'url' => "#", 'icon' => 'list white margin'),
//                                    array('label' => 'Tutorial link', 'url' => "#", 'icon' => 'play-circle white margin'),
//                                ),
//                            ));
//                            ?>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </footer>

        <?php
        $this->widget('ext.eguiders.EGuider', array(
            'id' => '1',
            'next' => '2',
            'title' => 'Welcome',
            'buttons' => array(array('name' => 'Next')),
            'description' => 'This is sample Guide tour. You can use it to teach new users, show some new functions etc.',
            'overlay' => true,
            'xButton' => true,
            'show' => false,
            'autoFocus' => true
                )
        );
        ?>



        <?php
        $this->widget('ext.eguiders.EGuider', array(
            'id' => '2',
            'next' => '3',
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
            'autoFocus' => true
                )
        );
        ?>

        <?php
        $this->widget('ext.eguiders.EGuider', array(
            'id' => '3',
            'next' => '4',
            'title' => 'You can place it anywhere',
            'attachTo' => '.aqua-slogan',
            'position' => 7,
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
            'description' => 'Guides can easly stick to ID or Class of css elements.'.$this->renderPartial('//guide/toElement', null, true),
            'overlay' => true,
            'xButton' => true,
            'show' => false,
            'autoFocus' => true,
            'width'=>600
                )
        );
        ?>
        <?php
        $this->widget('ext.eguiders.EGuider', array(
            'id' => '4',
            'next' => '5',
            'title' => 'Scroll to active guide',
            'attachTo' => '#aqua-footer',
            'position' => 6,
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
            'description' => 'Scroll page to active guide.',
            'overlay' => true,
            'xButton' => true,
            'show' => false,
            'autoFocus' => true
                )
        );
        ?>
        <?php
        $this->widget('ext.eguiders.EGuider', array(
            'id' => '5',
            'title' => 'Read more...',
            'buttons' => array(
                array(
                    'name' => 'Previous',
                    'onclick' => "js:function(){guiders.prev();}"
                ),
                array(
                    'name' => 'Exit',
                    'onclick' => "js:function(){guiders.hideAll();}"
                )
            ),
            'description' => 'You can read more about using Guiders in project page: <div class="label label-info">https://github.com/jeff-optimizely/Guiders-JS</div>',
            'overlay' => true,
            'xButton' => true,
            'show' => false,
            'autoFocus' => true
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
