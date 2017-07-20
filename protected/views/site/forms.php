<?php
$this->breadcrumbs = array(
    //'Forms',
);
?>

<div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">!</i><span class="panel-divider"></span><h2>Alerts</h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">

            <div class="alert in alert-block fade alert-success"><a class="close" data-dismiss="alert">×</a><span class="modernpics icons-green">!</span><span class="panel-divider"></span><strong>Alert!</strong> This is example of <span class="label label-success">success</span> alert! You can write messages with html and bootstrap elements (buttons, labels etc.). </div>

            <div class="alert in alert-block fade alert-info"><a class="close" data-dismiss="alert">×</a><span class="modernpics icons-blue">!</span><span class="panel-divider"></span><strong>Alert!</strong> This is example of <span class="label label-info">info</span> alert! You can write messages with html and bootstrap elements (buttons, labels etc.). </div>

            <div class="alert in alert-block fade"><a class="close" data-dismiss="alert">×</a><span class="modernpics icons-orange">!</span><span class="panel-divider"></span><strong>Alert!</strong> This is example of <span class="label label-warning">default</span> alert! You can write messages with html and bootstrap elements (buttons, labels etc.). </div>

            <div class="alert in alert-block fade alert-danger"><a class="close" data-dismiss="alert">×</a><span class="modernpics icons-red">!</span><span class="panel-divider"></span><strong>Alert!</strong> This is example of <span class="label label-important">danger</span> alert! You can write messages with html and bootstrap elements (buttons, labels etc.). </div>

        </div>
    </div>
</div>

<div class="span4">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">4</i><span class="panel-divider"></span><h2>Forms</h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">

            <?php
            /** @var BootActiveForm $form */
            /** @var Form $model */
           // $model = new Form();
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id' => 'horizontalForm',
                'type' => 'horizontal',
                'htmlOptions' => array('class' => 'well')
                    ));
            ?>

<!--            <fieldset>

                <legend>Legend</legend>

                <?php //echo $form->textFieldRow($model, 'name', array('hint' => 'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
                <?php //echo $form->dropDownListRow($model, 'dropdown', array('Something ...', '1', '2', '3', '4', '5')); ?>
                <?php //echo $form->dropDownListRow($model, 'multiDropdown', array('1', '2', '3', '4', '5'), array('multiple' => true)); ?>
                <?php //echo $form->fileFieldRow($model, 'fileField'); ?>
                <?php //echo $form->textAreaRow($model, 'textarea', array('class' => 'span8', 'rows' => 5)); ?>
                <?php //echo $form->uneditableRow($model, 'uneditable', array('class' => 'input-large')); ?>
                <?php //echo $form->textFieldRow($model, 'disabled', array('disabled' => true)); ?>
                <?php //echo $form->textFieldRow($model, 'prepend', array('prepend' => '<span class="modernpics icons24">@</span>')); ?>
                <?php //echo $form->textFieldRow($model, 'append', array('append' => '<span class="modernpics icons24">$</span>')); ?>
                <?php //echo $form->checkBoxRow($model, 'disabledCheckbox', array('disabled' => true)); ?>
                <?php //echo $form->checkBoxListInlineRow($model, 'inlineCheckboxes', array('1', '2', '3')); ?>
                <?php
               // echo //$form->checkBoxListRow($model, 'checkboxes', array(
                    //'Option one is this and that—be sure to include why it\'s great',
                    //'Option two can also be checked and included in form results',
                   // 'Option three can—yes, you guessed it—also be checked and included in form results',
                      //  ), array('hint' => '<strong>Note:</strong> Labels surround all the options for much larger click areas.'));
                ?>
                <?php //echo $form->radioButtonRow($model, 'radioButton'); ?>
                <?php
                //echo $form->radioButtonListRow($model, 'radioButtons', array(
                   // 'Option one is this and that—be sure to include why it\'s great',
                   // 'Option two can is something else and selecting it will deselect option one',
               // ));
                ?>

            </fieldset>-->

            <div class="form-actions">
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'label' => 'Submit')); ?>
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'reset', 'label' => 'Reset')); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>

