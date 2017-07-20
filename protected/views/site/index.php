    <div class="container">


        <div class="site-index">

            <section id="tbButton">

                <h2>Buttons <small>bootstrap.widgets.TbButton</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><td>Default</td><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>buttonType</td><td>string</td><td><code>link</code></td><td>Button callback type. Valid values are <code>link</code>, <code>button</code>, <code>submit</code>, <code>submitLink</code>, <code>reset</code>, <code>ajaxLink</code>, <code>ajaxButton</code> and <code>ajaxSubmit</code>.</td></tr>
                        <tr><td>type</td><td>string</td><td></td><td>Button type. Valid values are <code>primary</code>, <code>info</code>, <code>success</code>, <code>warning</code>, <code>danger</code>, <code>inverse</code> and <code>link</code>.</td></tr>
                        <tr><td>size</td><td>string</td><td></td><td>Button size. Valid values are <code>large</code>, <code>small</code> and <code>mini</code></td></tr>
                        <tr><td>icon</td><td>string</td><td></td><td>Button icon, e.g. <code>ok</code> or <code>remove white</code>.</td></tr>
                        <tr><td>label</td><td>string</td><td></td><td>Button label text.</td></tr>
                        <tr><td>url</td><td>string</td><td></td><td>Button URL.</td></tr>
                        <tr><td>encodeLabel</td><td>boolean</td><td><code>true</code></td><td>Whether the label should be encoded.</td></tr>
                        <tr><td>block</td><td>boolean</td><td><code>false</code></td><td>Whether the button should span the full width of the a parent.</td></tr>
                        <tr><td>active</td><td>boolean</td><td><code>false</code></td><td>Whether the button is active.</td></tr>
                        <tr><td>disabled</td><td>boolean</td><td><code>false</code></td><td>Whether the button is disabled.</td></tr>
                        <tr><td>toggle</td><td>boolean</td><td><code>false</code></td><td>Whether the button can be toggled.</td></tr>
                        <tr><td>loadingText</td><td>string</td><td></td><td>Button loading text.</td></tr>
                        <tr><td>completeText</td><td>string</td><td></td><td>Button complete text.</td></tr>
                        <tr><td>items</td><td>array</td><td></td><td>Button dropdown menu items.</td></tr>
                        <tr><td>htmlOptions</td><td>array</td><td></td><td>Button HTML attributes.</td></tr>
                        <tr><td>ajaxOptions</td><td>array</td><td></td><td>Button AJAX options (used by <code>ajaxLink</code> and <code>ajaxButton</code>).</td></tr>
                        <tr><td>dropdownOptions</td><td>array</td><td></td><td>Button dropdown menu HTML attributes.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/base-css.html#buttons">Button documentation</a></p>

                <h3>Examples</h3>

                <div class="row">
                    <div class="span3">
                        <h4>Large</h4>
                        <p>
                            <a class="btn btn-primary btn-large">Primary</a>                <a class="btn btn-large">Action</a>            </p>
                    </div>

                    <div class="span3">
                        <h4>Normal</h4>
                        <p>
                            <a class="btn btn-primary">Primary</a>                <a class="btn">Action</a>            </p>
                    </div>

                    <div class="span3">
                        <h4>Small</h4>
                        <p>
                            <a class="btn btn-primary btn-small">Primary</a>                <a class="btn btn-small">Action</a>            </p>
                    </div>

                    <div class="span3">
                        <h4>Mini</h4>
                        <p>
                            <a class="btn btn-primary btn-mini">Primary</a>                <a class="btn btn-mini">Action</a>            </p>
                    </div>
                </div>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">size</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">large</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> null, 'large', 'small' or 'mini'</span>
<span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <h4>Dropdowns</h4>

                <div class="btn-toolbar">
                    <div class="btn-group"><a href="#" class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></a><ul class="dropdown-menu" id="yw0"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else</a></li><li class="divider"></li><li class="dropdown-submenu"><a href="#" tabindex="-1">More options</a><ul class="dropdown-menu" id="yw1"><li><a href="#" tabindex="-1">Second level link</a></li><li><a href="#" tabindex="-1">Second level link</a></li><li><a href="#" tabindex="-1">Second level link</a></li><li class="dropdown-submenu"><a href="#" tabindex="-1">Second level link</a><ul class="dropdown-menu" id="yw2"><li><a href="#" tabindex="-1">Third level link</a></li></ul></li></ul></li></ul></div>        <div class="btn-group"><a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></a><ul class="dropdown-menu" id="yw3"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separate link</a></li></ul></div>        <div class="btn-group"><a href="#" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></a><ul class="dropdown-menu" id="yw4"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separate link</a></li></ul></div>        <div class="btn-group"><a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></a><ul class="dropdown-menu" id="yw5"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separate link</a></li></ul></div>        <div class="btn-group"><a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></a><ul class="dropdown-menu" id="yw6"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separate link</a></li></ul></div>        <div class="btn-group"><a href="#" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Inverse <span class="caret"></span></a><ul class="dropdown-menu" id="yw7"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separate link</a></li></ul></div>    </div>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-code">&lt;</span><span class="php-hl-identifier">div</span> <span class="php-hl-reserved">class</span><span class="php-hl-code">=</span><span class="php-hl-quotes">"</span><span class="php-hl-string">btn-toolbar</span><span class="php-hl-quotes">"</span><span class="php-hl-code">&gt;
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButtonGroup</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">buttons</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
            <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Action</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">items</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
                <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Action</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Another action</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Something else</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                </span><span class="php-hl-quotes">'</span><span class="php-hl-string">---</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
                </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Separate link</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
            </span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
&lt;/</span><span class="php-hl-identifier">div</span><span class="php-hl-code">&gt;</span></pre></div></div>
                <h4>Split dropdowns</h4>

                <div class="btn-toolbar">
                    <div class="btn-group"><a href="#" class="btn">Action</a><a href="#" class="btn dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span></a><ul class="dropdown-menu" id="yw8"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separate link</a></li></ul></div>        <div class="btn-group"><a href="#" class="btn btn-primary">Action</a><a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span></a><ul class="dropdown-menu" id="yw9"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separate link</a></li></ul></div>        <div class="btn-group"><a href="#" class="btn btn-danger">Danger</a><a href="#" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span></a><ul class="dropdown-menu" id="yw10"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separate link</a></li></ul></div>        <div class="btn-group"><a href="#" class="btn btn-success">Success</a><a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span></a><ul class="dropdown-menu" id="yw11"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separate link</a></li></ul></div>        <div class="btn-group"><a href="#" class="btn btn-info">Info</a><a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span></a><ul class="dropdown-menu" id="yw12"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separate link</a></li></ul></div>        <div class="btn-group"><a href="#" class="btn btn-inverse">Inverse</a><a href="#" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span></a><ul class="dropdown-menu" id="yw13"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separate link</a></li></ul></div>    </div>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-code">&lt;</span><span class="php-hl-identifier">div</span> <span class="php-hl-reserved">class</span><span class="php-hl-code">=</span><span class="php-hl-quotes">"</span><span class="php-hl-string">btn-toolbar</span><span class="php-hl-quotes">"</span><span class="php-hl-code">&gt;
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButtonGroup</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">buttons</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
            <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Action</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
            </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">items</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
                <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Action</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Another action</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Something else</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                </span><span class="php-hl-quotes">'</span><span class="php-hl-string">---</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
                </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Separate link</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
            </span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
&lt;/</span><span class="php-hl-identifier">div</span><span class="php-hl-code">&gt;</span></pre></div></div>
                <h4>Block</h4>

                <div class="row">

                    <div class="span3">

                        <a class="btn btn-primary btn-block">Block level button</a>
                        <a class="btn btn-block">Block level button</a>
                    </div>

                </div>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Block level button</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">block</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <h4>Stateful</h4>

                <p>
                    <button type="button" name="yt0" data-loading-text="loading..." class="btn btn-primary" id="buttonStateful">Click me</button>    </p>


                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">buttonType</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">button</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Click me</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">loadingText</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">loading...</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">htmlOptions</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">id</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">buttonStateful</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <div><div class="javascript-hl-main"><pre><span class="javascript-hl-code">$</span><span class="javascript-hl-brackets">(</span><span class="javascript-hl-quotes">'</span><span class="javascript-hl-string">#buttonStateful</span><span class="javascript-hl-quotes">'</span><span class="javascript-hl-brackets">)</span><span class="javascript-hl-code">.</span><span class="javascript-hl-identifier">click</span><span class="javascript-hl-brackets">(</span><span class="javascript-hl-reserved">function</span><span class="javascript-hl-brackets">(</span><span class="javascript-hl-brackets">)</span> <span class="javascript-hl-brackets">{</span>
    <span class="javascript-hl-reserved">var</span> <span class="javascript-hl-identifier">btn</span><span class="javascript-hl-code"> = $</span><span class="javascript-hl-brackets">(</span><span class="javascript-hl-reserved">this</span><span class="javascript-hl-brackets">)</span><span class="javascript-hl-code">;
    </span><span class="javascript-hl-identifier">btn</span><span class="javascript-hl-code">.</span><span class="javascript-hl-identifier">button</span><span class="javascript-hl-brackets">(</span><span class="javascript-hl-quotes">'</span><span class="javascript-hl-string">loading</span><span class="javascript-hl-quotes">'</span><span class="javascript-hl-brackets">)</span><span class="javascript-hl-code">; </span><span class="javascript-hl-comment">//</span><span class="javascript-hl-comment"> call the loading function</span>
    <span class="javascript-hl-identifier">setTimeout</span><span class="javascript-hl-brackets">(</span><span class="javascript-hl-reserved">function</span><span class="javascript-hl-brackets">(</span><span class="javascript-hl-brackets">)</span> <span class="javascript-hl-brackets">{</span>
        <span class="javascript-hl-identifier">btn</span><span class="javascript-hl-code">.</span><span class="javascript-hl-identifier">button</span><span class="javascript-hl-brackets">(</span><span class="javascript-hl-quotes">'</span><span class="javascript-hl-string">reset</span><span class="javascript-hl-quotes">'</span><span class="javascript-hl-brackets">)</span><span class="javascript-hl-code">; </span><span class="javascript-hl-comment">//</span><span class="javascript-hl-comment"> call the reset function</span>
    <span class="javascript-hl-brackets">}</span><span class="javascript-hl-code">, </span><span class="javascript-hl-number">3000</span><span class="javascript-hl-brackets">)</span><span class="javascript-hl-code">;
