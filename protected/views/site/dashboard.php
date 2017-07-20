<?php
$this->breadcrumbs = array(
    'Dashboard',
);
?> 




<div class="span4">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">8</i><span class="panel-divider"></span><h2>Charts
                <span>http://code.google.com/p/flot</span>
            </h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <?php
            $this->widget('bootstrap.widgets.TbTabs', array(
                'type' => 'tabs',
                'placement' => 'above', // 'above', 'right', 'below' or 'left'
                'htmlOptions' => array('class' => 'inpanel'),
                'encodeLabel' => false,
                'tabs' => array(
                    array('label' => '<span class="modernpics">8</span>', 'content' => '<br/><div id="graph2" style="height:294px;width:520px;"></div><div class="info-panel">
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
                                <div class="span1">
                                    <span class="aqua-shortcut text-align-center">
                                        <span class="modernpics newline">m</span>
                                        <span class="label label-important">5 new messages</span>
                                    </span>
                                </div>
                            </div>'),
                    array('label' => '<span class="modernpics">6</span>', 'content' => '<br/><div id="graph1" style="height:294px; width:520px;"></div><div class="info-panel">
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
                                <div class="span1">
                                    <span class="aqua-shortcut text-align-center">
                                        <span class="modernpics newline">m</span>
                                        <span class="label label-important">5 new messages</span>
                                    </span>
                                </div>
                            </div>'),
                    array('label' => '<span class="modernpics">7</span> Real Time',
                        'content' => '<div class="info-panel">
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
                                <div class="span1">
                                    <span class="aqua-shortcut text-align-center">
                                        <span class="modernpics newline">m</span>
                                        <span class="label label-important">5 new messages</span>
                                    </span>
                                </div>
                            </div>
                            <div class="clear"></div>
                        <div id="graph3" style="height:264px;padding: 0;"></div>
                        ', 'active' => true),
                ),
            ));
            ?>
        </div>
    </div>
</div>

<div class="span1">
    <a href="#" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">b</span>
        <span class="label label-success">Comments</span>
    </a>
</div>
<div class="span1">
    <a href="#" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">m</span>
        <span class="label">Messages</span>
    </a>
</div>
<div class="span1">
    <a href="#" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Preferences</span>
    </a>
</div>
<div class="span1">
    <a href="#" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">9</span>
        <span class="label label-warning">Alerts</span>
    </a>
</div>

<div class="span1">
    <a href="#" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">{</span>
        <span class="label label-info">Events</span>
    </a>
</div>
<div class="span1">
    <a href="#" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">J</span>
        <span class="label label-info">Tags</span>
    </a>
</div>
<div class="span3">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">b</i><span class="panel-divider"></span><h2>Last Visits</h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <div class="clearfix">
                <div class="aqua-well-new-users">
                    <span class="aqua-avatar">
                        <img class="img-rounded img-polaroid" src="<?php echo Yii::app()->baseUrl; ?>/images/avatar1.jpg" alt="user" height="45" />
                    </span>
                    <div class="aqua-user">
                        <span class="aqua-user-name">John Doe</span>
                        <div class="btn-group">
                            <a href="#" class="btn btn-small"><span class="icon-cog"></span></a>
                            <a href="#" class="btn btn-small dropdown-toggle" data-toggle="dropdown"> 
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#" tabindex="-1">Action</a></li>
                                <li><a href="#" tabindex="-1">Another action</a></li>
                                <li><a href="#" tabindex="-1">Something else</a></li>
                                <li class="divider"></li>
                                <li><a href="#" tabindex="-1">Separate link</a></li>
                            </ul>
                        </div>
                    </div>

                    <span class="aqua-user-info">
                        <table>
                            <tr><td><strong>Joined:</strong></td><td><span class="modernpics icons16">a</span> 2/9/2012 <span class="modernpics icons16">}</span> 10:15</td></tr>
                            <tr><td><strong>Last visit:</strong></td><td><span class="modernpics icons16">a</span> 6/12/2012 <span class="modernpics icons16">}</span> 9:11:17</td></tr>
                            <tr><td><strong>Time on site:</strong></td><td> <span class="modernpics icons16">}</span> 36m 16s</td></tr>

                        </table>
                    </span>
                    <div class="clear"></div>
                </div>
                <div class="aqua-well-new-users">
                    <span class="aqua-avatar">
                        <img class="img-rounded img-polaroid" src="<?php echo Yii::app()->baseUrl; ?>/images/avatar4.jpg" alt="user" height="45" />
                    </span>
                    <div class="aqua-user">

                        <span class="aqua-user-name">Jack Ritch</span>

                        <div class="btn-group">
                            <a href="#" class="btn btn-small"><span class="icon-cog"></span></a>
                            <a href="#" class="btn btn-small dropdown-toggle" data-toggle="dropdown"> 
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#" tabindex="-1">Action</a></li>
                                <li><a href="#" tabindex="-1">Another action</a></li>
                                <li><a href="#" tabindex="-1">Something else</a></li>
                                <li class="divider"></li>
                                <li><a href="#" tabindex="-1">Separate link</a></li>
                            </ul>
                        </div>


                    </div>
                    <span class="aqua-user-info">
                        <table>
                            <tr><td><strong>Joined:</strong></td><td><span class="modernpics icons16">a</span> 2/8/2012 <span class="modernpics icons16">}</span> 13:34:27</td></tr>
                            <tr><td><strong>Last visit:</strong></td><td><span class="modernpics icons16">a</span> 6/8/2012 <span class="modernpics icons16">}</span> 10:16:43</td></tr>
                            <tr><td><strong>Time on site:</strong></td><td> <span class="modernpics icons16">}</span> 10m 16s</td></tr>

                        </table>
                    </span>

                </div>
            </div>
        </div>
    </div>