<div class="span3">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">_</i><span class="panel-divider"></span><h2>Elements</h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <strong>Button groups:</strong>
            <div class="btn-toolbar well">
                <div class="btn-group"><a class="btn" href="#"> <span class="icon-search"></span> Action</a><a data-toggle="dropdown" class="btn dropdown-toggle" href="#"> <span class="caret"></span></a><ul id="yw8" class="dropdown-menu"><li><a tabindex="-1" href="#">Action</a></li><li><a tabindex="-1" href="#">Another action</a></li><li><a tabindex="-1" href="#">Something else</a></li><li class="divider"></li><li><a tabindex="-1" href="#">Separate link</a></li></ul></div>    
                <div class="btn-group"><a class="btn btn-primary" href="#">Action</a><a data-toggle="dropdown" class="btn btn-primary dropdown-toggle" href="#"> <span class="caret"></span></a><ul id="yw9" class="dropdown-menu"><li><a tabindex="-1" href="#">Action</a></li><li><a tabindex="-1" href="#">Another action</a></li><li><a tabindex="-1" href="#">Something else</a></li><li class="divider"></li><li><a tabindex="-1" href="#">Separate link</a></li></ul></div>    
                <div class="btn-group"><a class="btn btn-danger" href="#">Danger</a><a data-toggle="dropdown" class="btn btn-danger dropdown-toggle" href="#"> <span class="caret"></span></a><ul id="yw10" class="dropdown-menu"><li><a tabindex="-1" href="#">Action</a></li><li><a tabindex="-1" href="#">Another action</a></li><li><a tabindex="-1" href="#">Something else</a></li><li class="divider"></li><li><a tabindex="-1" href="#">Separate link</a></li></ul></div>      
            </div>
            <div class="btn-toolbar well">
                <div class="btn-group"><a class="btn btn-success" href="#"><span class="icon-ok-circle icon-white"></span> Success</a><a data-toggle="dropdown" class="btn btn-success dropdown-toggle" href="#"> <span class="caret"></span></a><ul id="yw11" class="dropdown-menu"><li><a tabindex="-1" href="#">Action</a></li><li><a tabindex="-1" href="#">Another action</a></li><li><a tabindex="-1" href="#">Something else</a></li><li class="divider"></li><li><a tabindex="-1" href="#">Separate link</a></li></ul></div>    
                <div class="btn-group"><a class="btn btn-info" href="#">Info</a><a data-toggle="dropdown" class="btn btn-info dropdown-toggle" href="#"> <span class="caret"></span></a><ul id="yw12" class="dropdown-menu"><li><a tabindex="-1" href="#">Action</a></li><li><a tabindex="-1" href="#">Another action</a></li><li><a tabindex="-1" href="#">Something else</a></li><li class="divider"></li><li><a tabindex="-1" href="#">Separate link</a></li></ul></div>     
                <div class="btn-group"><a class="btn btn-inverse" href="#">Inverse</a><a data-toggle="dropdown" class="btn btn-inverse dropdown-toggle" href="#"> <span class="caret"></span></a><ul id="yw13" class="dropdown-menu"><li><a tabindex="-1" href="#">Action</a></li><li><a tabindex="-1" href="#">Another action</a></li><li><a tabindex="-1" href="#">Something else</a></li><li class="divider"></li><li><a tabindex="-1" href="#">Separate link</a></li></ul></div>  
            </div>
            <strong>Block level button:</strong> 
            <div class="btn-toolbar well">
                <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'type' => 'primary',
                    'label' => 'Block level button',
                    'block' => true,
                ));
                ?></div>
            <strong>Radio button and checkbox:</strong>

            <div class="btn-toolbar well">
                <?php
                $this->widget('bootstrap.widgets.TbButtonGroup', array(
                    'type' => 'info',
                    'toggle' => 'radio', // 'checkbox' or 'radio'
                    'buttons' => array(
                        array('label' => 'Left'),
                        array('label' => 'Middle'),
                        array('label' => 'Right'),
                    ),
                ));
                ?>
                <br/><br/>
                <?php
                $this->widget('bootstrap.widgets.TbButtonGroup', array(
                    'type' => 'danger',
                    'toggle' => 'checkbox', // 'checkbox' or 'radio'
                    'buttons' => array(
                        array('label' => 'Left'),
                        array('label' => 'Middle'),
                        array('label' => 'Right'),
                    ),
                ));
                ?>
            </div>
            <strong>Badges:</strong>
            <div class="well">
                <span class="badge">1</span>        <span class="badge badge-success">2</span>        <span class="badge badge-warning">4</span>        <span class="badge badge-important">6</span>        <span class="badge badge-info">8</span>        <span class="badge badge-inverse">10</span>   
            </div>
            <strong>Labels:</strong>
            <div class="well">
                <span class="label">Default</span>        <span class="label label-success">Success</span>        <span class="label label-warning">Warning</span>        <span class="label label-important">Important</span>        <span class="label label-info">Info</span>        <span class="label label-inverse">Inverse</span>   
            </div>

        </div>
    </div>
