<?php ini_set("include_path", "../"); ?>
<?php $subdir=1; ?>
<?php include_once 'partials/docHead.php'; ?>

<p class="title"><a href="../doc.html">Phaser</a>.Game</p>
<p class="keywords">new Game(width, height, renderer, parent, state, transparent, antialias, physicsConfig)</p>
<p class="indent">这里是一切魔法开始的地方。Game是你的整个游戏的核心，它管理启动、创建子系统、运行逻辑、进行渲染。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">width</td><td>数值 或 字符串</td><td>可选</td><td>800</td><td>游戏宽度。可以用0-100的字符串指定宽度为父元素的百分比。</td></tr>
	<tr class="td"><td class="params indentS">height</td><td>数值 或 字符串</td><td>可选</td><td>600</td><td>游戏高度。可以用0-100的字符串指定高度为父元素的百分比。</td></tr>
	<tr class="td"><td class="params indentS">renderer</td><td>枚举</td><td>可选</td><td>Phaser.AUTO</td><td>游戏渲染器。Phaser.AUTO(自动选择)，Phaser.WEBGL, Phaser.CANVAS，Phaser.HEADLESS(不渲染)。<span class="warning">手机游戏请务必指定Phaser.CANVAS</span></td></tr>
	<tr class="td"><td class="params indentS">parent</td><td>字符串 或 HTML元素</td><td>可选</td><td>''</td><td>游戏的父DOM元素，或者DOM元素的ID</td></tr>
	<tr class="td"><td class="params indentS">state</td><td>对象</td><td>可选</td><td>null</td><td>游戏初始场景，一个包含<a>Phaser.State</a>函数(preload, create, update, render)的对象</td></tr>
	<tr class="td"><td class="params indentS">transparent</td><td>布尔</td><td>可选</td><td>false</td><td>是否要一个透明背景</td></tr>
	<tr class="td"><td class="params indentS">antialias</td><td>布尔</td><td>可选</td><td>true</td><td>是否要抗锯齿效果。如果要实现像素化的复古风格游戏，可以置为false</td></tr>
	<tr class="td"><td class="params indentS">physicsConfig</td><td>对象</td><td>可选</td><td>null</td><td>物理引擎的配置对象</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-25">line 25</a><p>
<p class="title">成员</p>

<p><span class="keywords">add</span> :<a> Phaser.GameObjectFactory</a></p>
<p><a>Phaser.GameObjectFactory</a> 的引用</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-156">line 156</a><p>

<p><span class="keywords">antialias</span> : boolean</p>
<p>抗锯齿。主要用于平滑被缩放的图像。</p>
<p>默认值：true</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-102">line 102</a><p>

<p><span class="keywords">cache</span> : <a>Phaser.Cache</a></p>
<p>资源缓存器的引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-166">line 166</a><p>

<p><span class="keywords">camera</span> : <a>Phaser.Camera</a></p>
<p>摄像机的引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-241">line 241</a><p>

<p><span class="keywords">canvas</span> : HTMLCanvasElement</p>
<p>游戏被渲染canvas元素</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-246">line 246</a><p>

<p><span class="keywords">clearBeforeRender</span> : boolean</p>
<p>在每帧绘制之前是否都清空画布。如果你的游戏有一个全屏的背景，你可以置此值为false来提高性能。</p>
<p>默认值：true</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-116">line 116</a><p>

<p><span class="keywords">config</span> : object</p>
<p>Phaser.Game的配置对象</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-36">line 36</a><p>

<p><span class="keywords">context</span> : CanvasRenderingContext2D</p>
<p>canvas的context对象(只在CANVAS作为渲染器的时候才能获取到)</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-251">line 251</a><p>

<p><span class="keywords">create</span> : <a>Phaser.Create</a></p>
<p>资源生成器</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-266">line 266</a><p>

<p><span class="keywords">&lt;internal&gt;currentUpdateID</span> : integer</p>
<p>渲染帧时候的ID，从0开始。比如第一帧是 currentUpdateID === 0 最后一帧是 currentUpdateID === updatesThisFrame</p>
<p>这是内部值，以后可能被移除。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-336">line 336</a><p>

<p><span class="keywords">debug</span> : <a>Phaser.Utils.Debug</a></p>
<p>一系列很有用的调试工具集</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-256">line 256</a><p>





<?php include_once 'partials/docFoot.php'; ?>