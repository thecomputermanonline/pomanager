<?php
$this->breadcrumbs = array(
    'Icons',
);
?>

<div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">W</i><span class="panel-divider"></span>
            <h2>Easy to use @font-face Icons</h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <div id="rounded-example" class="modernpics">
                <span class="letter">
                    <h3>10 predefinied colors...</h3>
                </span>
                <span class="icons-black">f<span class="letter">black</span></span>
                <span class="icons-blue">f<span class="letter">blue</span></span>
                <span>f<span class="letter">Default - dark blue</span></span>
                <span class="icons-red">f<span class="letter">red</span></span>
                <span class="icons-yellow">f<span class="letter">yellow</span></span>
                <span class="icons-orange">f<span class="letter">orange</span></span>
                <span class="icons-green">f<span class="letter">green</span></span>
                <span class="icons-pink">f<span class="letter">pink</span></span>
                <span class="icons-purple">f<span class="letter">purple</span></span>
                <span class="icons-white" style="background: #aaa; padding: 0px 10px">f<span class="letter">white</span></span>
                <div class="clear"></div>
                <span class="letter">
                    <h3>If You need more colors...</h3>
                    <?php $this->beginWidget('ext.prettify.JPrettify'); ?>
                    .icons-gray{
                    color: #555;
                    }
                    <?php $this->endWidget(); ?>
                </span>
                <div class="clear"></div>
                <span class="letter">
                    <h3>7 predefinied sizes of icons...</h3>
                </span>
                <span class="icons16">f<span class="letter">icons16</span></span>
                <span class="icons24">f<span class="letter">icons24</span></span>
                <span class="icons32">f<span class="letter">icons32</span></span>
                <span class="icons48">f<span class="letter">icons48</span></span>
                <span class="icons64">f<span class="letter">icons64</span></span>
                <span class="icons72">f<span class="letter">icons72</span></span>
                <span class="icons90">f<span class="letter">icons90</span></span>
                <div class="clear"></div>
                <span class="letter">
                    <h3>If You need more sizes...</h3>
                    <?php $this->beginWidget('ext.prettify.JPrettify'); ?>
                    .icons256{
                    font-size: 256px;
                    }
                    <?php $this->endWidget(); ?>
                </span>
                <div class="clear"></div>
                <span class="letter">
                    <h3>How to use...</h3>
                    <?php $this->beginWidget('ext.prettify.JPrettify'); ?>
                    <htmlTag class="modernpics [iconsSizeClass] [icons-color-class]">f</htmlTag>
                    <?php $this->endWidget(); ?>
                </span>
                <div class="letter well">

                    <h3>Examples:</h3>
                    <table>
                        <tr>
                            <td>
                                <span class="modernpics icons16">y</span>
                            </td>
                            <td> 
                                <?php $this->beginWidget('ext.prettify.JPrettify'); ?>
                                <span class="modernpics icons16">y</span>
                                <?php $this->endWidget(); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="modernpics icons24 icons-red">P</span>
                            </td>
                            <td> 
                                <?php $this->beginWidget('ext.prettify.JPrettify'); ?>
                                <span class="modernpics icons24 icons-red">P</span>
                                <?php $this->endWidget(); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="modernpics icons48 icons-orange">m</span>
                            </td>
                            <td> 
                                <?php $this->beginWidget('ext.prettify.JPrettify'); ?>
                                <span class="modernpics icons48 icons-orange">m</span>
                                <?php $this->endWidget(); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="modernpics icons90 icons-blue">(</span>
                            </td>
                            <td> 
                                <?php $this->beginWidget('ext.prettify.JPrettify'); ?>
                                <span class="modernpics icons90 icons-blue">(</span>
                                <?php $this->endWidget(); ?>
                            </td>
                        </tr>
                    </table>
                    <div class="clear"></div>
                </div>

                <span class="letter">
                    <h3>All @font-face icons:</h3>
                </span>
                <span>A<span class="letter">A</span></span>
                <span>B<span class="letter">B</span></span>
                <span>C<span class="letter">C</span></span>
                <span>D<span class="letter">D</span></span>
                <span>E<span class="letter">E</span></span>
                <span>F<span class="letter">F</span></span>
                <span>G<span class="letter">G</span></span>
                <span>H<span class="letter">H</span></span>
                <span>I<span class="letter">I</span></span>
                <span>J<span class="letter">J</span></span>
                <span>K<span class="letter">K</span></span>
                <span>L<span class="letter">L</span></span>
                <span>M<span class="letter">M</span></span>
                <span>N<span class="letter">N</span></span>
                <span>O<span class="letter">O</span></span>
                <span>P<span class="letter">P</span></span>
                <span>Q<span class="letter">Q</span></span>
                <span>R<span class="letter">R</span></span>
                <span>S<span class="letter">S</span></span>
                <span>T<span class="letter">T</span></span>
                <span>U<span class="letter">U</span></span>
                <span>V<span class="letter">V</span></span>
                <span>W<span class="letter">W</span></span>
                <span>X<span class="letter">X</span></span>
                <span>Y<span class="letter">Y</span></span>
                <span>Z<span class="letter">Z</span></span>
                <span>a<span class="letter">a</span></span>
                <span>b<span class="letter">b</span></span>
                <span>c<span class="letter">c</span></span>
                <span>d<span class="letter">d</span></span>
                <span>e<span class="letter">e</span></span>
                <span>f<span class="letter">f</span></span>
                <span>g<span class="letter">g</span></span>
                <span>h<span class="letter">h</span></span>
                <span>i<span class="letter">i</span></span>
                <span>j<span class="letter">j</span></span>
                <span>k<span class="letter">k</span></span>
                <span>l<span class="letter">l</span></span>
                <span>m<span class="letter">m</span></span>
                <span>n<span class="letter">n</span></span>
                <span>o<span class="letter">o</span></span>
                <span>p<span class="letter">p</span></span>
                <span>q<span class="letter">q</span></span>
                <span>r<span class="letter">r</span></span>
                <span>s<span class="letter">s</span></span>
                <span>t<span class="letter">t</span></span>
                <span>u<span class="letter">u</span></span>
                <span>v<span class="letter">v</span></span>
                <span>w<span class="letter">w</span></span>
                <span>x<span class="letter">x</span></span>
                <span>y<span class="letter">y</span></span>
                <span>z<span class="letter">z</span></span>
                <span>1<span class="letter">1</span></span>
                <span>2<span class="letter">2</span></span>
                <span>3<span class="letter">3</span></span>
                <span>4<span class="letter">4</span></span>
                <span>5<span class="letter">5</span></span>
                <span>6<span class="letter">6</span></span>
                <span>7<span class="letter">7</span></span>
                <span>8<span class="letter">8</span></span>
                <span>9<span class="letter">9</span></span>
                <span>0<span class="letter">0</span></span>
                <span>`<span class="letter">`</span></span>
                <span>~<span class="letter">~</span></span>
                <span>!<span class="letter">!</span></span>
                <span>@<span class="letter">@</span></span>
                <span>#<span class="letter">#</span></span>
                <span>$<span class="letter">$</span></span>
                <span>%<span class="letter">%</span></span>
                <span>^<span class="letter">^</span></span>
                <span>,<span class="letter">,</span></span>
                <span>*<span class="letter">*</span></span>
                <span>(<span class="letter">(</span></span>
                <span>)<span class="letter">)</span></span>
                <span>-<span class="letter">-</span></span>
                <span>_<span class="letter">_</span></span>
                <span>+<span class="letter">+</span></span>
                <span>=<span class="letter">=</span></span>
                <span>[<span class="letter">[</span></span>
                <span>{<span class="letter">{</span></span>
                <span>]<span class="letter">]</span></span>
                <span>}<span class="letter">}</span></span>
                <span>'<span class="letter">'</span></span>
                <span>:<span class="letter">:</span></span>
                <span>;<span class="letter">;</span></span>
                <span>&lt;<span class="letter">&lt;</span></span>
                <span>&gt;<span class="letter">&gt;</span></span>
                <span>?<span class="letter">?</span></span>
                <span>/<span class="letter">/</span></span>
            </div>


            <span class="letter">
                <h3>You can also use Icon glyphs from Bootstrap </h3>
                <h6>Styles of Icon glyphs:</h6>
                <ul>
                    <li>Default (<i class="icon-glass"></i> icon blue), </li>
                    <li style="background: #aaa;">Standard (<i class="icon-glass icon-white"></i> icon-white),</li>
                </ul>

                <ul class="gl-icons clearfix">
                    <li><i class="icon-glass"></i> icon-glass</li>
                    <li><i class="icon-music"></i> icon-music</li>
                    <li><i class="icon-search"></i> icon-search</li>
                    <li><i class="icon-envelope"></i> icon-envelope</li>
                    <li><i class="icon-heart"></i> icon-heart</li>
                    <li><i class="icon-star"></i> icon-star</li>
                    <li><i class="icon-star-empty"></i> icon-star-empty</li>
                    <li><i class="icon-user"></i> icon-user</li>
                    <li><i class="icon-film"></i> icon-film</li>
                    <li><i class="icon-th-large"></i> icon-th-large</li>
                    <li><i class="icon-th"></i> icon-th</li>
                    <li><i class="icon-th-list"></i> icon-th-list</li>
                    <li><i class="icon-ok"></i> icon-ok</li>
                    <li><i class="icon-remove"></i> icon-remove</li>
                    <li><i class="icon-zoom-in"></i> icon-zoom-in</li>
                    <li><i class="icon-zoom-out"></i> icon-zoom-out</li>
                    <li><i class="icon-off"></i> icon-off</li>
                    <li><i class="icon-signal"></i> icon-signal</li>
                    <li><i class="icon-cog"></i> icon-cog</li>
                    <li><i class="icon-trash"></i> icon-trash</li>
                    <li><i class="icon-home"></i> icon-home</li>
                    <li><i class="icon-file"></i> icon-file</li>
                    <li><i class="icon-time"></i> icon-time</li>
                    <li><i class="icon-road"></i> icon-road</li>
                    <li><i class="icon-download-alt"></i> icon-download-alt</li>
                    <li><i class="icon-download"></i> icon-download</li>
                    <li><i class="icon-upload"></i> icon-upload</li>
                    <li><i class="icon-inbox"></i> icon-inbox</li>

                    <li><i class="icon-play-circle"></i> icon-play-circle</li>
                    <li><i class="icon-repeat"></i> icon-repeat</li>
                    <li><i class="icon-refresh"></i> icon-refresh</li>
                    <li><i class="icon-list-alt"></i> icon-list-alt</li>
                    <li><i class="icon-lock"></i> icon-lock</li>
                    <li><i class="icon-flag"></i> icon-flag</li>
                    <li><i class="icon-headphones"></i> icon-headphones</li>
                    <li><i class="icon-volume-off"></i> icon-volume-off</li>
                    <li><i class="icon-volume-down"></i> icon-volume-down</li>
                    <li><i class="icon-volume-up"></i> icon-volume-up</li>
                    <li><i class="icon-qrcode"></i> icon-qrcode</li>
                    <li><i class="icon-barcode"></i> icon-barcode</li>
                    <li><i class="icon-tag"></i> icon-tag</li>
                    <li><i class="icon-tags"></i> icon-tags</li>
                    <li><i class="icon-book"></i> icon-book</li>
                    <li><i class="icon-bookmark"></i> icon-bookmark</li>
                    <li><i class="icon-print"></i> icon-print</li>
                    <li><i class="icon-camera"></i> icon-camera</li>
                    <li><i class="icon-font"></i> icon-font</li>
                    <li><i class="icon-bold"></i> icon-bold</li>
                    <li><i class="icon-italic"></i> icon-italic</li>
                    <li><i class="icon-text-height"></i> icon-text-height</li>
                    <li><i class="icon-text-width"></i> icon-text-width</li>
                    <li><i class="icon-align-left"></i> icon-align-left</li>
                    <li><i class="icon-align-center"></i> icon-align-center</li>
                    <li><i class="icon-align-right"></i> icon-align-right</li>
                    <li><i class="icon-align-justify"></i> icon-align-justify</li>
                    <li><i class="icon-list"></i> icon-list</li>

                    <li><i class="icon-indent-left"></i> icon-indent-left</li>
                    <li><i class="icon-indent-right"></i> icon-indent-right</li>
                    <li><i class="icon-facetime-video"></i> icon-facetime-video</li>
                    <li><i class="icon-picture"></i> icon-picture</li>
                    <li><i class="icon-pencil"></i> icon-pencil</li>
                    <li><i class="icon-map-marker"></i> icon-map-marker</li>
                    <li><i class="icon-adjust"></i> icon-adjust</li>
                    <li><i class="icon-tint"></i> icon-tint</li>
                    <li><i class="icon-edit"></i> icon-edit</li>
                    <li><i class="icon-share"></i> icon-share</li>
                    <li><i class="icon-check"></i> icon-check</li>
                    <li><i class="icon-move"></i> icon-move</li>
                    <li><i class="icon-step-backward"></i> icon-step-backward</li>
                    <li><i class="icon-fast-backward"></i> icon-fast-backward</li>
                    <li><i class="icon-backward"></i> icon-backward</li>
                    <li><i class="icon-play"></i> icon-play</li>
                    <li><i class="icon-pause"></i> icon-pause</li>
                    <li><i class="icon-stop"></i> icon-stop</li>
                    <li><i class="icon-forward"></i> icon-forward</li>
                    <li><i class="icon-fast-forward"></i> icon-fast-forward</li>
                    <li><i class="icon-step-forward"></i> icon-step-forward</li>
                    <li><i class="icon-eject"></i> icon-eject</li>
                    <li><i class="icon-chevron-left"></i> icon-chevron-left</li>
                    <li><i class="icon-chevron-right"></i> icon-chevron-right</li>
                    <li><i class="icon-plus-sign"></i> icon-plus-sign</li>
                    <li><i class="icon-minus-sign"></i> icon-minus-sign</li>
                    <li><i class="icon-remove-sign"></i> icon-remove-sign</li>
                    <li><i class="icon-ok-sign"></i> icon-ok-sign</li>

                    <li><i class="icon-question-sign"></i> icon-question-sign</li>
                    <li><i class="icon-info-sign"></i> icon-info-sign</li>
                    <li><i class="icon-screenshot"></i> icon-screenshot</li>
                    <li><i class="icon-remove-circle"></i> icon-remove-circle</li>
                    <li><i class="icon-ok-circle"></i> icon-ok-circle</li>
                    <li><i class="icon-ban-circle"></i> icon-ban-circle</li>
                    <li><i class="icon-arrow-left"></i> icon-arrow-left</li>
                    <li><i class="icon-arrow-right"></i> icon-arrow-right</li>
                    <li><i class="icon-arrow-up"></i> icon-arrow-up</li>
                    <li><i class="icon-arrow-down"></i> icon-arrow-down</li>
                    <li><i class="icon-share-alt"></i> icon-share-alt</li>
                    <li><i class="icon-resize-full"></i> icon-resize-full</li>
                    <li><i class="icon-resize-small"></i> icon-resize-small</li>
                    <li><i class="icon-plus"></i> icon-plus</li>
                    <li><i class="icon-minus"></i> icon-minus</li>
                    <li><i class="icon-asterisk"></i> icon-asterisk</li>
                    <li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
                    <li><i class="icon-gift"></i> icon-gift</li>
                    <li><i class="icon-leaf"></i> icon-leaf</li>
                    <li><i class="icon-fire"></i> icon-fire</li>
                    <li><i class="icon-eye-open"></i> icon-eye-open</li>
                    <li><i class="icon-eye-close"></i> icon-eye-close</li>
                    <li><i class="icon-warning-sign"></i> icon-warning-sign</li>
                    <li><i class="icon-plane"></i> icon-plane</li>
                    <li><i class="icon-calendar"></i> icon-calendar</li>
                    <li><i class="icon-random"></i> icon-random</li>
                    <li><i class="icon-comment"></i> icon-comment</li>
                    <li><i class="icon-magnet"></i> icon-magnet</li>

                    <li><i class="icon-chevron-up"></i> icon-chevron-up</li>
                    <li><i class="icon-chevron-down"></i> icon-chevron-down</li>
                    <li><i class="icon-retweet"></i> icon-retweet</li>
                    <li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
                    <li><i class="icon-folder-close"></i> icon-folder-close</li>
                    <li><i class="icon-folder-open"></i> icon-folder-open</li>
                    <li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
                    <li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
                    <li><i class="icon-hdd"></i> icon-hdd</li>
                    <li><i class="icon-bullhorn"></i> icon-bullhorn</li>
                    <li><i class="icon-bell"></i> icon-bell</li>
                    <li><i class="icon-certificate"></i> icon-certificate</li>
                    <li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
                    <li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
                    <li><i class="icon-hand-right"></i> icon-hand-right</li>
                    <li><i class="icon-hand-left"></i> icon-hand-left</li>
                    <li><i class="icon-hand-up"></i> icon-hand-up</li>
                    <li><i class="icon-hand-down"></i> icon-hand-down</li>
                    <li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
                    <li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
                    <li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
                    <li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
                    <li><i class="icon-globe"></i> icon-globe</li>
                    <li><i class="icon-wrench"></i> icon-wrench</li>
                    <li><i class="icon-tasks"></i> icon-tasks</li>
                    <li><i class="icon-filter"></i> icon-filter</li>
                    <li><i class="icon-briefcase"></i> icon-briefcase</li>
                    <li><i class="icon-fullscreen"></i> icon-fullscreen</li>
                    <li><i class="icon-pie-chart"></i> icon-pie-chart</li>
                </ul>
            </span>



        </div>
    </div>
</div>