</span><span class="javascript-hl-brackets">}</span><span class="javascript-hl-brackets">)</span><span class="javascript-hl-code">;</span></pre></div></div>
                <h4>Single state</h4>

                <p>
                    <button type="button" name="yt1" data-toggle="button" class="btn btn-primary">Toggle me</button>    </p>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">buttonType</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">button</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Toggle me</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">toggle</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <div class="row">

                    <div class="span3">

                        <h4>Checkbox</h4>

                        <div data-toggle="buttons-checkbox" class="btn-group"><a class="btn btn-primary">Left</a><a class="btn btn-primary">Middle</a><a class="btn btn-primary">Right</a></div>            <br>

                    </div>

                    <div class="span3">

                        <h4>Radio</h4>

                        <div data-toggle="buttons-radio" class="btn-group"><a class="btn btn-primary">Left</a><a class="btn btn-primary">Middle</a><a class="btn btn-primary">Right</a></div>            <br>

                    </div>

                </div>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButtonGroup</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code"> =&gt; </span><span class="php-hl-quotes">'</span><span class="php-hl-string">primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">toggle</span><span class="php-hl-quotes">'</span><span class="php-hl-code"> =&gt; </span><span class="php-hl-quotes">'</span><span class="php-hl-string">radio</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 'checkbox' or 'radio'</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">buttons</span><span class="php-hl-quotes">'</span><span class="php-hl-code"> =&gt; </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Left</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Middle</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Right</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbButtonGroup">

                <h2>Button groups <small>bootstrap.widgets.TbButtonGroup</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>buttonType</td><td>string</td><td><code>link</code></td><td>See <code>TbButton::buttonType</code>.</td></tr>
                        <tr><td>type</td><td>string</td><td></td><td>See <code>TbButton::type</code>.</td></tr>
                        <tr><td>size</td><td>string</td><td></td><td>See <code>TbButton::size</code>.</td></tr>
                        <tr><td>encodeLabel</td><td>boolean</td><td><code>true</code></td><td>See <code>TbButton::encodeLabel</code>.</td></tr>
                        <tr><td>stacked</td><td>boolean</td><td><code>false</code></td><td>Whether the button group appears vertically stacked.</td></tr>
                        <tr><td>toggle</td><td>boolean</td><td><code>false</code></td><td>See <code>TbButton::toggle</code>.</td></tr>
                        <tr><td>dropup</td><td>boolean</td><td><code>false</code></td><td>Whether dropdown menus should drop up instead.</td></tr>
                        <tr><td>buttons</td><td>array</td><td></td><td>Button configurations.</td></tr>
                        <tr><td>htmlOptions</td><td>array</td><td></td><td>Button group HTML attributes.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/components.html#buttonGroups">Button group documentation</a></p>

                <h3>Examples</h3>

                <div class="btn-toolbar">
                    <div class="btn-group"><a href="#" class="btn">Left</a><a href="#" class="btn">Middle</a><a href="#" class="btn">Right</a></div>    </div>

                <div class="btn-toolbar">
                    <div class="btn-group"><a href="#" class="btn">1</a><a href="#" class="btn">2</a><a href="#" class="btn">3</a><a href="#" class="btn">4</a></div>        <div class="btn-group"><a href="#" class="btn">5</a><a href="#" class="btn">6</a><a href="#" class="btn">7</a></div>        <div class="btn-group"><a href="#" class="btn">8</a></div>    </div>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButtonGroup</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">buttons</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">1</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">2</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">3</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">4</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbBreadcrumbs">

                <h2>Breadcrumbs <small>bootstrap.widgets.TbBreadcrumbs</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>separator</td><td>string</td><td><code>/</code></td><td>Separator between links in the breadcrumbs.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/components.html#breadcrumbs">Breadcrumbs documentation</a></p>


                <ul class="breadcrumbs breadcrumb"><li><a href="/yii-bootstrap/">Home</a><span class="divider">/</span></li><li class="active">Library</li></ul>
                <ul class="breadcrumbs breadcrumb"><li><a href="/yii-bootstrap/">Home</a><span class="divider">/</span></li><li><a href="#">Library</a><span class="divider">/</span></li><li class="active">Data</li></ul>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbBreadcrumbs</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">links</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Library</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Data</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbMenu">

                <h2>Menus <small>bootstrap.widgets.TbMenu</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>type</td><td>string</td><td></td><td>Menu type. Valid values are <code>tabs</code>, <code>pills</code> and <code>list</code>.</td></tr>
                        <tr><td>scrollspy</td><td>string|array</td><td></td><td>Scrollspy target or configuration.</td></tr>
                        <tr><td>stacked</td><td>boolean</td><td><code>false</code></td><td>Whether the menu should appear vertically stacked.</td></tr>
                        <tr><td>dropup</td><td>boolean</td><td><code>false</code></td><td>Whether dropdown menus should drop up instead.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/components.html#navs">Menu documentation</a></p>

                <h3>Examples</h3>

                <h4>Basic tabs</h4>

                <ul class="nav nav-tabs" id="yw14"><li class="active"><a href="#">Home</a></li><li><a href="#">Profile</a></li><li><a href="#">Messages</a></li></ul>
                <h4>Stacked tabs</h4>

                <ul class="nav nav-tabs nav-stacked" id="yw15"><li class="active"><a href="#">Home</a></li><li><a href="#">Profile</a></li><li><a href="#">Messages</a></li></ul>
                <h4>Basic pills</h4>

                <ul class="nav nav-pills" id="yw16"><li class="active"><a href="#">Home</a></li><li><a href="#">Profile</a></li><li><a href="#">Messages</a></li></ul>
                <h4>Stacked pills</h4>

                <ul class="nav nav-pills nav-stacked" id="yw17"><li class="active"><a href="#">Home</a></li><li><a href="#">Profile</a></li><li><a href="#">Messages</a></li></ul>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbMenu</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">tabs</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> '', 'tabs', 'pills' (or 'list')</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">stacked</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">false</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> whether this is a stacked menu</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">items</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Home</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">active</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Profile</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Messages</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <h4>Nav list</h4>

                <div style="padding: 8px 0;" class="well">

                    <ul class="nav nav-list" id="yw18"><li class="nav-header">LIST HEADER</li><li class="active"><a href="#"><i class="icon-home"></i> Home</a></li><li><a href="#"><i class="icon-book"></i> Library</a></li><li><a href="#"><i class="icon-pencil"></i> Application</a></li><li class="nav-header">ANOTHER LIST HEADER</li><li><a href="#"><i class="icon-user"></i> Profile</a></li><li><a href="#"><i class="icon-cog"></i> Settings</a></li><li><a href="#"><i class="icon-flag"></i> Help</a></li></ul>
                </div>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbMenu</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">list</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">items</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">LIST HEADER</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Home</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">icon</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">home</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">active</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Library</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">icon</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">book</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Application</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">icon</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">pencil</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">ANOTHER LIST HEADER</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Profile</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">icon</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">user</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Settings</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">icon</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">cog</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Help</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">icon</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">flag</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbNavbar">

                <h2>Navbar <small>bootstrap.widgets.TbNavbar</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>type</td><td>string</td><td></td><td>Navbar type. Set this value to <code>inverse</code> for a dark navbar.</td></tr>
                        <tr><td>brand</td><td>string</td><td></td><td>Brand link text.</td></tr>
                        <tr><td>brandUrl</td><td>string</td><td></td><td>Brand link URL.</td></tr>
                        <tr><td>brandOptions</td><td>array</td><td></td><td>Brand link HTML attributes.</td></tr>
                        <tr><td>fixed</td><td>string</td><td><code>top</code></td><td>Fix location of the navbar. Valid values are <code>top</code> and <code>bottom</code>.</td></tr>
                        <tr><td>fluid</td><td>boolean</td><td><code>false</code></td><td>Whether the navbar should span over the full width of the document.</td></tr>
                        <tr><td>collapse</td><td>boolean</td><td><code>false</code></td><td>Whether the navbar should collapse on narrow screens.</td></tr>
                        <tr><td>items</td><td>array</td><td></td><td>Navigation items.</td></tr>
                        <tr><td>htmlOptions</td><td>array</td><td></td><td>Navbar HTML attributes.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/components.html#navbar">Navbar documentation</a></p>

                <h3>Examples</h3>

                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <a data-target="#collapse_0" data-toggle="collapse" class="btn btn-navbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <a class="brand" href="#">Default</a>
                            <div id="collapse_0" class="nav-collapse">
                                <ul class="nav" id="yw19">
                                    <li class="active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <span class="caret"></span></a>
                                        <ul class="dropdown-menu" id="yw20"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else here</a></li><li class="divider"></li><li class="nav-header">NAV HEADER</li><li><a href="#" tabindex="-1">Separated link</a></li><li><a href="#" tabindex="-1">One more separated link</a></li></ul></li></ul><form action="" class="navbar-search pull-left"><input type="text" placeholder="Search" class="search-query span2"></form><ul id="yw21" class="pull-right nav"><li><a href="#">Link</a></li><li class="divider-vertical"></li><li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <span class="caret"></span></a><ul class="dropdown-menu" id="yw22"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else here</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separated link</a></li></ul></li></ul></div></div></div></div>
                <div class="navbar navbar-inverse"><div class="navbar-inner"><div class="container"><a data-target="#collapse_1" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><a class="brand" href="#">Inverse</a><div id="collapse_1" class="nav-collapse"><ul class="nav" id="yw23"><li class="active"><a href="#">Home</a></li><li><a href="#">Link</a></li><li><a href="#">Link</a></li><li><a href="#">Link</a></li><li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <span class="caret"></span></a><ul class="dropdown-menu" id="yw24"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else here</a></li><li class="divider"></li><li class="nav-header">NAV HEADER</li><li><a href="#" tabindex="-1">Separated link</a></li><li><a href="#" tabindex="-1">One more separated link</a></li></ul></li></ul><form action="" class="navbar-search pull-left"><input type="text" placeholder="Search" class="search-query span2"></form><ul id="yw25" class="pull-right nav"><li><a href="#">Link</a></li><li class="divider-vertical"></li><li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <span class="caret"></span></a><ul class="dropdown-menu" id="yw26"><li><a href="#" tabindex="-1">Action</a></li><li><a href="#" tabindex="-1">Another action</a></li><li><a href="#" tabindex="-1">Something else here</a></li><li class="divider"></li><li><a href="#" tabindex="-1">Separated link</a></li></ul></li></ul></div></div></div></div>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbNavbar</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">inverse</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> null or 'inverse'</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">brand</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Project name</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">brandUrl</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">collapse</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> requires bootstrap-responsive.css</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">items</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
            <span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbMenu</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
            </span><span class="php-hl-quotes">'</span><span class="php-hl-string">items</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
                <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Home</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">active</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Link</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Dropdown</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">items</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
                    <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Action</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                    </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Another action</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                    </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Something else here</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">---</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
                    </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">NAV HEADER</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                    </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Separated link</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                    </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">One more separated link</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                </span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
            </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">&lt;form class="navbar-search pull-left" action=""&gt;&lt;input type="text" class="search-query span2" placeholder="Search"&gt;&lt;/form&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
            <span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbMenu</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
            </span><span class="php-hl-quotes">'</span><span class="php-hl-string">htmlOptions</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">pull-right</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
            </span><span class="php-hl-quotes">'</span><span class="php-hl-string">items</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
                <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Link</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                </span><span class="php-hl-quotes">'</span><span class="php-hl-string">---</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
                </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Dropdown</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">items</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
                    <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Action</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                    </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Another action</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                    </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Something else here</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">---</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
                    </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Separated link</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
                </span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
            </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbDetailView">

                <h2>Detail views <small>bootstrap.widgets.TbDetailView</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>type</td><td>array</td><td><code>striped</code>, <code>condensed</code></td><td>Grid types. Valid values are <code>striped</code>, <code>bordered</code> and/or <code>condensed</code>.</td></tr>
                    </tbody>
                </table>

                <h3>Examples</h3>

                <table id="yw27" class="detail-view table table-striped table-condensed"><tbody><tr class="odd"><th>First name</th><td>Mark</td></tr>
                        <tr class="even"><th>Last name</th><td>Otto</td></tr>
                        <tr class="odd"><th>Language</th><td>CSS</td></tr>
                    </tbody></table>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbDetailView</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">data</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">id</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-number">1</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">firstName</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Mark</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">lastName</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Otto</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">language</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">CSS</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">attributes</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">name</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">firstName</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">First name</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">name</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">lastName</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Last name</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">name</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">language</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Language</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbGridView">

                <h2>Grid views <small>bootstrap.widgets.TbGridView</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>type</td><td>array</td><td></td><td>Grid types. Valid values are <code>striped</code>, <code>bordered</code> and/or <code>condensed</code>.</td></tr>
                    </tbody>
                </table>

                <h3>Examples</h3>

                <h4>Default</h4>

                <div class="grid-view" id="yw28">
                    <table class="items table">
                        <thead>
                            <tr>
                                <th id="yw28_c0">#</th><th id="yw28_c1">First name</th><th id="yw28_c2">Last name</th><th id="yw28_c3">Language</th><th id="yw28_c4" class="button-column">&nbsp;</th></tr>
                        </thead>
                        <tbody>
                            <tr class="odd"><td style="width: 60px">1</td><td>Mark</td><td>Otto</td><td>CSS</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                            <tr class="even"><td style="width: 60px">2</td><td>Jacob</td><td>Thornton</td><td>JavaScript</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                            <tr class="odd"><td style="width: 60px">3</td><td>Stu</td><td>Dent</td><td>HTML</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                        </tbody>
                    </table><div title="/yii-bootstrap/" style="display:none" class="keys"><span>1</span><span>2</span><span>3</span></div>
                </div>
                <h4>Striped</h4>

                <div class="grid-view" id="yw29">
                    <table class="items table table-striped">
                        <thead>
                            <tr>
                                <th id="yw29_c0">#</th><th id="yw29_c1">First name</th><th id="yw29_c2">Last name</th><th id="yw29_c3">Language</th><th id="yw29_c4" class="button-column">&nbsp;</th></tr>
                        </thead>
                        <tbody>
                            <tr class="odd"><td style="width: 60px">1</td><td>Mark</td><td>Otto</td><td>CSS</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                            <tr class="even"><td style="width: 60px">2</td><td>Jacob</td><td>Thornton</td><td>JavaScript</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                            <tr class="odd"><td style="width: 60px">3</td><td>Stu</td><td>Dent</td><td>HTML</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                        </tbody>
                    </table><div title="/yii-bootstrap/" style="display:none" class="keys"><span>1</span><span>2</span><span>3</span></div>
                </div>
                <h4>Bordered</h4>

                <div class="grid-view" id="yw30">
                    <table class="items table table-bordered">
                        <thead>
                            <tr>
                                <th id="yw30_c0">#</th><th id="yw30_c1">First name</th><th id="yw30_c2">Last name</th><th id="yw30_c3">Language</th><th id="yw30_c4" class="button-column">&nbsp;</th></tr>
                        </thead>
                        <tbody>
                            <tr class="odd"><td style="width: 60px">1</td><td>Mark</td><td>Otto</td><td>CSS</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                            <tr class="even"><td style="width: 60px">2</td><td>Jacob</td><td>Thornton</td><td>JavaScript</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                            <tr class="odd"><td style="width: 60px">3</td><td>Stu</td><td>Dent</td><td>HTML</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                        </tbody>
                    </table><div title="/yii-bootstrap/" style="display:none" class="keys"><span>1</span><span>2</span><span>3</span></div>
                </div>
                <h4>Condensed</h4>

                <div class="grid-view" id="yw31">
                    <table class="items table table-condensed">
                        <thead>
                            <tr>
                                <th id="yw31_c0">#</th><th id="yw31_c1">First name</th><th id="yw31_c2">Last name</th><th id="yw31_c3">Language</th><th id="yw31_c4" class="button-column">&nbsp;</th></tr>
                        </thead>
                        <tbody>
                            <tr class="odd"><td style="width: 60px">1</td><td>Mark</td><td>Otto</td><td>CSS</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                            <tr class="even"><td style="width: 60px">2</td><td>Jacob</td><td>Thornton</td><td>JavaScript</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                            <tr class="odd"><td style="width: 60px">3</td><td>Stu</td><td>Dent</td><td>HTML</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                        </tbody>
                    </table><div title="/yii-bootstrap/" style="display:none" class="keys"><span>1</span><span>2</span><span>3</span></div>
                </div>
                <h4>Striped, bordered and condensed</h4>

                <div class="grid-view" id="yw32">
                    <table class="items table table-striped table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th id="yw32_c0">#</th><th id="yw32_c1">First name</th><th id="yw32_c2">Last name</th><th id="yw32_c3">Language</th><th id="yw32_c4" class="button-column">&nbsp;</th></tr>
                            <tr class="filters">
                                <td><div class="filter-container"><input type="text" name="Person[id]"></div></td><td><div class="filter-container"><input type="text" name="Person[firstName]"></div></td><td><div class="filter-container"><input type="text" name="Person[lastName]"></div></td><td><div class="filter-container"><input type="text" name="Person[language]"></div></td><td>&nbsp;</td></tr>
                        </thead>
                        <tbody>
                            <tr class="odd"><td style="width: 60px">1</td><td>Mark</td><td>Otto</td><td>CSS</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                            <tr class="even"><td style="width: 60px">2</td><td>Jacob</td><td>Thornton</td><td>JavaScript</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                            <tr class="odd"><td style="width: 60px">3</td><td>Stu</td><td>Dent</td><td>HTML</td><td class="button-column"><a href="#" rel="tooltip" title="View" class="view"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Update" class="update"><i class="icon-pencil"></i></a> <a href="#" rel="tooltip" title="Delete" class="delete"><i class="icon-trash"></i></a></td></tr>
                        </tbody>
                    </table><div title="/yii-bootstrap/" style="display:none" class="keys"><span>1</span><span>2</span><span>3</span></div>
                </div>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-var">$gridDataProvider</span><span class="php-hl-code"> = </span><span class="php-hl-reserved">new</span> <span class="php-hl-identifier">CArrayDataProvider</span><span class="php-hl-brackets">(</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">id</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-number">1</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">firstName</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Mark</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">lastName</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Otto</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">language</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">CSS</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">id</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-number">2</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">firstName</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Jacob</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">lastName</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Thornton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">language</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">JavaScript</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">id</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-number">3</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">firstName</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Stu</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">lastName</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Dent</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">language</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">HTML</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">;</span></pre></div></div>
                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbGridView</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">striped bordered condensed</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">dataProvider</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-var">$gridDataProvider</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">template</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">"</span><span class="php-hl-string">{items}</span><span class="php-hl-quotes">"</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">columns</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">name</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">id</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">header</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">name</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">firstName</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">header</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">First name</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">name</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">lastName</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">header</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Last name</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">name</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">language</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">header</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Language</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
            <span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButtonColumn</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
            </span><span class="php-hl-quotes">'</span><span class="php-hl-string">htmlOptions</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">style</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">width: 50px</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbActiveForm">

                <h2>Forms <small>bootstrap.widgets.TbActiveForm</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>type</td><td>string</td><td><code>vertical</code></td><td>Form type. Valid values are <code>vertical</code>, <code>inline</code>, <code>horizontal</code> and <code>search</code>.</td></tr>
                        <tr><td>inlineErrors</td><td>boolean</td><td></td><td>Whether to display errors as blocks.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/base-css.html#forms">Form documentation</a></p>

                <h3>Examples</h3>

                <h4>Vertical</h4>

                <form method="post" action="/yii-bootstrap/" id="verticalForm" class="well form-vertical">
                    <label for="TestForm_textField">Text input</label><input type="text" id="TestForm_textField" name="TestForm[textField]" class="span3">	<label for="TestForm_password">Password</label><input type="password" id="TestForm_password" name="TestForm[password]" class="span3">	<label for="TestForm_checkbox" class="checkbox"><input type="hidden" name="TestForm[checkbox]" value="0" id="ytTestForm_checkbox"><input type="checkbox" value="1" id="TestForm_checkbox" name="TestForm[checkbox]">
                        Check me out</label>	<button name="yt2" type="submit" class="btn">Login</button>
                </form>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-comment">/*</span><span class="php-hl-comment">*</span><span class="php-hl-inlinedoc"> @var </span><span class="php-hl-comment">BootActiveForm $form </span><span class="php-hl-comment">*/</span>