</div>

<?php Yii::app()->clientScript->registerScript('flots', '
                var sin = [], cos = [];
                for (var i = 0; i < 14; i += 0.5) {
                    sin.push([i, Math.sin(i)]);
                    cos.push([i, Math.cos(i)]);
                }
                var plot = $.plot($("#graph1"),
                [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
                    series: {
                        lines: { show: true },
                        points: { show: true }
                    },
                    
                    colors: ["#267da2","#dc8900", "#436fa3", "#99ccd9","#bcbcbc", "#1e4555", "#353535"],
                    grid: { hoverable: true, clickable: true },
                    yaxis: { min: -1.2, max: 1.2 }
                });
                var data = [
                    { label: "Series1",  data: 10},
                    { label: "Series2",  data: 30},
                    { label: "Series3",  data: 90},
                    { label: "Series4",  data: 70},
                    { label: "Series5",  data: 80},
                    { label: "Series6",  data: 110}
                ];
              $.plot($("#graph2"), data, 
                {
                    series: {
                        pie: { 
                            show: true
                        }
                    },
                    colors: ["#267da2","#dc8900", "#436fa3", "#99ccd9","#bcbcbc", "#1e4555", "#353535"],
                    legend: {
                        show: true
                    },
                    grid: { hoverable: true, clickable: true }
                });
                var data = [], totalPoints = 100;
                function getRandomData() {
                    if (data.length > 0)
                        data = data.slice(1);
                    while (data.length < totalPoints) {
                        var prev = data.length > 0 ? data[data.length - 1] : 50;
                        var y = prev + Math.random() * 10 - 5;
                        if (y < 0)
                            y = 0;
                        if (y > 100)
                            y = 100;
                        data.push(y);
                    }
                    var res = [];
                    for (var i = 0; i < data.length; ++i)
                        res.push([i, data[i]])
                    return res;
                }
                var updateInterval = 100;
                var options = {
                    series: { shadowSize: 0 }, // drawing is faster without shadows
                    colors: ["#267da2","#dc8900", "#436fa3", "#99ccd9","#bcbcbc", "#1e4555", "#353535"],
                    yaxis: { min: 0, max: 100 },
                    xaxis: { show: false }
                };
                var plot = $.plot($("#graph3"), [ getRandomData() ], options);
                function update() {
                    plot.setData([ getRandomData() ]);
                    
                    plot.draw();
                    setTimeout(update, updateInterval);
                }
                update();
                ');
?>



<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/flot/excanvas.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/flot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/flot/jquery.flot.resize.min.js"></script>

