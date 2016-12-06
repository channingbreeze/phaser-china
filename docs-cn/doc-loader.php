<?php ini_set("include_path", "../"); ?>
<?php $subdir=1; ?>
<?php include_once 'partials/docHead.php'; ?>

<p class="title"><a href="../doc.html">Phaser</a>.Loader</p>
<p class="keywords">new Loader(game)</p>
<p class="indent">加载器加载所有外部内容，如图像、声音、纹理地图集和数据文件。</p>
<p class="indent">加载器可以从标签(如图像元素img)和XHR中加载资源，并且提供加载进度和加载完成事件的回调接口。</p>
<p class="indent">支持和默认启用并行加载，并行加载前的一些行为可以通过withSyncPoint来控制。</p>
<p class="indent">Atlas的素材集可以通过<a>Texture Packer</a>或者<a>Shoebox</a>来制作。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
	<tr class="td"><td class="params indentS">game</td><td><a href="doc-game.html">Phaser.Game</a></td><td>当前游戏的引用。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-22">line 22</a><p>

<p class="title">成员</p>

<p><span class="keywords">&lt;static, constant&gt;PHYSICS_LIME_CORONA_JSON</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-299">line 299</a><p>

<p><span class="keywords">&lt;static, constant&gt;PHYSICS_PHASER_JSON</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-305">line 305</a><p>

<p><span class="keywords">&lt;static, constant&gt;TEXTURE_ATLAS_JSON_ARRAY</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-281">line 281</a><p>

<p><span class="keywords">&lt;static, constant&gt;TEXTURE_ATLAS_JSON_HASH</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-287">line 287</a><p>

<p><span class="keywords">&lt;static, constant&gt;TEXTURE_ATLAS_JSON_PYXEL</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-311">line 311</a><p>

<p><span class="keywords">&lt;static, constant&gt;TEXTURE_ATLAS_XML_STARLING</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-293">line 293</a><p>

<p><span class="keywords">_withSyncPointDepth</span> : integer</p>
<p>一个计数器，如果大于0，文件将自动添加为同步点。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-204">line 204</a><p>

<p><span class="keywords">baseURL</span> : string</p>
<p>如果你想在所有资源前面添加一个URL，可以设置此参数。这个参数必须以/结尾</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-83">line 83</a><p>







<?php include_once 'partials/docFoot.php'; ?>		