<span class="php-hl-var">$form</span><span class="php-hl-code"> = </span><span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">beginWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbActiveForm</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">id</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">verticalForm</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">htmlOptions</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">well</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">textFieldRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">textField</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">span3</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">passwordFieldRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">password</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">span3</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">checkboxRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">checkbox</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">buttonType</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">submit</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Login</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">endWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <h4>Search</h4>

                <form method="post" action="/yii-bootstrap/" id="searchForm" class="well form-search">
                    <div class="input-prepend"><span class="add-on"><i class="icon-search"></i></span><input type="text" id="TestForm_textField" name="TestForm[textField]" placeholder="Text input" class="input-medium"></div>	<button name="yt3" type="submit" class="btn">Go</button>
                </form>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-comment">/*</span><span class="php-hl-comment">*</span><span class="php-hl-inlinedoc"> @var </span><span class="php-hl-comment">BootActiveForm $form </span><span class="php-hl-comment">*/</span>
<span class="php-hl-var">$form</span><span class="php-hl-code"> = </span><span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">beginWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbActiveForm</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">id</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">searchForm</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">search</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">htmlOptions</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">well</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">textFieldRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">textField</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">input-medium</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">prepend</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">&lt;i class="icon-search"&gt;&lt;/i&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">buttonType</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">submit</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Go</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">endWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <h4>Inline</h4>

                <form method="post" action="/yii-bootstrap/" id="inlineForm" class="well form-inline">
                    <input type="text" id="TestForm_textField" name="TestForm[textField]" placeholder="Text input" class="input-small">	<input type="password" id="TestForm_password" name="TestForm[password]" placeholder="Password" class="input-small">	<button name="yt4" type="submit" class="btn">Log in</button>
                </form>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-comment">/*</span><span class="php-hl-comment">*</span><span class="php-hl-inlinedoc"> @var </span><span class="php-hl-comment">BootActiveForm $form </span><span class="php-hl-comment">*/</span>
