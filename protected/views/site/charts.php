<?php
$this->breadcrumbs = array(
    'Charts',
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
                    array('label' => '<span class="modernpics">8</span>', 'content' => '<br/><div id="graph4" style="height:264px; width: 500px; padding: 0;"></div><div class="info-panel">
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
                    array('label' => '<span class="modernpics">i</span>', 'content' => '<br/><div id="graph5" style="height:264px; padding: 0;"></div><div class="info-panel">
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

<div class="span3">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Charts<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <div id="graph2" style="height:264px;padding: 0;"></div>
        </div>
    </div>
</div>

<div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Charts2<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <div id="graph1" style="height:264px;padding: 0;"></div>
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
                
                var data = [
                    { label: "Series1",  data: 10},
                    { label: "Series2",  data: 30},
                    { label: "Series3",  data: 90},
                    { label: "Series4",  data: 70},
                    { label: "Series5",  data: 80},
                    { label: "Series6",  data: 110}
                ];
              $.plot($("#graph4"), data, 
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
                



 var d1 = [];
    for (var i = 0; i < 14; i += 0.5)
        d1.push([i, Math.sin(i)]);

    var d2 = [[0, 3], [4, 8], [8, 5], [9, 13]];

    var d3 = [];
    for (var i = 0; i < 14; i += 0.5)
        d3.push([i, Math.cos(i)]);

    var d4 = [];
    for (var i = 0; i < 14; i += 0.1)
        d4.push([i, Math.sqrt(i * 10)]);
    
    var d5 = [];
    for (var i = 0; i < 14; i += 0.5)
        d5.push([i, Math.sqrt(i)]);

    var d6 = [];
    for (var i = 0; i < 14; i += 0.5 + Math.random())
        d6.push([i, Math.sqrt(2*i + Math.sin(i) + 5)]);
                        
    $.plot($("#graph5"), [
        {
            data: d1,
            color: "#267da2",
            lines: { show: true, fill: true }
        },
        {
            data: d2,
            color: "#dc8900",
            bars: { show: true }
        },
        {
            data: d3,
            color: "#436fa3",
            points: { show: true }
        },
        {
            data: d4,
            color: "#99ccd9",
            lines: { show: true }
        },
        {
            data: d5,
            color: "#1e4555",
            lines: { show: true },
            points: { show: true }
        },
        {
            data: d6,
            color: "#353535",
            lines: { show: true, steps: true },
        },
      
    ]);




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



<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/flot/excanvas.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/flot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/flot/jquery.flot.resize.min.js"></script>

