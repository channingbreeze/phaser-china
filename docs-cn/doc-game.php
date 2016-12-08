<?php ini_set("include_path", "../"); ?>
<?php $subdir=1; ?>
<?php include_once 'partials/docHead.php'; ?>

<p class="title"><a href="../doc.html">Phaser</a>.Game</p>
<p class="keywords">new Game(width, height, renderer, parent, state, transparent, antialias, physicsConfig)</p>
<p class="indent">Game是你的整个游戏的核心，它管理启动、创建子系统、运行逻辑、进行渲染。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">width</td><td>number|string</td><td>可选</td><td>800</td><td>游戏宽度。可以用0-100的字符串指定宽度为父元素的百分比。</td></tr>
	<tr class="td"><td class="params indentS">height</td><td>number|string</td><td>可选</td><td>600</td><td>游戏高度。可以用0-100的字符串指定高度为父元素的百分比。</td></tr>
	<tr class="td"><td class="params indentS">renderer</td><td>number</td><td>可选</td><td>Phaser.AUTO</td><td>游戏渲染器。Phaser.AUTO(自动选择)，Phaser.WEBGL, Phaser.CANVAS，Phaser.HEADLESS(不渲染)。<span class="warning">手机游戏请务必指定Phaser.CANVAS</span></td></tr>
	<tr class="td"><td class="params indentS">parent</td><td>string|DOM</td><td>可选</td><td>''</td><td>游戏的父DOM元素，或者DOM元素的ID</td></tr>
	<tr class="td"><td class="params indentS">state</td><td>object</td><td>可选</td><td>null</td><td>游戏初始场景，一个包含<a>Phaser.State</a>函数(preload, create, update, render)的对象</td></tr>
	<tr class="td"><td class="params indentS">transparent</td><td>boolean</td><td>可选</td><td>false</td><td>是否要一个透明背景</td></tr>
	<tr class="td"><td class="params indentS">antialias</td><td>boolean</td><td>可选</td><td>true</td><td>是否要抗锯齿效果。如果要实现像素化的复古风格游戏，可以置为false</td></tr>
	<tr class="td"><td class="params indentS">physicsConfig</td><td>object</td><td>可选</td><td>null</td><td>物理引擎的配置对象</td></tr>
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

<p><span class="keywords">debug</span> : <a>Phaser.Utils.Debug</a></p>
<p>一系列很有用的调试工具集</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-256">line 256</a><p>

<p><span class="keywords">device</span> : <a>Phaser.Device</a></p>
<p>该对象包含游戏所运行的设备信息</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-236">line 236</a><p>

<p><span class="keywords">forceSingleUpdate</span> : boolean</p>
<p>在游戏循环中是否不允许跳帧。如果不允许，将此值设置为true。在游戏运行过程中，你可以随时切换。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-380">line 380</a><p>

<p><span class="keywords">fpsProblemNotifier</span> : <a>Phaser.Signal</a></p>
<p>如果游戏已经非常吃力，快要达不到设定的FPS了，就会发送此信号。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-375">line 375</a><p>

<p><span class="keywords">&lt;readonly&gt;height</span> : integer</p>
<p>游戏的高度。不要直接更改此值，请使用<a>Phaser.ScaleManager#setGameSize</a>，比如<span class="params">game.scale.setGameSize(width, height)</span></p>
<p>默认值：600</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-69">line 69</a><p>

<p><span class="keywords">&lt;readonly&gt;id</span> : number</p>
<p>游戏ID</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-31">line 31</a><p>

<p><span class="keywords">input</span> : <a>Phaser.Input</a></p>
<p>输入管理器的引用</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-171">line 171</a><p>

<p><span class="keywords">&lt;readonly&gt;isBooted</span> : boolean</p>
<p>游戏引擎是否已经启动</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-139">line 139</a><p>

<p><span class="keywords">&lt;readonly&gt;isRunning</span> : boolean</p>
<p>游戏是否正在运行(running)，还是暂停(paused)了？</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-145">line 145</a><p>

<p><span class="keywords">load</span> : <a>Phaser.Loader</a></p>
<p>资源加载器的引用</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-176">line 176</a><p>

<p><span class="keywords">lockRender</span> : boolean</p>
<p>如果设置此值为false(默认值)，Phaser会在每次update的时候渲染对象。如果设置为true，则渲染会被跳过。在游戏运行过程中也可以更改此值来控制游戏渲染。注意，如果设置为true，因为不会渲染，你的游戏画面将不动，所以慎用此值。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-275">line 275</a><p>

<p><span class="keywords">make</span> : <a>Phaser.GameObjectCreator</a></p>
<p>游戏对象创建器的引用</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-161">line 161</a><p>

<p><span class="keywords">math</span> : <a>Phaser.Math</a></p>
<p>数学计算工具的引用</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-181">line 181</a><p>

<p><span class="keywords">net</span> : <a>Phaser.Net</a></p>
<p>网络工具的引用</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-186">line 186</a><p>

<p><span class="keywords">onBlur</span> : <a>Phaser.Signal</a></p>
<p>游戏失去焦点的时候触发</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-311">line 311</a><p>