<span class="php-hl-var">$form</span><span class="php-hl-code"> = </span><span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">beginWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbActiveForm</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">id</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">inlineForm</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">inline</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">htmlOptions</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">well</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">textFieldRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">textField</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">input-small</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">passwordFieldRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">password</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">input-small</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">buttonType</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">submit</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Log in</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">endWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <h4>Horizontal</h4>

                <form method="post" action="/yii-bootstrap/" id="horizontalForm" class="form-horizontal">
                    <fieldset>

                        <legend>Legend</legend>

                        <div class="control-group "><label for="TestForm_textField" class="control-label">Text input</label><div class="controls"><input type="text" id="TestForm_textField" name="TestForm[textField]"><p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p></div></div>		<div class="control-group "><label for="TestForm_dropdown" class="control-label">Select list</label><div class="controls"><select id="TestForm_dropdown" name="TestForm[dropdown]">
                                    <option value="0">Something ...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></div></div>		<div class="control-group "><label for="TestForm_multiDropdown" class="control-label">Multiple select</label><div class="controls"><select id="TestForm_multiDropdown" name="TestForm[multiDropdown][]" multiple="multiple">
                                    <option value="0">1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                    <option value="4">5</option>
                                </select></div></div>		<div class="control-group "><label for="TestForm_fileField" class="control-label">File input</label><div class="controls"><input type="hidden" name="TestForm[fileField]" value="" id="ytTestForm_fileField"><input type="file" id="TestForm_fileField" name="TestForm[fileField]"></div></div>		<div class="control-group "><label for="TestForm_textarea" class="control-label">Textarea</label><div class="controls"><textarea id="TestForm_textarea" name="TestForm[textarea]" rows="5" class="span8"></textarea></div></div>		<div class="control-group "><label for="TestForm_uneditable" class="control-label">Uneditable input</label><div class="controls"><span class="input-large uneditable-input"></span></div></div>		<div class="control-group "><label for="TestForm_disabled" class="control-label">Disabled input</label><div class="controls"><input type="text" id="TestForm_disabled" name="TestForm[disabled]" disabled="disabled"></div></div>		<div class="control-group "><label for="TestForm_prepend" class="control-label">Prepend text</label><div class="controls"><div class="input-prepend"><span class="add-on">@</span><input type="text" id="TestForm_prepend" name="TestForm[prepend]"></div></div></div>		<div class="control-group "><label for="TestForm_append" class="control-label">Append text</label><div class="controls"><div class="input-append"><input type="text" id="TestForm_append" name="TestForm[append]"><span class="add-on">.00</span></div></div></div>		<div class="control-group "><div class="controls"><label for="TestForm_disabledCheckbox" class="checkbox"><input type="hidden" name="TestForm[disabledCheckbox]" value="0" id="ytTestForm_disabledCheckbox"><input type="checkbox" value="1" id="TestForm_disabledCheckbox" name="TestForm[disabledCheckbox]" disabled="disabled">
                                    Disabled checkbox</label></div></div>		<div class="control-group "><label for="TestForm_inlineCheckboxes" class="control-label">Inline checkboxes</label><div class="controls"><input type="hidden" name="TestForm[inlineCheckboxes]" value="" id="ytTestForm_inlineCheckboxes"><label class="checkbox inline"><input type="checkbox" name="TestForm[inlineCheckboxes][]" value="0" id="TestForm_inlineCheckboxes_0"><label for="TestForm_inlineCheckboxes_0">1</label></label><label class="checkbox inline"><input type="checkbox" name="TestForm[inlineCheckboxes][]" value="1" id="TestForm_inlineCheckboxes_1"><label for="TestForm_inlineCheckboxes_1">2</label></label><label class="checkbox inline"><input type="checkbox" name="TestForm[inlineCheckboxes][]" value="2" id="TestForm_inlineCheckboxes_2"><label for="TestForm_inlineCheckboxes_2">3</label></label></div></div>		<div class="control-group "><label for="TestForm_checkboxes" class="control-label">Checkboxes</label><div class="controls"><input type="hidden" name="TestForm[checkboxes]" value="" id="ytTestForm_checkboxes"><label class="checkbox"><input type="checkbox" name="TestForm[checkboxes][]" value="0" id="TestForm_checkboxes_0"><label for="TestForm_checkboxes_0">Option one is this and that&mdash;be sure to include why it's great</label></label><label class="checkbox"><input type="checkbox" name="TestForm[checkboxes][]" value="1" id="TestForm_checkboxes_1"><label for="TestForm_checkboxes_1">Option two can also be checked and included in form results</label></label><label class="checkbox"><input type="checkbox" name="TestForm[checkboxes][]" value="2" id="TestForm_checkboxes_2"><label for="TestForm_checkboxes_2">Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results</label></label><p class="help-block"><strong>Note:</strong> Labels surround all the options for much larger click areas.</p></div></div>		<div class="control-group "><div class="controls"><label for="TestForm_radioButton" class="radio"><input type="hidden" name="TestForm[radioButton]" value="0" id="ytTestForm_radioButton"><input type="radio" value="1" id="TestForm_radioButton" name="TestForm[radioButton]">
                                    Radio Button</label></div></div>		<div class="control-group "><label for="TestForm_radioButtons" class="control-label">Radio buttons</label><div class="controls"><input type="hidden" name="TestForm[radioButtons]" value="" id="ytTestForm_radioButtons"><label class="radio"><input type="radio" name="TestForm[radioButtons]" value="0" id="TestForm_radioButtons_0"><label for="TestForm_radioButtons_0">Option one is this and that&mdash;be sure to include why it's great</label></label><label class="radio"><input type="radio" name="TestForm[radioButtons]" value="1" id="TestForm_radioButtons_1"><label for="TestForm_radioButtons_1">Option two can is something else and selecting it will deselect option one</label></label></div></div>
                    </fieldset>

                    <div class="form-actions">
                        <button name="yt5" type="submit" class="btn btn-primary">Submit</button>		<button name="yt6" type="reset" class="btn">Reset</button>	</div>

                </form>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-comment">/*</span><span class="php-hl-comment">*</span><span class="php-hl-inlinedoc"> @var </span><span class="php-hl-comment">BootActiveForm $form </span><span class="php-hl-comment">*/</span>
<span class="php-hl-var">$form</span><span class="php-hl-code"> = </span><span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">beginWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbActiveForm</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">id</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">horizontalForm</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">horizontal</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
&lt;</span><span class="php-hl-identifier">fieldset</span><span class="php-hl-code">&gt;
 
    &lt;</span><span class="php-hl-identifier">legend</span><span class="php-hl-code">&gt;</span><span class="php-hl-identifier">Legend</span><span class="php-hl-code">&lt;/</span><span class="php-hl-identifier">legend</span><span class="php-hl-code">&gt;
 
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">textFieldRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">textField</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">hint</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">In addition to freeform text, any HTML5 text-based input appears like so.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">dropDownListRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">dropdown</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Something ...</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">1</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">2</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">3</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">4</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">5</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">dropDownListRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">multiDropdown</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">1</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">2</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">3</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">4</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">5</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">multiple</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">fileFieldRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">fileField</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">textAreaRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">textarea</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">span8</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">rows</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-number">5</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">uneditableRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">uneditable</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">textFieldRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">disabled</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">disabled</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">textFieldRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">prepend</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">prepend</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">@</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">textFieldRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">append</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">append</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">.00</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">checkBoxRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">disabledCheckbox</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">disabled</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">checkBoxListInlineRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">inlineCheckboxes</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">1</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">2</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">3</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">checkBoxListRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">checkboxes</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">Option one is this and that&mdash;be sure to include why it</span><span class="php-hl-special">\'</span><span class="php-hl-string">s great</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Option two can also be checked and included in form results</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">hint</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">&lt;strong&gt;Note:&lt;/strong&gt; Labels surround all the options for much larger click areas.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">radioButtonRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">radioButton</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">radioButtonListRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">radioButtons</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">Option one is this and that&mdash;be sure to include why it</span><span class="php-hl-special">\'</span><span class="php-hl-string">s great</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Option two can is something else and selecting it will deselect option one</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
&lt;/</span><span class="php-hl-identifier">fieldset</span><span class="php-hl-code">&gt;
 
