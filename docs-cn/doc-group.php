<?php ini_set("include_path", "../"); ?>
<?php $subdir=1; ?>
<?php include_once 'partials/docHead.php'; ?>

<p class="title">本篇文档翻译者：寒冬</p>

<p class="title"><a href="../doc.html">Phaser</a>.Group</p>
<p class="keywords">new Group(game, parent, name, addToStage, enableBody, physicsBodyType)</p>
<p class="indent">组是一个用来显示精灵对象和图片对象的容器。。</p>
<p class="indent">组的局部变换会被应用到组里的子元素。例如，当组被移动/旋转/缩放时，所有的子元素也会被移动/旋转/缩放。</p>
<p class="indent">此外，组提供对快速池和对象回收的支持。</p>
<p class="indent">组也是一个显示对象，可以作为子对象嵌套在其他组中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">game</td><td><a href="doc-game.html">Phaser.Game</a></td><td></td><td></td><td>当前游戏的引用。</td></tr>
	<tr class="td"><td class="params indentS">parent</td><td>DisplayObject|null</td><td>可选</td><td>Game World</td><td>该组将会被添加到参数指定的组或显示对象中。如果参数为 undefined 或 unspecified ，该组会被添加到 Game World 中。如果参数为 null ，该组不会被添加到任何对象中。</td></tr>
	<tr class="td"><td class="params indentS">name</td><td>string</td><td>可选</td><td>"group"</td><td>该组的名称，调试时有用。</td></tr>
	<tr class="td"><td class="params indentS">addToStage</td><td>boolean</td><td>可选</td><td>false</td><td>是否把该组添加到 Game Stage。如果要把该组添加到 Game World，可以设置为 false。</td></tr>
	<tr class="td"><td class="params indentS">enableBody</td><td>boolean</td><td>可选</td><td>false</td><td>是否开启该组的物理系统。如果设置为 true，则通过create或者createMulitple创建出来的精灵会被自动加上物理body。</td></tr>
	<tr class="td"><td class="params indentS">physicsBodyType</td><td>integer</td><td>可选</td><td>0</td><td>设置物理体的类型。详细的值可以查看physicsBodyType。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-27">line 27</a><p>

<p class="title">继承</p>
<p class="subTitle">PIXI.DisplayObjectContainer</p>

<p class="title">成员</p>
<p><span class="keywords">&lt;static, constant&gt;RETURN_CHILD</span> : integer</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-256">line 256</a><p>

<p><span class="keywords">&lt;static, constant&gt;RETURN_NONE</span> : integer</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-242">line 242</a><p>

<p><span class="keywords">&lt;static, constant&gt;RETURN_TOTAL</span> : integer</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-249">line 249</a><p>

<p><span class="keywords">&lt;static, constant&gt;SORT_ASCENDING</span> : integer</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-263">line 263</a><p>

<p><span class="keywords">&lt;static, constant&gt;SORT_DESCENDING</span> : integer</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-270">line 270</a><p>

<p><span class="keywords">alive</span> : boolean</p>
<p>该属性对于那些是其他组孩子的组有用，在其他组使用forEachAlive是知会遍历alive为true的组。</p>
<p>默认值：true。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-93">line 93</a><p>

<p><span class="keywords">alpha</span> : number</p>
<p>整组的透明度。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-2300">line 2300</a><p>

<p><span class="keywords">angle</span> : number</p>
<p>整组旋转的角度。这对child的angle值没有影响，但是会叠加在child的旋转角度上。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-2300">line 2300</a><p>

<p><span class="keywords">cacheAsBitmap</span> : boolean</p>
<p>是否把显示对象作为位图缓存。它相当于给displayObject做了一个快照，这对于一些要提高性能的复杂的displayObjects有用。要移除该属性只需将此属性设置为"null"。</p>
<p>默认值继承自：PIXI.DisplayObject#cacheAsBitmap。</p>
<p class="source indentS">源码 - <a href="../docs/src_pixi_display_DisplayObjectContainer.js.html">pixi/display/DisplayObject.js</a>, <a href="../docs/src_pixi_display_DisplayObjectContainer.js.html#sunlight-1-line-355">line 355</a><p>

<p><span class="keywords">cameraOffset</span> : Phaser.Point</p>
<p>如果对象被设置成了fixedToCamera，这个值存储了摄像机偏移量。如果它的父亲也是fixedToCamera，那么偏移量是叠加的。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-210">line 210</a><p>

<p><span class="keywords">&lt;readonly&gt;children</span> : Array.&lt;DisplayObject&gt;</p>
<p>组的子元素们。</p>
<p>继承自：PIXI.DisplayObjectContainer#children</p>
<p class="source indentS">源码 - <a href="../docs/src_pixi_display_DisplayObjectContainer.js.html">pixi/display/DisplayObject.js</a>, <a href="../docs/src_pixi_display_DisplayObjectContainer.html#sunlight-1-line-17">line 17</a><p>

<p><span class="keywords">classType</span> : object</p>
<p>当使用create或者createMultiple创建出来的对象类型，可以使用任何对象类型，但是它应该继承自Sprite或者Image，而且构造函数接受与Sprite或者Image同样的参数。也就是如下参数列表(game, x, y, key, frame)</p>
<p>默认值：Phaser.Sprite</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-130">line 130</a><p>

<p><span class="keywords">cursor</span> : DisplayObject</p>
<p>组的光标正指向的对象。组的光标是一种用来遍历组的方式，配合next和previous。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-138">line 138</a><p>

<p><span class="keywords">&lt;readonly&gt;cursorIndex</span> : integer</p>
<p>组的光标的索引。可以用next使其前进。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-193">line 193</a><p>

<p><span class="keywords">enableBody</span> : boolean</p>
<p>打开组的物理系统。所有组中的对象都会有body属性。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-146">line 146</a><p>

<p><span class="keywords">enableBodyDebug</span> : boolean</p>
<p>如果为true，通过enableBody打开组的物理系统的同时，会创建一个调试对象。这个只适用于 P2 物理引擎。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-155">line 155</a><p>

<p><span class="keywords">exists</span> : boolean</p>
<p>如果为true，则会update该组，否则跳过。</p>
<p>默认值：true</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Group.js.html">core/Group.js</a>, <a href="../docs/src_core_Group.js.html#sunlight-1-line-100">line 100</a><p>

<p><span class="keywords">filterArea</span> : Rectangle</p>
<p>矩形过滤器，可以在每一帧设置这个矩形。</p>
<p>继承自：PIXI.DisplayObject#filterArea</p>
<p class="source indentS">源码 - <a href="../docs/src_pixi_display_DisplayObjectContainer.js.html">pixi/display/DisplayObject.js</a>, <a href="../docs/src_pixi_display_DisplayObjectContainer.html#sunlight-1-line-164">line 164</a><p>

<p><span class="keywords">filters</span> : Array.&lt;Filter&gt;</p>
<p>设置显示对象的过滤器。这个只能在WEBGL模式下使用。你可以将该属性设置为null来移除它。</p>
<p>继承自：PIXI.DisplayObject#filters</p>
<p class="source indentS">源码 - <a href="../docs/src_pixi_display_DisplayObjectContainer.js.html">pixi/display/DisplayObject.js</a>, <a href="../docs/src_pixi_display_DisplayObjectContainer.html#sunlight-1-line-307">line 307</a><p>





<?php include_once 'partials/docFoot.php'; ?>