<p><span class="keywords">onFocus</span> : <a>Phaser.Signal</a></p>
<p>游戏获得焦点的时候触发</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-316">line 316</a><p>

<p><span class="keywords">onPause</span> : <a>Phaser.Signal</a></p>
<p>游戏暂停的时候触发</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-301">line 301</a><p>

<p><span class="keywords">onResume</span> : <a>Phaser.Signal</a></p>
<p>游戏从暂停状态恢复的时候触发</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-306">line 306</a><p>

<p><span class="keywords">parent</span> : string|HTMLElement</p>
<p>游戏的DOM父元素</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-47">line 47</a><p>

<p><span class="keywords">particles</span> : <a>Phaser.Particles</a></p>
<p>粒子系统管理器的引用</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-261">line 261</a><p>

<p><span class="keywords">paused</span> : boolean</p>
<p>游戏是否处于暂停状态。设置此值来使游戏进入暂停/恢复暂停</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-1122">line 1122</a><p>

<p><span class="keywords">&lt;readonly&gt;pendingStep</span> : boolean</p>
<p>这是被enableStep使用的一个内部值，查看它也可以用来调试游戏。enableStep可以开启游戏的单步调试模式。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-289">line 289</a><p>

<p><span class="keywords">physics</span> : <a>Phaser.Physics</a></p>
<p>物理引擎的引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-221">line 221</a><p>

<p><span class="keywords">physicsConfig</span> : object</p>
<p>物理世界的配置对象。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-41">line 41</a><p>

<p><span class="keywords">plugins</span> : <a>Phaser.PluginManager</a></p>
<p>插件管理器的引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-226">line 226</a><p>

<p><span class="keywords">preserveDrawingBuffer</span> : boolean</p>
<p>此值决定绘制的缓存在渲染之后要不要保留。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-108">line 108</a><p>

<p><span class="keywords">&lt;readonly&gt;renderType</span> : number</p>
<p>Phaser将使用的渲染器类型。可以是Phaser.AUTO, Phaser.CANVAS 或者 Phaser.WEBGL</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-128">line 128</a><p>

<p><span class="keywords">&lt;readonly&gt;resolution</span> : integer</p>
<p>游戏的分辨率。只读。可以在创建Game时通过配置对象指定。</p>
<p>默认值：1</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-78">line 78</a><p>

<p><span class="keywords">rnd</span> : <a>Phaser.RandomDataGenerator</a></p>
<p>随机数据生成器的引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-231">line 231</a><p>

<p><span class="keywords">scale</span> : <a>Phaser.ScaleManager</a></p>
<p>缩放管理器的引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-191">line 191</a><p>

<p><span class="keywords">sound</span> : <a>Phaser.SoundManager</a></p>
<p>音频管理器的引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-196">line 196</a><p>

<p><span class="keywords">stage</span> : <a>Phaser.Stage</a></p>
<p>舞台的引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-201">line 201</a><p>

<p><span class="keywords">state</span> : <a>Phaser.StateManager</a></p>
<p>场景管理器的引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-133">line 133</a><p>

<p><span class="keywords">&lt;readonly&gt;stepCount</span> : number</p>
<p>单步调试模式下，记录当前步数。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-296">line 296</a><p>

<p><span class="keywords">&lt;readonly&gt;stepping</span> : boolean</p>
<p>是否开启了单步调试模式。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-282">line 282</a><p>

<p><span class="keywords">time</span> : <a>Phaser.Time</a></p>
<p>游戏时钟的引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-206">line 206</a><p>

<p><span class="keywords">transparent</span> : boolean</p>
<p>游戏背景是否透明。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-96">line 96</a><p>

<p><span class="keywords">tweens</span> : <a>Phaser.TweenManager</a></p>
<p>tween动画管理器的引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-211">line 211</a><p>

<p><span class="keywords">&lt;readonly&gt;width</span> : integer</p>
<p>游戏的宽度。不要直接更改此值，请使用<a>Phaser.ScaleManager#setGameSize</a>，比如<span class="params">game.scale.setGameSize(width, height)</span></p>
<p>默认值：800</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-58">line 58</a><p>

<p><span class="keywords">world</span> : <a>Phaser.World</a></p>
<p>游戏世界的引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-216">line 216</a><p>

<p class="title">方法</p>

<p><span class="keywords">destroy()</span></p>
<p>销毁整个游戏。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-995">line 995</a><p>

<p><span class="keywords">disableStep()</span></p>
<p>禁止通过game.step()来驱动游戏运行。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-970">line 970</a><p>

<p><span class="keywords">enableStep()</span></p>
<p>允许单步调试。可以通过game.step()来驱动游戏运行。调用一次step，游戏循环前进一帧。这个方法在调试一些棘手的问题是非常有用。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-956">line 956</a><p>

<p><span class="keywords">step()</span></p>
<p>启动单步调试模式的时候，直接调用这个方法，可以让游戏前进一帧。这在调试一些棘手问题时非常有效，可以配合stepCount来查看游戏进行的步数。</p>
<p class="source indentS">源码 - <a href="../docs/src_core_Game.js.html">core/Game.js</a>, <a href="../docs/src_core_Game.js.html#sunlight-1-line-982">line 982</a><p>

<?php include_once 'partials/docFoot.php'; ?>