&lt;</span><span class="php-hl-identifier">div</span> <span class="php-hl-reserved">class</span><span class="php-hl-code">=</span><span class="php-hl-quotes">"</span><span class="php-hl-string">form-actions</span><span class="php-hl-quotes">"</span><span class="php-hl-code">&gt;
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">buttonType</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">submit</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Submit</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">buttonType</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">reset</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Reset</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
&lt;/</span><span class="php-hl-identifier">div</span><span class="php-hl-code">&gt;
 
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">endWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <h4>Tabular</h4>

                <form method="post" action="/yii-bootstrap/" id="horizontalForm" class="form-horizontal">
                    <div id="yw33"><ul class="nav nav-tabs" id="yw34"><li class="active"><a href="#yw33_tab_1" data-toggle="tab">English</a></li><li><a href="#yw33_tab_2" data-toggle="tab">Finnish</a></li><li><a href="#yw33_tab_3" data-toggle="tab">Swedish</a></li></ul><div class="tab-content"><div class="tab-pane fade active in" id="yw33_tab_1"><fieldset>

                                    <legend>English translation</legend>

                                    <div class="control-group "><label for="TestForm_en_textField" class="control-label">Text input</label><div class="controls"><input type="text" id="TestForm_en_textField" name="TestForm[en][textField]"></div></div>    <div class="control-group "><label for="TestForm_en_textarea" class="control-label">Textarea</label><div class="controls"><textarea id="TestForm_en_textarea" name="TestForm[en][textarea]" rows="8" class="span8"></textarea></div></div>    <div class="control-group "><label for="TestForm_en_checkboxes" class="control-label">Checkboxes</label><div class="controls"><input type="hidden" name="TestForm[en][checkboxes]" value="" id="ytTestForm_en_checkboxes"><label class="checkbox"><input type="checkbox" name="TestForm[en][checkboxes][]" value="0" id="TestForm_en_checkboxes_0"><label for="TestForm_en_checkboxes_0">Option one is this and that&mdash;be sure to include why it's great</label></label><label class="checkbox"><input type="checkbox" name="TestForm[en][checkboxes][]" value="1" id="TestForm_en_checkboxes_1"><label for="TestForm_en_checkboxes_1">Option two can also be checked and included in form results</label></label><label class="checkbox"><input type="checkbox" name="TestForm[en][checkboxes][]" value="2" id="TestForm_en_checkboxes_2"><label for="TestForm_en_checkboxes_2">Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results</label></label><p class="help-block"><strong>Note:</strong> Labels surround all the options for much larger click areas.</p></div></div>
                                </fieldset></div><div class="tab-pane fade" id="yw33_tab_2"><fieldset>

                                    <legend>Finnish translation</legend>

                                    <div class="control-group "><label for="TestForm_fi_textField" class="control-label">Text input</label><div class="controls"><input type="text" id="TestForm_fi_textField" name="TestForm[fi][textField]"></div></div>    <div class="control-group "><label for="TestForm_fi_textarea" class="control-label">Textarea</label><div class="controls"><textarea id="TestForm_fi_textarea" name="TestForm[fi][textarea]" rows="8" class="span8"></textarea></div></div>    <div class="control-group "><label for="TestForm_fi_checkboxes" class="control-label">Checkboxes</label><div class="controls"><input type="hidden" name="TestForm[fi][checkboxes]" value="" id="ytTestForm_fi_checkboxes"><label class="checkbox"><input type="checkbox" name="TestForm[fi][checkboxes][]" value="0" id="TestForm_fi_checkboxes_0"><label for="TestForm_fi_checkboxes_0">Option one is this and that&mdash;be sure to include why it's great</label></label><label class="checkbox"><input type="checkbox" name="TestForm[fi][checkboxes][]" value="1" id="TestForm_fi_checkboxes_1"><label for="TestForm_fi_checkboxes_1">Option two can also be checked and included in form results</label></label><label class="checkbox"><input type="checkbox" name="TestForm[fi][checkboxes][]" value="2" id="TestForm_fi_checkboxes_2"><label for="TestForm_fi_checkboxes_2">Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results</label></label><p class="help-block"><strong>Note:</strong> Labels surround all the options for much larger click areas.</p></div></div>
                                </fieldset></div><div class="tab-pane fade" id="yw33_tab_3"><fieldset>

                                    <legend>Swedish translation</legend>

                                    <div class="control-group "><label for="TestForm_sv_textField" class="control-label">Text input</label><div class="controls"><input type="text" id="TestForm_sv_textField" name="TestForm[sv][textField]"></div></div>    <div class="control-group "><label for="TestForm_sv_textarea" class="control-label">Textarea</label><div class="controls"><textarea id="TestForm_sv_textarea" name="TestForm[sv][textarea]" rows="8" class="span8"></textarea></div></div>    <div class="control-group "><label for="TestForm_sv_checkboxes" class="control-label">Checkboxes</label><div class="controls"><input type="hidden" name="TestForm[sv][checkboxes]" value="" id="ytTestForm_sv_checkboxes"><label class="checkbox"><input type="checkbox" name="TestForm[sv][checkboxes][]" value="0" id="TestForm_sv_checkboxes_0"><label for="TestForm_sv_checkboxes_0">Option one is this and that&mdash;be sure to include why it's great</label></label><label class="checkbox"><input type="checkbox" name="TestForm[sv][checkboxes][]" value="1" id="TestForm_sv_checkboxes_1"><label for="TestForm_sv_checkboxes_1">Option two can also be checked and included in form results</label></label><label class="checkbox"><input type="checkbox" name="TestForm[sv][checkboxes][]" value="2" id="TestForm_sv_checkboxes_2"><label for="TestForm_sv_checkboxes_2">Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results</label></label><p class="help-block"><strong>Note:</strong> Labels surround all the options for much larger click areas.</p></div></div>
                                </fieldset></div></div></div>
                    <div class="form-actions">
                        <button name="yt7" type="submit" class="btn btn-primary">Submit</button>        <button name="yt8" type="reset" class="btn">Reset</button>    </div>

                </form>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-comment">/*</span><span class="php-hl-comment">*</span><span class="php-hl-inlinedoc"> @var </span><span class="php-hl-comment">TbActiveForm $form </span><span class="php-hl-comment">*/</span>
<span class="php-hl-var">$form</span><span class="php-hl-code"> = </span><span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">beginWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbActiveForm</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">id</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">horizontalForm</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">horizontal</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbTabs</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">tabs</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">getTabularFormTabs</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$form</span><span class="php-hl-code">, </span><span class="php-hl-var">$model</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
&lt;</span><span class="php-hl-identifier">div</span> <span class="php-hl-reserved">class</span><span class="php-hl-code">=</span><span class="php-hl-quotes">"</span><span class="php-hl-string">form-actions</span><span class="php-hl-quotes">"</span><span class="php-hl-code">&gt;
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">buttonType</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">submit</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Submit</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">buttonType</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">reset</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Reset</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
&lt;/</span><span class="php-hl-identifier">div</span><span class="php-hl-code">&gt;
 
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">endWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <div><div class="php-hl-main"><pre><span class="php-hl-reserved">public</span> <span class="php-hl-reserved">function</span> <span class="php-hl-identifier">getTabularFormTabs</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$form</span><span class="php-hl-code">, </span><span class="php-hl-var">$model</span><span class="php-hl-brackets">)</span>
<span class="php-hl-brackets">{</span>
    <span class="php-hl-var">$tabs</span><span class="php-hl-code"> = </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">;
    </span><span class="php-hl-var">$count</span><span class="php-hl-code"> = </span><span class="php-hl-number">0</span><span class="php-hl-code">;
    </span><span class="php-hl-reserved">foreach</span> <span class="php-hl-brackets">(</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">en</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">English</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">fi</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Finnish</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">sv</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Swedish</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span> <span class="php-hl-reserved">as</span> <span class="php-hl-var">$locale</span><span class="php-hl-code"> =&gt; </span><span class="php-hl-var">$language</span><span class="php-hl-brackets">)</span>
    <span class="php-hl-brackets">{</span>
        <span class="php-hl-var">$tabs</span><span class="php-hl-brackets">[</span><span class="php-hl-brackets">]</span><span class="php-hl-code"> = </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
            <span class="php-hl-quotes">'</span><span class="php-hl-string">active</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-var">$count</span><span class="php-hl-code">++ === </span><span class="php-hl-number">0</span><span class="php-hl-code">,
            </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-var">$language</span><span class="php-hl-code">,
            </span><span class="php-hl-quotes">'</span><span class="php-hl-string">content</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">renderPartial</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">_tabular</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">form</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-var">$form</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">model</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">locale</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-var">$locale</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">language</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-var">$language</span><span class="php-hl-brackets">)</span><span class="php-hl-code">, </span><span class="php-hl-reserved">true</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-brackets">)</span><span class="php-hl-code">;
    </span><span class="php-hl-brackets">}</span>
    <span class="php-hl-reserved">return</span> <span class="php-hl-var">$tabs</span><span class="php-hl-code">;
</span><span class="php-hl-brackets">}</span></pre></div></div>
                <div><div class="php-hl-main"><pre><span class="php-hl-code">&lt;</span><span class="php-hl-identifier">fieldset</span><span class="php-hl-code">&gt;
 
    &lt;</span><span class="php-hl-identifier">legend</span><span class="php-hl-code">&gt;&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-identifier">CHtml</span><span class="php-hl-code">::</span><span class="php-hl-identifier">encode</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$language</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span> <span class="php-hl-identifier">translation</span><span class="php-hl-code">&lt;/</span><span class="php-hl-identifier">legend</span><span class="php-hl-code">&gt;
 
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">textFieldRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">"</span><span class="php-hl-string">[</span><span class="php-hl-var">{$locale}</span><span class="php-hl-string">]textField</span><span class="php-hl-quotes">"</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">textAreaRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">"</span><span class="php-hl-string">[</span><span class="php-hl-var">{$locale}</span><span class="php-hl-string">]textarea</span><span class="php-hl-quotes">"</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">class</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">span8</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">rows</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-number">8</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-reserved">echo</span> <span class="php-hl-var">$form</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">checkBoxListRow</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$model</span><span class="php-hl-code">, </span><span class="php-hl-quotes">"</span><span class="php-hl-string">[</span><span class="php-hl-var">{$locale}</span><span class="php-hl-string">]checkboxes</span><span class="php-hl-quotes">"</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">Option one is this and that&mdash;be sure to include why it</span><span class="php-hl-special">\'</span><span class="php-hl-string">s great</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Option two can also be checked and included in form results</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">hint</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">&lt;strong&gt;Note:&lt;/strong&gt; Labels surround all the options for much larger click areas.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
&lt;/</span><span class="php-hl-identifier">fieldset</span><span class="php-hl-code">&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbHero">

                <h2>Hero unit <small>bootstrap.widgets.TbHeroUnit</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>heading</td><td>string</td><td></td><td>Heading text.</td></tr>
                        <tr><td>encodeHeading</td><td>boolean</td><td><code>true</code></td><td>Whether to encode the heading text.</td></tr>
                        <tr><td>headingOptions</td><td>array</td><td></td><td>Heading text HTML attributes.</td></tr>
                        <tr><td>htmlOptions</td><td>array</td><td></td><td>Hero unit HTML attributes.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/components.html#typography">Hero unit documentation</a></p>

                <h3>Examples</h3>

                <div class="hero-unit"><h1>Hello, world!</h1>	
                    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <p><a class="btn btn-primary btn-large">Learn more</a></p>

                </div>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">beginWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbHeroUnit</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">heading</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Hello, world!</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
    &lt;</span><span class="php-hl-identifier">p</span><span class="php-hl-code">&gt;</span><span class="php-hl-identifier">This</span> <span class="php-hl-identifier">is</span> <span class="php-hl-identifier">a</span> <span class="php-hl-identifier">simple</span> <span class="php-hl-identifier">hero</span> <span class="php-hl-identifier">unit</span><span class="php-hl-code">, </span><span class="php-hl-identifier">a</span> <span class="php-hl-identifier">simple</span> <span class="php-hl-identifier">jumbotron</span><span class="php-hl-code">-</span><span class="php-hl-identifier">style</span> <span class="php-hl-identifier">component</span> <span class="php-hl-reserved">for</span> <span class="php-hl-identifier">calling</span> <span class="php-hl-identifier">extra</span> <span class="php-hl-identifier">attention</span> <span class="php-hl-identifier">to</span> <span class="php-hl-identifier">featured</span> <span class="php-hl-identifier">content</span> <span class="php-hl-reserved">or</span> <span class="php-hl-identifier">information</span><span class="php-hl-code">.&lt;/</span><span class="php-hl-identifier">p</span><span class="php-hl-code">&gt;
    &lt;</span><span class="php-hl-identifier">p</span><span class="php-hl-code">&gt;&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">size</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">large</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Learn more</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">&lt;/</span><span class="php-hl-identifier">p</span><span class="php-hl-code">&gt;
 
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">endWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbThumbnails">

                <h2>Thumbnails <small>bootstrap.widgets.TbThumbnails</small></h2>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/components.html#thumbnails">Thumbnails documentation</a></p>

                <h3>Examples</h3>

                <div class="list-view" id="yw35">
                    <div class="items">
                       <!-- <ul class="thumbnails"><li class="span3">
                                <a data-title="Tooltip" rel="tooltip" class="thumbnail" href="#">
                                    <img alt="" src="http://placehold.it/280x180">
                                </a>
                            </li><li class="span3">
                                <a data-title="Tooltip" rel="tooltip" class="thumbnail" href="#">
                                    <img alt="" src="http://placehold.it/280x180">
                                </a>
                            </li><li class="span3">
                                <a data-title="Tooltip" rel="tooltip" class="thumbnail" href="#">
                                    <img alt="" src="http://placehold.it/280x180">
                                </a>
                            </li><li class="span3">
                                <a data-title="Tooltip" rel="tooltip" class="thumbnail" href="#">
                                    <img alt="" src="http://placehold.it/280x180">
                                </a>
                            </li><li class="span3">
                                <a data-title="Tooltip" rel="tooltip" class="thumbnail" href="#">
                                    <img alt="" src="http://placehold.it/280x180">
                                </a>
                            </li><li class="span3">
                                <a data-title="Tooltip" rel="tooltip" class="thumbnail" href="#">
                                    <img alt="" src="http://placehold.it/280x180">
                                </a>
                            </li><li class="span3">
                                <a data-title="Tooltip" rel="tooltip" class="thumbnail" href="#">
                                    <img alt="" src="http://placehold.it/280x180">
                                </a>
                            </li><li class="span3">
                                <a data-title="Tooltip" rel="tooltip" class="thumbnail" href="#">
                                    <img alt="" src="http://placehold.it/280x180">
                                </a>
                            </li>
                        </ul>-->
                    </div>
                    <div title="/yii-bootstrap/" style="display:none" class="keys"><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span></div>
                </div>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbThumbnails</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">dataProvider</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-var">$listDataProvider</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">template</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">"</span><span class="php-hl-string">{items}</span><span class="php-hl-special">\n</span><span class="php-hl-string">{pager}</span><span class="php-hl-quotes">"</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">itemView</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">_thumb</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <div><div class="html-hl-main"><pre><span class="html-hl-brackets">&lt;</span><span class="html-hl-reserved">li</span> <span class="html-hl-var">class</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">span3</span><span class="html-hl-quotes">"</span><span class="html-hl-brackets">&gt;</span>
    <span class="html-hl-brackets">&lt;</span><span class="html-hl-reserved">a</span> <span class="html-hl-var">href</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">#</span><span class="html-hl-quotes">"</span> <span class="html-hl-var">class</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">thumbnail</span><span class="html-hl-quotes">"</span> <span class="html-hl-var">rel</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">tooltip</span><span class="html-hl-quotes">"</span> <span class="html-hl-var">data-title</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">Tooltip</span><span class="html-hl-quotes">"</span><span class="html-hl-brackets">&gt;</span>
        <span class="html-hl-brackets">&lt;</span><span class="html-hl-reserved">img</span> <span class="html-hl-var">src</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string"></span><span class="html-hl-quotes">"</span> <span class="html-hl-var">alt</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-quotes">"</span><span class="html-hl-brackets">&gt;</span>
    <span class="html-hl-brackets">&lt;/</span><span class="html-hl-reserved">a</span><span class="html-hl-brackets">&gt;</span>