</div>


<div class="span3">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">_</i><span class="panel-divider"></span><h2>Widgets</h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <strong>Modals:</strong>
            <div class="well">
                <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'label' => 'Open Modal',
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
            <strong>Popovers</strong>
            <div class="well">
                <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'label' => 'Popover',
                    'type' => 'danger',
                    'htmlOptions' => array('data-title' => 'Title', 'data-content' => 'Content', 'rel' => 'popover'),
                ));
                ?>
            </div>
            <strong>Tooltips</strong>
            <div class="well">
                <ul>
                    <li><a data-placement="top" rel="tooltip" href="#" data-original-title="Tooltip on top">Tooltip on top</a></li>
                    <li><a data-placement="right" rel="tooltip" href="#" data-original-title="Tooltip on right">Tooltip on right</a></li>
                    <li><a data-placement="bottom" rel="tooltip" href="#" data-original-title="Tooltip on bottom">Tooltip on bottom</a></li>
                    <li><a data-placement="left" rel="tooltip" href="#" data-original-title="Tooltip on left">Tooltip on left</a></li>
                </ul>
            </div>
            <strong>Progress Bars</strong>
            <div class="well">
                <div class="progress">
                    <div class="bar" style="width: 55%"></div>
                </div>
                <div class="progress progress-info">
                    <div class="bar" style="width: 20%"></div>
                </div>
                <div class="progress progress-success">
                    <div class="bar" style="width: 40%"></div>
                </div>
                <div class="progress progress-warning">
                    <div class="bar" style="width: 60%"></div>
                </div>
                <div class="progress progress-danger">
                    <div class="bar" style="width: 80%"></div>
                </div>
                <div class="progress progress-striped">
                    <div class="bar" style="width: 67%"></div>
                </div>
                <div class="progress progress-striped active">
                    <div class="bar" style="width: 29%"></div>
                </div>
            </div>
            <strong>Collapsible</strong>
            <div class="well">

                <div id="accordion2" class="accordion">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                <span class="modernpics icons24">f</span> Collapsible Group Item #1
                            </a>
                        </div>
                        <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                            <div class="accordion-inner">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="#collapseTwo" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                <span class="modernpics icons24">t</span> Collapsible Group Item #2
                            </a>
                        </div>
                        <div class="accordion-body in collapse" id="collapseTwo" style="height: auto;">
                            <div class="accordion-inner">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="#collapseThree" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                <span class="modernpics icons24">r</span> Collapsible Group Item #3
                            </a>
                        </div>
                        <div class="accordion-body collapse" id="collapseThree">
                            <div class="accordion-inner">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <strong>Tabs</strong>
            <div class="well">

                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a data-toggle="tab" href="#home"><span class="modernpics">i</span></a></li>
                    <li class=""><a data-toggle="tab" href="#profile">Profile</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class=""><a data-toggle="tab" href="#dropdown1">@fat</a></li>
                            <li><a data-toggle="tab" href="#dropdown2">@mdo</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div id="home" class="tab-pane fade active in">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                    </div>
                    <div id="profile" class="tab-pane fade">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                    </div>
                    <div id="dropdown1" class="tab-pane fade">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div id="dropdown2" class="tab-pane fade">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>