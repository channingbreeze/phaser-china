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

<?php include_once 'partials/docFoot.php'; ?>