<span class="html-hl-brackets">&lt;/</span><span class="html-hl-reserved">li</span><span class="html-hl-brackets">&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbAlert">

                <h2>Alerts <small>bootstrap.widgets.TbAlert</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>alerts</td><td>array</td><td></td><td>Alerts configurations.</td></tr>
                        <tr><td>closeText</td><td>string|boolean</td><td><code>&amp;times;</code></td><td>Close link text. Set to <code>false</code> in order to hide the close link.</td></tr>
                        <tr><td>block</td><td>boolean</td><td><code>true</code></td><td>Whether to display the alerts as blocks.</td></tr>
                        <tr><td>fade</td><td>boolean</td><td><code>true</code></td><td>Whether alerts should use transitions.</td></tr>
                        <tr><td>htmlOptions</td><td>array</td><td></td><td>Container HTML attributes.</td></tr>
                        <tr><td>events</td><td>array</td><td></td><td>JavaScript event handlers.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/components.html#alerts">Alert documentation</a></p>

                <h3>Examples</h3>


                <div id="yw37"><div class="alert in alert-block fade alert-success"><a data-dismiss="alert" class="close">×</a><strong>Well done!</strong> You successfully read this important alert message.</div><div class="alert in alert-block fade alert-info"><a data-dismiss="alert" class="close">×</a><strong>Heads up!</strong> This alert needs your attention, but it's not super important.</div><div class="alert in alert-block fade alert-warning"><a data-dismiss="alert" class="close">×</a><strong>Warning!</strong> Best check yo self, you're not looking too good.</div><div class="alert in alert-block fade alert-error"><a data-dismiss="alert" class="close">×</a><strong>Oh snap!</strong> Change a few things up and try submitting again.</div></div>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-identifier">Yii</span><span class="php-hl-code">::</span><span class="php-hl-identifier">app</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">user</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">setFlash</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">success</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">;
</span><span class="php-hl-identifier">Yii</span><span class="php-hl-code">::</span><span class="php-hl-identifier">app</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">user</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">setFlash</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">info</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">&lt;strong&gt;Heads up!&lt;/strong&gt; This alert needs your attention, but it</span><span class="php-hl-special">\'</span><span class="php-hl-string">s not super important.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">;
</span><span class="php-hl-identifier">Yii</span><span class="php-hl-code">::</span><span class="php-hl-identifier">app</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">user</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">setFlash</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">warning</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">&lt;strong&gt;Warning!&lt;/strong&gt; Best check yo self, you</span><span class="php-hl-special">\'</span><span class="php-hl-string">re not looking too good.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">;
</span><span class="php-hl-identifier">Yii</span><span class="php-hl-code">::</span><span class="php-hl-identifier">app</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">user</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">setFlash</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">error</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">&lt;strong&gt;Oh snap!&lt;/strong&gt; Change a few things up and try submitting again.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">;</span></pre></div></div>
                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbAlert</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">block</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> display a larger alert block?</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">fade</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> use transitions?</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">closeText</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">&amp;times;</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> close link text - if set to false, no close link is displayed</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">alerts</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span> <span class="php-hl-comment">//</span><span class="php-hl-comment"> configurations per alert type</span>
            <span class="php-hl-quotes">'</span><span class="php-hl-string">success</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">block</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">fade</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">closeText</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">&amp;times;</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> success, info, warning, error or danger</span>
        <span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">; ?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbProgress">

                <h2>Progress bars <small>bootstrap.widgets.TbProgress</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>type</td><td>string</td><td></td><td>Progress bar type. Valid values are <code>info</code>, <code>success</code>, <code>warning</code> and <code>danger</code>.</td></tr>
                        <tr><td>striped</td><td>boolean</td><td><code>false</code></td><td>Whether the bar should be striped.</td></tr>
                        <tr><td>animated</td><td>boolean</td><td><code>false</code></td><td>Whether the bar should be animated.</td></tr>
                        <tr><td>percent</td><td>integer</td><td><code>0</code></td><td>Progress in percent.</td></tr>
                        <tr><td>htmlOptions</td><td>array</td><td></td><td>Progress bar HTML attributes.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/components.html#progress">Progress bar documentation</a></p>

                <h3>Examples</h3>

                <div class="row">

                    <div class="span4">

                        <h4>Basic</h4>

                        <div class="progress"><div style="width: 30%;" class="bar"></div></div>
                    </div>

                    <div class="span4">

                        <h4>Striped</h4>

                        <div class="progress progress-info progress-striped"><div style="width: 20%;" class="bar"></div></div>
                    </div>

                    <div class="span4">

                        <h4>Animated</h4>

                        <div class="progress progress-danger progress-striped active"><div style="width: 40%;" class="bar"></div></div>
                    </div>

                </div>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbProgress</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">danger</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 'info', 'success' or 'danger'</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">percent</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-number">40</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> the progress</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">striped</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">animated</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbLabel">

                <h2>Labels <small>bootstrap.widgets.TbLabel</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>type</td><td>string</td><td></td><td>Label type. Valid values are <code>success</code>, <code>warning</code>, <code>important</code>, <code>info</code> and <code>inverse</code>.</td></tr>
                        <tr><td>label</td><td>string</td><td></td><td>Label text.</td></tr>
                        <tr><td>encodeLabel</td><td>boolean</td><td><code>true</code></td><td>Whether to encode the label text.</td></tr>
                        <tr><td>htmlOptions</td><td>array</td><td></td><td>Label HTML attributes.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/components.html#labels-badges">Label documentation</a></p>

                <h3>Examples</h3>

                <p>
                    <span class="label">Default</span>        <span class="label label-success">Success</span>        <span class="label label-warning">Warning</span>        <span class="label label-important">Important</span>        <span class="label label-info">Info</span>        <span class="label label-inverse">Inverse</span>    </p>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbLabel</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">success</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 'success', 'warning', 'important', 'info' or 'inverse'</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Success</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbBadge">

                <h2>Badges <small>bootstrap.widgets.TbBadge</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>type</td><td>string</td><td></td><td>Badge type. Valid values are <code>success</code>, <code>warning</code>, <code>important</code>, <code>info</code> and <code>inverse</code>.</td></tr>
                        <tr><td>label</td><td>string</td><td></td><td>Badge text.</td></tr>
                        <tr><td>encodeLabel</td><td>boolean</td><td><code>true</code></td><td>Whether to encode the badge text.</td></tr>
                        <tr><td>htmlOptions</td><td>array</td><td></td><td>Badge HTML attributes.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/components.html#labels-badges">Badge documentation</a></p>

                <h3>Examples</h3>

                <p>
                    <span class="badge">1</span>        <span class="badge badge-success">2</span>        <span class="badge badge-warning">4</span>        <span class="badge badge-important">6</span>        <span class="badge badge-info">8</span>        <span class="badge badge-inverse">10</span>    </p>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbBadge</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">success</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 'success', 'warning', 'important', 'info' or 'inverse'</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">2</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbCarousel">

                <h2>Carousel <small>bootstrap.widgets.TbCarousel</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>prevLabel</td><td>string</td><td><code>&amp;lsaquo;</code></td><td>Previous button text.</td></tr>
                        <tr><td>nextLabel</td><td>string</td><td><code>&amp;rsaquo;</code></td><td>Next button text.</td></tr>
                        <tr><td>slide</td><td>boolean</td><td><code>true</code></td><td>Whether the carousel items should slide.</td></tr>
                        <tr><td>displayPrevAndNext</td><td>boolean</td><td><code>true</code></td><td>Whether to display previous and next buttons.</td></tr>
                        <tr><td>items</td><td>array</td><td></td><td>Carousel item configuration.</td></tr>
                        <tr><td>htmlOptions</td><td>array</td><td></td><td>Carousel HTML attributes.</td></tr>
                        <tr><td>options</td><td>array</td><td></td><td>JavaScript plugin options.</td></tr>
                        <tr><td>events</td><td>array</td><td></td><td>JavaScript event handlers.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/javascript.html#carousel">Carousel documentation</a></p>

                <h3>Examples</h3>

                <div class="row">

                    <div class="span8">
<!--
                        <div class="carousel slide" id="yw38"><div class="carousel-inner"><div class="item active"><img alt="" src="http://placehold.it/770x400&amp;text=First+thumbnail"><div class="carousel-caption"><h4>First Thumbnail label</h4><p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></div></div><div class="item"><img alt="" src="http://placehold.it/770x400&amp;text=Second+thumbnail"><div class="carousel-caption"><h4>Second Thumbnail label</h4><p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></div></div><div class="item"><img alt="" src="http://placehold.it/770x400&amp;text=Third+thumbnail"><div class="carousel-caption"><h4>Third Thumbnail label</h4><p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></div></div></div><a data-slide="prev" href="#yw38" class="carousel-control left">‹</a><a data-slide="next" href="#yw38" class="carousel-control right">›</a></div>
                    </div>
-->
                </div>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbCarousel</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">items</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">image</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">http://placehold.it/770x400&amp;text=First+thumbnail</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">First Thumbnail label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">caption</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">image</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">http://placehold.it/770x400&amp;text=Second+thumbnail</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Second Thumbnail label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">caption</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">image</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">http://placehold.it/770x400&amp;text=Third+thumbnail</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Third Thumbnail label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">caption</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbModal">

                <h2>Modals <small>bootstrap.widgets.TbModal</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>autoOpen</td><td>boolean</td><td><code>false</code></td><td>Whether to automatically open the modal.</td></tr>
                        <tr><td>fade</td><td>boolean</td><td><code>true</code></td><td>Whether the modal should use transitions.</td></tr>
                        <tr><td>htmlOptions</td><td>array</td><td></td><td>Modal HTML attributes.</td></tr>
                        <tr><td>options</td><td>array</td><td></td><td>JavaScript plugin options.</td></tr>
                        <tr><td>events</td><td>array</td><td></td><td>JavaScript event handlers.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/javascript.html#modals">Modal documentation</a></p>

                <h3>Examples</h3>

                <div class="modal fade" id="myModal">
                    <div class="modal-header">
                        <a data-dismiss="modal" class="close">×</a>
                        <h4>Modal header</h4>
                    </div>

                    <div class="modal-body">
                        <p>One fine body...</p>
                    </div>

                    <div class="modal-footer">
                        <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>        <a href="#" class="btn" data-dismiss="modal">Close</a>    </div>

                </div>
                <div class="well">
                    <a class="btn btn-primary" data-target="#myModal" data-toggle="modal">Click me</a>    </div>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">beginWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbModal</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">id</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">myModal</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
 
&lt;</span><span class="php-hl-identifier">div</span> <span class="php-hl-reserved">class</span><span class="php-hl-code">=</span><span class="php-hl-quotes">"</span><span class="php-hl-string">modal-header</span><span class="php-hl-quotes">"</span><span class="php-hl-code">&gt;
    &lt;</span><span class="php-hl-identifier">a</span> <span class="php-hl-reserved">class</span><span class="php-hl-code">=</span><span class="php-hl-quotes">"</span><span class="php-hl-string">close</span><span class="php-hl-quotes">"</span> <span class="php-hl-identifier">data</span><span class="php-hl-code">-</span><span class="php-hl-identifier">dismiss</span><span class="php-hl-code">=</span><span class="php-hl-quotes">"</span><span class="php-hl-string">modal</span><span class="php-hl-quotes">"</span><span class="php-hl-code">&gt;&amp;</span><span class="php-hl-identifier">times</span><span class="php-hl-code">;&lt;/</span><span class="php-hl-identifier">a</span><span class="php-hl-code">&gt;
    &lt;</span><span class="php-hl-identifier">h4</span><span class="php-hl-code">&gt;</span><span class="php-hl-identifier">Modal</span> <span class="php-hl-identifier">header</span><span class="php-hl-code">&lt;/</span><span class="php-hl-identifier">h4</span><span class="php-hl-code">&gt;
&lt;/</span><span class="php-hl-identifier">div</span><span class="php-hl-code">&gt;
 
&lt;</span><span class="php-hl-identifier">div</span> <span class="php-hl-reserved">class</span><span class="php-hl-code">=</span><span class="php-hl-quotes">"</span><span class="php-hl-string">modal-body</span><span class="php-hl-quotes">"</span><span class="php-hl-code">&gt;
    &lt;</span><span class="php-hl-identifier">p</span><span class="php-hl-code">&gt;</span><span class="php-hl-identifier">One</span> <span class="php-hl-identifier">fine</span> <span class="php-hl-identifier">body</span><span class="php-hl-code">...&lt;/</span><span class="php-hl-identifier">p</span><span class="php-hl-code">&gt;
&lt;/</span><span class="php-hl-identifier">div</span><span class="php-hl-code">&gt;
 
&lt;</span><span class="php-hl-identifier">div</span> <span class="php-hl-reserved">class</span><span class="php-hl-code">=</span><span class="php-hl-quotes">"</span><span class="php-hl-string">modal-footer</span><span class="php-hl-quotes">"</span><span class="php-hl-code">&gt;
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Save changes</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">htmlOptions</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">data-dismiss</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">modal</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
    &lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Close</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">url</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">htmlOptions</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">data-dismiss</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">modal</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span><span class="php-hl-code">
&lt;/</span><span class="php-hl-identifier">div</span><span class="php-hl-code">&gt;
 
&lt;?</span><span class="php-hl-identifier">php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">endWidget</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Click me</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">primary</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">htmlOptions</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">data-toggle</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">modal</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">data-target</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">#myModal</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbPopover">

                <h2>Popovers <small>bootstrap.widgets.TbPopover</small></h2>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/javascript.html#popovers">Popover documentation</a></p>

                <h3>Examples</h3>

                <div class="well">
                    <a class="btn btn-danger" rel="popover" data-content="And here's some amazing content. It's very engaging. right?" data-title="A Title">Click me</a>    </div>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbButton</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Click me</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">danger</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">htmlOptions</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">data-title</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">A Title</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">data-content</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">And here</span><span class="php-hl-special">\'</span><span class="php-hl-string">s some amazing content. It</span><span class="php-hl-special">\'</span><span class="php-hl-string">s very engaging. right?</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">rel</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">popover</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbTabs">

                <h2>Togglable tabs <small>bootstrap.widgets.TbTabs</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>type</td><td>string</td><td><code>tabs</code></td><td>See <code>TbMenu::type</code>.</td></tr>
                        <tr><td>placement</td><td>string</td><td></td><td>Tab placement. Valid values are <code>above</code>, <code>below</code>, <code>left</code> and <code>right</code>.</td></tr>
                        <tr><td>tabs</td><td>array</td><td></td><td>Tabs configuration.</td></tr>
                        <tr><td>encodeLabel</td><td>boolean</td><td><code>true</code></td><td>Whether to encode labels.</td></tr>
                        <tr><td>htmlOptions</td><td>array</td><td></td><td>Tabs HTML attributes.</td></tr>
                        <tr><td>events</td><td>array</td><td></td><td>JavaScript event handlers.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/javascript.html#tabs">Tabs documentation</a></p>

                <h3>Examples</h3>

                <div id="yw39" class="togglable-tabs"><ul class="nav nav-tabs" id="yw40"><li class="active"><a href="#yw39_tab_1" data-toggle="tab">Home</a></li><li><a href="#yw39_tab_2" data-toggle="tab">Profile</a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a><ul class="dropdown-menu" id="yw41"><li><a href="#yw39_tab_3" tabindex="-1" data-toggle="tab">@fat</a></li><li><a href="#yw39_tab_4" tabindex="-1" data-toggle="tab">@mdo</a></li></ul></li></ul><div class="tab-content"><div class="tab-pane fade active in" id="yw39_tab_1"><p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p></div><div class="tab-pane fade" id="yw39_tab_2"><p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p></div><div class="tab-pane fade" id="yw39_tab_3"><p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p></div><div class="tab-pane fade" id="yw39_tab_4"><p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p></div></div></div>
                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbTabs</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">tabs</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 'tabs' or 'pills'</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">tabs</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Home</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">content</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Raw denim you probably haven</span><span class="php-hl-special">\'</span><span class="php-hl-string">t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">active</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Profile</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">content</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Food truck fixie locavore, accusamus mcsweeney</span><span class="php-hl-special">\'</span><span class="php-hl-string">s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Dropdown</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">items</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
            <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">@fat</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">content</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney</span><span class="php-hl-special">\'</span><span class="php-hl-string">s organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven</span><span class="php-hl-special">\'</span><span class="php-hl-string">t heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
            </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">@mdo</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">content</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <div class="row">

                    <div class="span6">

                        <h4>Tabs on the top</h4>

                        <div id="yw42" class="togglable-tabs"><ul class="nav nav-tabs" id="yw43"><li class="active"><a href="#yw42_tab_1" data-toggle="tab">Section 1</a></li><li><a href="#yw42_tab_2" data-toggle="tab">Section 2</a></li><li><a href="#yw42_tab_3" data-toggle="tab">Section 3</a></li></ul><div class="tab-content"><div class="tab-pane fade active in" id="yw42_tab_1"><p>I'm in Section 1.</p></div><div class="tab-pane fade" id="yw42_tab_2"><p>Howdy, I'm in Section 2.</p></div><div class="tab-pane fade" id="yw42_tab_3"><p>What up girl, this is Section 3.</p></div></div></div>
                        <h4>Tabs on the left</h4>

                        <div id="yw44" class="togglable-tabs tabs-left"><ul class="nav nav-tabs" id="yw45"><li class="active"><a href="#yw44_tab_1" data-toggle="tab">Section 1</a></li><li><a href="#yw44_tab_2" data-toggle="tab">Section 2</a></li><li><a href="#yw44_tab_3" data-toggle="tab">Section 3</a></li></ul><div class="tab-content"><div class="tab-pane fade active in" id="yw44_tab_1"><p>I'm in Section 1.</p></div><div class="tab-pane fade" id="yw44_tab_2"><p>Howdy, I'm in Section 2.</p></div><div class="tab-pane fade" id="yw44_tab_3"><p>What up girl, this is Section 3.</p></div></div></div>
                    </div>

                    <div class="span6">

                        <h4>Tabs on the bottom</h4>

                        <div id="yw46" class="togglable-tabs tabs-below"><div class="tab-content"><div class="tab-pane fade active in" id="yw46_tab_1"><p>I'm in Section 1.</p></div><div class="tab-pane fade" id="yw46_tab_2"><p>Howdy, I'm in Section 2.</p></div><div class="tab-pane fade" id="yw46_tab_3"><p>What up girl, this is Section 3.</p></div></div><ul class="nav nav-tabs" id="yw47"><li class="active"><a href="#yw46_tab_1" data-toggle="tab">Section 1</a></li><li><a href="#yw46_tab_2" data-toggle="tab">Section 2</a></li><li><a href="#yw46_tab_3" data-toggle="tab">Section 3</a></li></ul></div>
                        <h4>Tabs on the right</h4>

                        <div id="yw48" class="togglable-tabs tabs-right"><ul class="nav nav-tabs" id="yw49"><li class="active"><a href="#yw48_tab_1" data-toggle="tab">Section 1</a></li><li><a href="#yw48_tab_2" data-toggle="tab">Section 2</a></li><li><a href="#yw48_tab_3" data-toggle="tab">Section 3</a></li></ul><div class="tab-content"><div class="tab-pane fade active in" id="yw48_tab_1"><p>I'm in Section 1.</p></div><div class="tab-pane fade" id="yw48_tab_2"><p>Howdy, I'm in Section 2.</p></div><div class="tab-pane fade" id="yw48_tab_3"><p>What up girl, this is Section 3.</p></div></div></div>
                    </div>

                </div>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbTabs</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">type</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">tabs</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">placement</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">below</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 'above', 'right', 'below' or 'left'</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">tabs</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Section 1</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">content</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">&lt;p&gt;I</span><span class="php-hl-special">\'</span><span class="php-hl-string">m in Section 1.&lt;/p&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">active</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">true</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Section 2</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">content</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">&lt;p&gt;Howdy, I</span><span class="php-hl-special">\'</span><span class="php-hl-string">m in Section 2.&lt;/p&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">label</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Section 3</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">content</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">&lt;p&gt;What up girl, this is Section 3.&lt;/p&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbTooltip">

                <h2>Tooltips <small>bootstrap.widgets.TbTooltip</small></h2>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/javascript.html#tooltips">Tooltip documentation</a></p>

                <h3>Examples</h3>

                <p class="well">
                    Lorem ipsum dolor sit <a title="First tooltip" rel="tooltip" href="#">amet</a>,
                    consectetur adipiscing elit.
                    Fusce ut velit sem, id elementum elit. Quisque tincidunt magna in quam luctus a ultrices tellus luctus.
                    Pellentesque at tellus urna.
                    Ut congue, <a title="Another tooltip" rel="tooltip" href="#">nibh eu</a> interdum commodo,
                    ligula urna consequat tortor, at vehicula tellus est a orci.
                    Maecenas nec ligula sed ipsum posuere sollicitudin pretium ac sapien.
                    Sed odio dui, pretium eu pellentesque ac,
                    <a title="Yet another tooltip" rel="tooltip" href="#">tempor</a> sed sem.
                </p>

                <h5>Source code</h5>

                <div><div class="html-hl-main"><pre><span class="html-hl-brackets">&lt;</span><span class="html-hl-reserved">p</span> <span class="html-hl-var">class</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">well</span><span class="html-hl-quotes">"</span><span class="html-hl-brackets">&gt;</span><span class="html-hl-code">
    Lorem ipsum dolor sit </span><span class="html-hl-brackets">&lt;</span><span class="html-hl-reserved">a</span> <span class="html-hl-var">href</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">#</span><span class="html-hl-quotes">"</span> <span class="html-hl-var">rel</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">tooltip</span><span class="html-hl-quotes">"</span> <span class="html-hl-var">title</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">First tooltip</span><span class="html-hl-quotes">"</span><span class="html-hl-brackets">&gt;</span><span class="html-hl-code">amet</span><span class="html-hl-brackets">&lt;/</span><span class="html-hl-reserved">a</span><span class="html-hl-brackets">&gt;</span><span class="html-hl-code">,
    consectetur adipiscing elit.
    Fusce ut velit sem, id elementum elit. Quisque tincidunt magna in quam luctus a ultrices tellus luctus.
    Pellentesque at tellus urna.
    Ut congue, </span><span class="html-hl-brackets">&lt;</span><span class="html-hl-reserved">a</span> <span class="html-hl-var">href</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">#</span><span class="html-hl-quotes">"</span> <span class="html-hl-var">rel</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">tooltip</span><span class="html-hl-quotes">"</span> <span class="html-hl-var">title</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">Another tooltip</span><span class="html-hl-quotes">"</span><span class="html-hl-brackets">&gt;</span><span class="html-hl-code">nibh eu</span><span class="html-hl-brackets">&lt;/</span><span class="html-hl-reserved">a</span><span class="html-hl-brackets">&gt;</span><span class="html-hl-code"> interdum commodo,
    ligula urna consequat tortor, at vehicula tellus est a orci.
    Maecenas nec ligula sed ipsum posuere sollicitudin pretium ac sapien.
    Sed odio dui, pretium eu pellentesque ac,
    </span><span class="html-hl-brackets">&lt;</span><span class="html-hl-reserved">a</span> <span class="html-hl-var">href</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">#</span><span class="html-hl-quotes">"</span> <span class="html-hl-var">rel</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">tooltip</span><span class="html-hl-quotes">"</span> <span class="html-hl-var">title</span><span class="html-hl-code">=</span><span class="html-hl-quotes">"</span><span class="html-hl-string">Yet another tooltip</span><span class="html-hl-quotes">"</span><span class="html-hl-brackets">&gt;</span><span class="html-hl-code">tempor</span><span class="html-hl-brackets">&lt;/</span><span class="html-hl-reserved">a</span><span class="html-hl-brackets">&gt;</span><span class="html-hl-code"> sed sem.
</span><span class="html-hl-brackets">&lt;/</span><span class="html-hl-reserved">p</span><span class="html-hl-brackets">&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>

            <section id="tbTypeahead">

                <h2>Typeahead <small>bootstrap.widgets.TbTypeahead</small></h2>

                <h3>Properties</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>options</td><td>array</td><td></td><td>JavaScript plugin options.</td></tr>
                    </tbody>
                </table>

                <p class="read-more"><a target="_blank" rel="no-follow" href="http://twitter.github.com/bootstrap/javascript.html#typeahead">Typeahead documentation</a></p>

                <h3>Examples</h3>

                <div class="well">

                    <input type="text" name="typeahead" id="typeahead" data-provide="typeahead">
                </div>

                <h5>Source code</h5>

                <div><div class="php-hl-main"><pre><span class="php-hl-inlinetags">&lt;?php</span> <span class="php-hl-var">$this</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">widget</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">bootstrap.widgets.TbTypeahead</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">options</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
        <span class="php-hl-quotes">'</span><span class="php-hl-string">name</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">'</span><span class="php-hl-string">typeahead</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">source</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">Alabama</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Alaska</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Arizona</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Arkansas</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">California</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Colorado</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Connecticut</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Delaware</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Florida</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Georgia</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Hawaii</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Idaho</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Illinois</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Indiana</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Iowa</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Kansas</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Kentucky</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Louisiana</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Maine</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Maryland</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Massachusetts</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Michigan</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Minnesota</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Mississippi</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Missouri</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Montana</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Nebraska</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Nevada</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">New Hampshire</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">New Jersey</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">New Mexico</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">New York</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">North Dakota</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">North Carolina</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Ohio</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Oklahoma</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Oregon</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Pennsylvania</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Rhode Island</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">South Carolina</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">South Dakota</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Tennessee</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Texas</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Utah</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Vermont</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Virginia</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Washington</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">West Virginia</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Wisconsin</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">Wyoming</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">items</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-number">4</span><span class="php-hl-code">,
        </span><span class="php-hl-quotes">'</span><span class="php-hl-string">matcher</span><span class="php-hl-quotes">'</span><span class="php-hl-code">=&gt;</span><span class="php-hl-quotes">"</span><span class="php-hl-string">js:function(item) {
            return ~item.toLowerCase().indexOf(this.query.toLowerCase());
        }</span><span class="php-hl-quotes">"</span><span class="php-hl-code">,
    </span><span class="php-hl-brackets">)</span><span class="php-hl-code">,
</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-inlinetags">?&gt;</span></pre></div></div>
                <a href="#top" class="top">Back to top ↑</a>

            </section>



        </div>

    

        

    </div>




