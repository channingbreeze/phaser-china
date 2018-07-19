<?php ini_set("include_path", "../"); ?>
<?php $subdir=1; ?>
<?php include_once 'partials/docHead.php'; ?>

<p class="title">本篇文档翻译者：安之亮</p>

<p class="title"><a href="../doc.html">Phaser</a>.Cache</p>
<p class="keywords">new Cache(game)</p>
<p class="indent">Phaser只有一个Cache（缓存）来存储所有素材。</p>
<p class="indent">缓存被分成区，如图片，音效，视频，json文件等。这些素材使用唯一的字符键作为标识。但不同区域的素材可以使用同一个键名。例如一个sprite sheet（精灵表）和声音文件可以使用同一键名“playerWalking”。缓存的内容是由Phaser.Loader自动装入的。当你用loader获取一个外部素材（如图片）时，这些素材就被自动装入缓存中对应的位置。最常用的游戏对象，如Sprite或视频会自动查询缓存来抽取素材，从而实例化它们。</p>
<p class="indent">你可以在一个State中使用this.cache来处理缓存。如此便可以使用它拥有的公共方法。包括添加新的内容，删除或查询。当你从缓存中获得一个素材时，你得到的是一个引用而不是拷贝。所以当你取得一个素材并修改它，缓存中的素材也会被修改，即使你没有将它放回缓存。</p>
<p class="indent">默认情况下，改变State不会清空缓存，但如果你的游戏需要的话，还是有一个选项可以清空缓存的。在一般游戏里，缓存只在游戏被读取后才被装入素材，仅此一次。之后缓存就被当做一个素材库来使用。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">game</td><td>Phaser.Game</td><td>当前运行的游戏的一个引用。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-34">line 34</a><p>

<p class="title">成员</p>

<p><span class="keywords">&lt;static, constant&gt;BINARY</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-166">line 166</a><p>

<p><span class="keywords">&lt;static, constant&gt;BITMAPDATA</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-172">line 172</a><p>

<p><span class="keywords">&lt;static, constant&gt;BITMAPFONT</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-178">line 178</a><p>

<p><span class="keywords">&lt;static, constant&gt;CANVAS</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-124">line 124</a><p>

<p><span class="keywords">&lt;static, constant&gt;DEFAULT</span> : PIXI.Texture</p>
<p class="indent">纹理的默认图片。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-215">line 215</a><p>

<p><span class="keywords">&lt;static, constant&gt;IMAGE</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-130">line 130</a><p>

<p><span class="keywords">&lt;static, constant&gt;JSON</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-184">line 184</a><p>

<p><span class="keywords">&lt;static, constant&gt;MISSING</span> : PIXI.Texture</p>
<p class="indent">当纹理的源图片丢失时的默认图片。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-222">line 222</a><p>

<p><span class="keywords">&lt;static, constant&gt;PHYSICS</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-154">line 154</a><p>

<p><span class="keywords">&lt;static, constant&gt;RENDER_TEXTURE</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-208">line 208</a><p>

<p><span class="keywords">&lt;static, constant&gt;SHADER</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-202">line 202</a><p>

<p><span class="keywords">&lt;static, constant&gt;SOUND</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-142">line 142</a><p>

<p><span class="keywords">&lt;static, constant&gt;TEXT</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-148">line 148</a><p>

<p><span class="keywords">&lt;static, constant&gt;TEXTURE</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-136">line 136</a><p>

<p><span class="keywords">&lt;static, constant&gt;TILEMAP</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-160">line 160</a><p>

<p><span class="keywords">&lt;static, constant&gt;VIDEO</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-196">line 196</a><p>

<p><span class="keywords">&lt;static, constant&gt;XML</span> : number</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-190">line 190</a><p>

<p><span class="keywords">autoResolveURL </span> : boolean</p>
<p>当使用Cache.getURL方法时自动解析网址为绝对路径。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-45">line 45</a><p>

<p><span class="keywords">game</span> : Phaser.Game</p>
<p>游戏的本地引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-39">line 39</a><p>

<p><span class="keywords">onSoundUnlock</span> : Phaser.Signal</p>
<p>当移动设备上的声音系统通过触摸事件解锁时，此事件将被触发。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-91">line 91</a><p>

<p class="title">方法</p>

<p><span class="keywords">addBinary(key, binaryData)</span></p>
<p>在缓存中增加一个二进制对象。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>将被存储到缓存中的素材所对应的键。在这个缓存中此键名应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">binaryData</td><td>object</td><td>将被装入缓存的二进制对象。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-424">line 424</a><p>

<p><span class="keywords">addBitmapData(key, bitmapData, frameData) : <a>Phaser.BitmapData</a></span></p>
<p>向缓存添加一个BitmapData（位图数据）对象。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>这个素材在缓存中的键名称。在这个缓存中应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">bitmapData</td><td>Phaser.BitmapData</td><td></td><td></td><td>要被加入缓存的图像数据对象。</td></tr>
  <tr class="td"><td class="params indentS">frameData</td><td>Phaser.FrameData | null</td><td>可选</td><td>(自动创建)</td><td>可选的帧数据设置关联已有的图像数据。如果没有特别说明（或未定义），一个包含图像帧的帧数据对象将被创建。如果指定null（空），没有帧数据会被创建。</td></tr>
</table>
<p>返回：Phaser.BitmapData，将被存入缓存的图像数据对象。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-437">line 437</a><p>

<p><span class="keywords">addBitmapFont(key, url, data, atlasData, atlasType, xSpacing, ySpacing)</span></p>
<p>向缓存添加一个新的位图字体。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>这个素材在缓存中的键名称。在这个缓存中应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td></td><td></td><td>载入素材的url。如果没有素材被载入则设置为空。</td></tr>
  <tr class="td"><td class="params indentS">data</td><td>object</td><td></td><td></td><td>额外字体数据。</td></tr>
  <tr class="td"><td class="params indentS">atlasData</td><td>object</td><td></td><td></td><td>位图字体数据。</td></tr>
  <tr class="td"><td class="params indentS">atlasType</td><td>string</td><td>可选</td><td>'xml'</td><td>位图字体数据文件的格式：json或xml。</td></tr>
  <tr class="td"><td class="params indentS">xSpacing</td><td>number</td><td>可选</td><td>0</td><td>字符水平间距的像素值。</td></tr>
  <tr class="td"><td class="params indentS">ySpacing</td><td>number</td><td>可选</td><td>0</td><td>字符垂直间距的像素值。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-462">line 462</a><p>

<p><span class="keywords">addCanvas(key, canvas, context)</span></p>
<p>向缓存中添加一个新的canvas对象。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="15%" class="indentS">参数名</th><th width="15%">参数类型</th><th width="15%">参数</th><th width="55%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td>这个素材在缓存中的键名称。在这个缓存中应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">canvas</td><td>HTMLCanvasElement</td><td></td><td>Canvas 的dom元素。</td></tr>
  <tr class="td"><td class="params indentS">context</td><td>CanvasRenderingContext2D</td><td>可选</td><td>canvas元素的内容。如果没有特别说明默认为canvas.getContext('2d')。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-230">line 230</a><p>

<p><span class="keywords">addImage(key, url, data) : <a>object</a></span></p>
<p>添加一个位图文件。这个文件通常是通过Loader事先载入。 但也可以事先被载入到DOM. If如果之前有一个同键名的位图 存在缓存中，那这个位图将被删除销毁，新的位图将被插入它在缓存的位置。</p>
<p>如果位图没有被获取（成功或失败），则会在控制台显示一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>将被存储到缓存中的素材所对应的键。在这个缓存中此键名应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td>载入素材的url。如果没有素材被载入则设置为空。</td></tr>
  <tr class="td"><td class="params indentS">data</td><td>object</td><td>额外位图数据。</td></tr>
</table>
<p>返回：object，完整的位图对象被载入缓存。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-246">line 246</a><p>

<p><span class="keywords">addJSON(key, url, data)</span></p>
<p>添加一个json对象。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>将被存储到缓存中的素材所对应的键。在这个缓存中此键名应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td>载入素材的url。如果没有素材被载入则设置为空。</td></tr>
  <tr class="td"><td class="params indentS">data</td><td>object</td><td>额外json数据。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-501">line 501</a><p>

<p><span class="keywords">addPhysicsData(key, url, JSONData, format)</span></p>
<p>添加一个物理数据对象。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>将被存储到缓存中的素材所对应的键。在这个缓存中此键名应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td>载入素材的url。如果没有素材被载入则设置为空。</td></tr>
  <tr class="td"><td class="params indentS">JSONData</td><td>object</td><td>物理数据对象（一个Json文件）。</td></tr>
  <tr class="td"><td class="params indentS">format</td><td>number</td><td>物理数据的格式。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-390">line 390</a><p>

<p><span class="keywords">addRenderTexture(key, texture)</span></p>
<p>添加一个新的Phaser.RenderTexture。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>将被存储到缓存中的素材所对应的键。在这个缓存中此键名应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">texture</td><td>Phaser.RenderTexture</td><td>被用作 RenderTexture的基础纹理。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-566">line 566</a><p>

<p><span class="keywords">addShader(key, url, data)</span></p>
<p>在缓存中添加一个片段着色。该文件必须已经加载，通常通过Phaser.Loader。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>将被存储到缓存中的素材所对应的键。在这个缓存中此键名应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td>载入素材的url。如果没有素材被载入则设置为空。</td></tr>
  <tr class="td"><td class="params indentS">data</td><td>object</td><td>额外的着色数据。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-550">line 550</a><p>

<p><span class="keywords">addSound(key, url, data, webAudio, audioTag)</span></p>
<p>将声音文件添加到缓存中。该文件必须已经加载，通常通过phaser.Loader。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>将被存储到缓存中的素材所对应的键。在这个缓存中此键名应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td>载入素材的url。如果没有素材被载入则设置为空。</td></tr>
  <tr class="td"><td class="params indentS">data</td><td>object</td><td>额外的声音数据。</td></tr>
  <tr class="td"><td class="params indentS">webAudio</td><td>boolean</td><td>如果是网络声音文件则返回True。</td></tr>
  <tr class="td"><td class="params indentS">audioTag</td><td>boolean</td><td>如果文件是使用传统的HTML音频则返回True。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-338">line 338</a><p>

<p><span class="keywords">addSpriteSheet(key, url, data, frameWidth, frameHeight, frameMax, margin, spacing)</span></p>
<p>在缓存中添加一个新的精灵表。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>这个素材在缓存中的键名称。在这个缓存中应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td></td><td></td><td>载入素材的url。如果没有素材被载入则设置为空。</td></tr>
  <tr class="td"><td class="params indentS">data</td><td>object</td><td></td><td></td><td>额外的精灵表数据。</span></td></tr>
  <tr class="td"><td class="params indentS">frameWidth</td><td>number</td><td></td><td></td><td>每一帧精灵的宽度。</td></tr>
  <tr class="td"><td class="params indentS">frameHeight</td><td>number</td><td></td><td></td><td>每一帧精灵的高度。</td></tr>
  <tr class="td"><td class="params indentS">frameMax</td><td>number</td><td>可选</td><td>-1</td><td>精灵表的帧数。如果返回-1则将精灵表平均地分割。</td></tr>
  <tr class="td"><td class="params indentS">margin</td><td>number</td><td>可选</td><td>0</td><td>如果有margin，设置margin的值。</td></tr>
  <tr class="td"><td class="params indentS">spacing</td><td>number</td><td>可选</td><td>0</td><td>如果有spacing，设置spacing的值。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-579">line 579</a><p>

<p><span class="keywords">addText(key, url, data)</span></p>
<p>添加一个新的文本数据。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>将被存储到缓存中的素材所对应的键。在这个缓存中此键名应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td>载入素材的url。如果没有素材被载入则设置为空。</td></tr>
  <tr class="td"><td class="params indentS">data</td><td>object</td><td>额外的文本数据。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-374">line 374</a><p>

<p><span class="keywords">addTextureAtlas(key, url, data, atlasData, format)</span></p>
<p>添加一个新的纹理atlas。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>将被存储到缓存中的素材所对应的键。在这个缓存中此键名应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td>载入素材的url。如果没有素材被载入则设置为空。</td></tr>
  <tr class="td"><td class="params indentS">data</td><td>object</td><td>额外的纹理atlas数据。</td></tr>
  <tr class="td"><td class="params indentS">atlasData</td><td>object</td><td>纹理atlas帧数据。</td></tr>
  <tr class="td"><td class="params indentS">format</td><td>number</td><td>纹理atlas的文件格式。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-616">line 616</a><p>

<p><span class="keywords">addTilemap(key, url, mapData, format)</span></p>
<p>添加一个新的tilemap。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>将被存储到缓存中的素材所对应的键。在这个缓存中此键名应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td>载入素材的url。如果没有素材被载入则设置为空。</td></tr>
  <tr class="td"><td class="params indentS">mapData</td><td>object</td><td>tilemap数据对象 (可以是CSV或 JSON文件)。</td></tr>
  <tr class="td"><td class="params indentS">format</td><td>number</td><td>tilemap数据的格式。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-407">line 407</a><p>

<p><span class="keywords">addVideo(key, url, data, isBlob)</span></p>
<p>将视频文件添加到缓存中。该文件必须已经加载，通常通过Phaser.Loader。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>将被存储到缓存中的素材所对应的键。在这个缓存中此键名应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td>载入素材的url。如果没有素材被载入则设置为空。</td></tr>
  <tr class="td"><td class="params indentS">data</td><td>object</td><td>额外的视频数据。</td></tr>
  <tr class="td"><td class="params indentS">isBlob</td><td>boolean</td><td>如果文件预装通过XHR和数据参数是一个Blob返回True。假如果一个视频标签被创建，返回False。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-533">line 533</a><p>

<p><span class="keywords">addXML(key, url, data)</span></p>
<p>添加一个xml数据对象。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>将被存储到缓存中的素材所对应的键。在这个缓存中此键名应该唯一。</td></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td>载入素材的url。如果没有素材被载入则设置为空。</td></tr>
  <tr class="td"><td class="params indentS">data</td><td>object</td><td>额外的XML数据。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-517">line 517</a><p>

<p><span class="keywords">checkBinaryKey(key) : <a>boolean</a></span></p>
<p>检查二进制高速缓存中是否存在给定的键。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中游戏素材的键名称。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-915">line 915</a><p>

<p><span class="keywords">checkBitmapDataKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在位图数据缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-928">line 928</a><p>

<p><span class="keywords">checkBitmapFontKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在位图字体缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-941">line 941</a><p>

<p><span class="keywords">checkCanvasKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在Canvas缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-824">line 824</a><p>

<p><span class="keywords">checkImageKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在位图缓存中。注意包括纹理atlases，精灵表和Retro字体。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-837">line 837</a><p>

<p><span class="keywords">checkJSONKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在Json缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-954">line 954</a><p>

<p><span class="keywords">checkKey(cache, key) : <a>boolean</a></span></p>
<p>检查一个给定的对象类型的键是否在缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">cache</td><td>integer</td><td>搜索缓存。为常量，如Phaser.Cache.IMAGE或haser.Cache.SOUND。</td></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-784">line 784</a><p>

<p><span class="keywords">checkPhysicsKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在物理缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-889">line 889</a><p>

<p><span class="keywords">checkRenderTextureKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在纹理渲染缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1006">line 1006</a><p>

<p><span class="keywords">checkShaderKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在片段着色器缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-993">line 993</a><p>

<p><span class="keywords">checkSoundKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在Sound缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-863">line 863</a><p>

<p><span class="keywords">checkTextKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在文本缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-876">line 876</a><p>

<p><span class="keywords">checkTextureKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在纹理缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-850">line 850</a><p>

<p><span class="keywords">checkTilemapKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在Tilemap缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-902">line 902</a><p>

<p><span class="keywords">checkURL(url) : <a>boolean</a></span></p>
<p>检查一个给定的URL是否被载入缓存。只有在所有的preloading发生前把Cache.autoResolveURL设置为True时，这个方法才有效。这个方法还会触发一个给定的URL的DOM src事件，所以请注意文件类型，比如Sound文件在Firefox上回发生2次载入实例。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td>缓存中要检查的url。</td></tr>
</table>
<p>返回：boolean，url存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-803">line 803</a><p>

<p><span class="keywords">checkVideoKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在视频缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-980">line 980</a><p>

<p><span class="keywords">checkXMLKey(key) : <a>boolean</a></span></p>
<p>检查键名是否在XML缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：boolean，键名存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-967">line 967</a><p>

<p><span class="keywords">decodedSound(key, data)</span></p>
<p>添加一个解码的声音文件。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
  <tr class="td"><td class="params indentS">data</td><td>object</td><td>额外的声音数据。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-726">line 726</a><p>

<p><span class="keywords">destroy()</span></p>
<p>清除缓存，移除所有缓存对象。如果缓存对象有destroy方法，它也会被调用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1947">line 1947</a><p>

<p><span class="keywords">getBaseTexture(key, cache) : <a>PIXI.BaseTexture</a></span></p>
<p>获得一个PIXI.BaseTexture。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>图像中BaseTexture的键名。</td></tr>
  <tr class="td"><td class="params indentS">cache</td><td>integer</td><td>可选</td><td>Phaser.Cache.IMAGE</td><td>用来搜索素材的缓存。</td></tr>
</table>
<p>返回：PIXI.BaseTexture，BaseTexture对象。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1426">line 1426</a><p>

<p><span class="keywords">getBinary(key) : <a>object</a></span></p>
<p>在缓存中获取一个二进制对象。</p>
<p>这个对象有给定的键来查询。</p>
<p>注意：如果对象违背找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：object，二进制数据对象。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1266">line 1266</a><p>

<p><span class="keywords">getBitmapData(key) : <a>Phaser.BitmapData</a></span></p>
<p>从缓存中获取一个位图数据对象。</p>
<p>这个对象有给定的键来查询。</p>
<p>注意：如果对象违背找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：Phaser.BitmapData，如果查询成功返回Phaser.BitmapData，否则返回空值。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1283">line 1283</a><p>

<p><span class="keywords">getBitmapFont(key) : <a>Phaser.BitmapFont</a></span></p>
<p>从缓存中获取一个位图字体对象。</p>
<p>这个对象有给定的键来查询。</p>
<p>注意：如果对象违背找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：Phaser.BitmapFont，如果查询成功返回Phaser.BitmapFont，否则返回空值。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1300">line 1300</a><p>

<p><span class="keywords">getCanvas(key) : <a>object</a></span></p>
<p>从缓存中获取一个Canvas对象。</p>
<p>这个对象有给定的键来查询。</p>
<p>注意：如果对象违背找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：object，如果此对象被找到则返回canvas对象，否则返回空值。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1061">line 1061</a><p>

<p><span class="keywords">getFrame(key, cache) : <a>Phaser.Frame</a></span></p>
<p>根据键名获取一个帧。目的是为了创建一个非atlas精灵表位图。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>帧数据在缓存中的键名。</td></tr>
  <tr class="td"><td class="params indentS">cache</td><td>integer</td><td>可选</td><td>Phaser.Cache.IMAGE</td><td>搜索缓存中的内容。</td></tr>
</table>
<p>返回：Phaser.Frame，帧数据。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1442">line 1442</a><p>

<p><span class="keywords">getFrameByIndex(key, index, cache) : <a>Phaser.Frame</a></span></p>
<p>根据键名获取一个帧数据以外的单一帧。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>帧数据在缓存中的键名。</td></tr>
  <tr class="td"><td class="params indentS">index</td><td>number</td><td></td><td></td><td>帧序列号。</td></tr>
  <tr class="td"><td class="params indentS">cache</td><td>integer</td><td>可选</td><td>Phaser.Cache.IMAGE</td><td>查询缓存常量如Phaser.Cache.IMAGE 或Phaser.Cache.SOUND。</td></tr>
</table>
<p>返回：Phaser.Frame，帧数据。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1536">line 1536</a><p>

<p><span class="keywords">getFrameByName(key, name, cache) : <a>Phaser.Frame</a></span></p>
<p>根据键名获取一个帧数据以外的单一帧。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>帧数据在缓存中的键名。</td></tr>
  <tr class="td"><td class="params indentS">name</td><td>string</td><td></td><td></td><td>帧名称。</td></tr>
  <tr class="td"><td class="params indentS">cache</td><td>integer</td><td>可选</td><td>Phaser.Cache.IMAGE</td><td>查询缓存常量如Phaser.Cache.IMAGE 或Phaser.Cache.SOUND。</td></tr>
</table>
<p>返回：Phaser.Frame，帧数据。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1560">line 1560</a><p>

<p><span class="keywords">getFrameCount(key, cache) : <a>number</a></span></p>
<p>根据给定的键名获取帧的总数。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>帧数据在缓存中的键名。</td></tr>
  <tr class="td"><td class="params indentS">cache</td><td>integer</td><td>可选</td><td>Phaser.Cache.IMAGE</td><td>搜索缓存中的内容。</td></tr>
</table>
<p>返回：number，返回帧的总数，如果没有找到位图则返回0。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1458">line 1458</a><p>

<p><span class="keywords">getFrameData(key, cache) : <a>Phaser.FrameData</a></span></p>
<p>从位图缓存中获取帧数据对象。</p>
<p>这个对象有给定的键来查询。</p>
<p>注意：如果对象违背找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>帧数据在缓存中的键名。</td></tr>
  <tr class="td"><td class="params indentS">cache</td><td>integer</td><td>可选</td><td>Phaser.Cache.IMAGE</td><td>搜索缓存中的内容。</td></tr>
</table>
<p>返回：Phaser.FrameData，帧数据。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1458">line 1458</a><p>

<p><span class="keywords">getImage(key, full) : <a>Image</a></span></p>
<p>获得一个位图对象。是DOM位图而不是Phaer.Image对象。</p>
<p>这个对象有给定的键来查询。</p>
<p>注意：如果对象未被找到，控制台会发出一条警告信息。</p>
<p>只查询缓存的Image区域，包括位图，精灵表和纹理Atlas。</p>
<p>如果图片被位图字体使用，请使用get方法。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>可选</td><td></td><td>素材在缓存中的键。如果没有或空返回一个默认位图。如果有但是没找到则抛出异常并返回丢失的位图。</td></tr>
  <tr class="td"><td class="params indentS">full</td><td>boolean</td><td>可选</td><td>false</td><td>如果是true则返回整个位图对象，如果false则返回HTML位图。</td></tr>
</table>
<p>返回：Image，若果在缓存中找到则返回位图对象，否则返回空值。当full为真时返回一个JavaScript对象。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1078">line 1078</a><p>

<p><span class="keywords">getItem(key, cache, method, property) : <a>object</a></span></p>
<p>根据属性或键获得一个item。</p>
<p>通常在内部使用，一般被类似getImage的方法实用，但是也可以单独调用。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="15%" class="indentS">参数名</th><th width="15%">参数类型</th><th width="15%">是否可选</th><th width="55%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td>数据在缓存中的键。</td></tr>
  <tr class="td"><td class="params indentS">cache</td><td>integer</td><td></td><td>查询缓存常量如Phaser.Cache.IMAGE或Phaser.Cache.SOUND。</td></tr>
  <tr class="td"><td class="params indentS">method</td><td>string</td><td>可选</td><td>可以为空，控制台则不发出警告。</td></tr>
  <tr class="td"><td class="params indentS">property</td><td>string</td><td>可选</td><td>如果你需要一个特别的属性，在此说明。</td></tr>
</table>
<p>返回：object，找到则返回item，否则返回空。如果键无效控制台发出警告。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1023">line 1023</a><p>

<p><span class="keywords">getJSON(key, clone) : <a>object</a></span></p>
<p>在缓存中获得一个JSON对象。</p>
<p>这个对象有给定的键来查询。</p>
<p>注意：如果对象未被找到，控制台会发出一条警告信息。</p>
<p>可以返回对象的引用（默认），或设置true来返回一份复制。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>数据在缓存中的键。</td></tr>
  <tr class="td"><td class="params indentS">clone</td><td>boolean</td><td>可选</td><td>false</td><td>返回原始对象的复制（true）或引用（false）。</td></tr>
</table>
<p>返回：object，JSON对象或数组（如果键指向数组属性的话）。如果属性未被找到则返回null。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1317">line 1317</a><p>

<p><span class="keywords">getKeys(cache) : <a>Array</a></span></p>
<p>再被查询的缓存中获得其中所有的键。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">cache</td><td>integer</td><td>可选</td><td>Phaser.Cache.IMAGE</td><td>获得缓存中的键。为常量，如Phaser.Cache.IMAGE或haser.Cache.SOUND。</td></tr>
</table>
<p>返回：Array，缓存中所有键组成的数组。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1609">line 1609</a><p>

<p><span class="keywords">getPhysicsData(key, object, fixtureKey) : <a>object</a></span></p>
<p>获得一个物理数据对象。</p>
<p>根据给定的键查找。</p>
<p>注意：如果对象未被找到，控制台会发出一条警告信息。</p>
<p>你可以获得整个数据链，或一个对象或一个一个兑现的修正。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>从缓存中获取的键。</td></tr>
  <tr class="td"><td class="params indentS">object</td><td>string</td><td>可选</td><td>null</td><td>如果指定了它将返回给定的一部分的物理对象，如果空，它将返回所有的对象。</td></tr>
  <tr class="td"><td class="params indentS">fixtureKey</td><td>string</td><td></td><td></td><td>被修正对象的修正键。可以通过PhaserExporter修正此键。</td></tr>
</table>
<p>返回：object，返回物理对象如果被找到的话。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1187">line 1187</a><p>

<p><span class="keywords">getRenderTexture(key) : <a>object</a></span></p>
<p>从缓存中获取一个RenderTexture对象。 </p>
<p>通过给定的键来查找此对象。</p>
<p>注意：如果对象未被找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：object，带有选软纹理和帧的对象。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1405">line 1405</a><p>

<p><span class="keywords">getShader(key) : <a>string</a></span></p>
<p>从缓存中获取一个片段着色对象。 </p>
<p>通过给定的键来查找此对象。</p>
<p>注意：如果对象未被找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：string，着色对象。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1388">line 1388</a><p>

<p><span class="keywords">getSound(key) : <a>Phaser.Sound</a></span></p>
<p>获得一个声音对象。</p>
<p>通过给定的键来查找此对象。</p>
<p>注意：如果对象未被找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：Phaser.Sound，声音对象。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1136">line 1136</a><p>

<p><span class="keywords">getSoundData(key) : <a>object</a></span></p>
<p>获得一个原始声音数据对象。</p>
<p>通过给定的键来查找此对象。</p>
<p>注意：如果对象未被找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：object，声音数据。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1153">line 1153</a><p>

<p><span class="keywords">getText(key) : <a>object</a></span></p>
<p>获得一个文本对象。</p>
<p>通过给定的键来查找此对象。</p>
<p>注意：如果对象未被找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：object，文本数据对象。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1170">line 1170</a><p>

<p><span class="keywords">getTextureFrame(key) : <a>Phaser.Frame</a></span></p>
<p>由键来获得单个纹理帧。</p>
<p>这个默认的帧只能用来创建非atlas，非精灵表位图。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：Phaser.Frame，帧数据。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1121">line 1121</a><p>

<p><span class="keywords">getTilemapData(key) : <a>object</a></span></p>
<p>获得一个原始的Tilemap数据对象。可以使CSV或JSON格式。</p>
<p>通过给定的键来查找此对象。</p>
<p>注意：如果对象未被找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>缓存中的键值。</td></tr>
</table>
<p>返回：object，CSV或JSON格式中的原始tailemap数据。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1249">line 1249</a><p>

<p><span class="keywords">getURL(url) : <a>object</a></span></p>
<p>通过URL获取缓存对象。通过设置Cache.autoResolveURL t来返回一个值。注意每次使用这个方法都会触发一个Dom路径查询，所以小心以免在目标设备会浏览器中两次检查。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">url</td><td>string</td><td>用来载入对象的url。</td></tr>
</table>
<p>返回：object，缓存对象。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1584">line 1584</a><p>

<p><span class="keywords">getVideo(key) : <a>Phaser.Video</a></span></p>
<p>获取一个视频对象。</p>
<p>通过给定的键来查找此对象。</p>
<p>注意：如果对象未被找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>从缓存中获取的键。</td></tr>
</table>
<p>返回：Phaser.Video，视频对象。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1371">line 1371</a><p>

<p><span class="keywords">getXML(key) : <a>object</a></span></p>
<p>获取一个XML对象。</p>
<p>通过给定的键来查找此对象。</p>
<p>注意：如果对象未被找到，控制台会发出一条警告信息。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>从缓存中获取的键。</td></tr>
</table>
<p>返回：object，XML对象。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1354">line 1354</a><p>

<p><span class="keywords">hasFrameData(key, cache) : <a>boolean</a></span></p>
<p>检查整数据对应的键是否在位图缓存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>从缓存中获取的键。</td></tr>
  <tr class="td"><td class="params indentS">cache</td><td>string</td><td>可选</td><td>Phaser.Cache.IMAGE</td><td>用来搜索对象的缓存。</td></tr>
</table>
<p>返回：boolean，如果给定的键有整数据则返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1501">line 1501</a><p>

<p><span class="keywords">isSoundDecoded(key) : <a>boolean</a></span></p>
<p>检查声音对象是否已完成解码。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>从缓存中获取的键。</td></tr>
</table>
<p>返回：boolean，声音对象是否已解码。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-743">line 743</a><p>

<p><span class="keywords">isSoundReady(key) : <a>boolean</a></span></p>
<p>检查声音对象是否可以播放。当一个声音对象完成解码并且设备不在触摸锁定时，就可以准备播放了。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>从缓存中获取的键。</td></tr>
</table>
<p>返回：boolean，当声音已解码并且设备部再触摸锁定时，返回true。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-761">line 761</a><p>

<p><span class="keywords">reloadSound(key)</span></p>
<p>从服务器上从新读取一个声音文件。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>从缓存中获取的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-666">line 666</a><p>

<p><span class="keywords">reloadSoundComplete(key)</span></p>
<p>当声音从新载入完成后触发onSoundUnlock事件。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>从缓存中获取的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-691">line 691</a><p>

<p><span class="keywords">removeBinary(key)</span></p>
<p>从缓存中删除一个二进制文件。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1747">line 1747</a><p>

<p><span class="keywords">removeBitmapData(key)</span></p>
<p>从缓存中删除一个位图数据。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1762">line 1762</a><p>

<p><span class="keywords">removeBitmapFont(key)</span></p>
<p>从缓存中删除一个位图字体。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1777">line 1777</a><p>

<p><span class="keywords">removeCanvas(key)</span></p>
<p>从缓存中删除一个画布。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1641">line 1641</a><p>

<p><span class="keywords">removeImage(key, destroyBaseTexture)</span></p>
<p>从缓存中删除一个图片。</p>
<p>你可以选择从内存中删除它，这将会调用BaseTexture.destroy。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>要删除的对象的键。</td></tr>
  <tr class="td"><td class="params indentS">destroyBaseTexture</td><td>boolean</td><td>可选</td><td>true</td><td>和图像绑定的BaseTexture是否应该被销毁。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1656">line 1656</a><p>

<p><span class="keywords">removeJSON(key)</span></p>
<p>从缓存中删除一个json对象。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1792">line 1792</a><p>

<p><span class="keywords">removePhysics(key)</span></p>
<p>从缓存中删除一个物理数据文件。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1717">line 1717</a><p>

<p><span class="keywords">removeRenderTexture(key)</span></p>
<p>从缓存中删除一个渲染纹理。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1852">line 1852</a><p>

<p><span class="keywords">removeShader(key)</span></p>
<p>从缓存中删除一个着色器。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1837">line 1837</a><p>

<p><span class="keywords">removeSound(key)</span></p>
<p>从缓存中删除一个音频。</p>
<p>如果有其他Phaser.Sound对象使用了用该方法移除的音频文件，它们会自动销毁。如果你想要更加全面的控制，你可以自己先做一些清理工作，然后再调用该方法。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1683">line 1683</a><p>

<p><span class="keywords">removeSpriteSheet(key)</span></p>
<p>从缓存中删除一个精灵图集。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1867">line 1867</a><p>

<p><span class="keywords">removeText(key)</span></p>
<p>从缓存中删除一个精灵图集。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1702">line 1702</a><p>

<p><span class="keywords">removeTextureAtlas(key)</span></p>
<p>从缓存中删除一个Atlas纹理。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1882">line 1882</a><p>

<p><span class="keywords">removeTilemap(key)</span></p>
<p>从缓存中删除一个瓦片地图。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1732">line 1732</a><p>

<p><span class="keywords">removeVideo(key)</span></p>
<p>从缓存中删除一个视频。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1822">line 1822</a><p>

<p><span class="keywords">removeXML(key)</span></p>
<p>从缓存中删除一个XML对象。</p>
<p>注意这只是从Phaser.Cache删除，如果你程序的其他地方还有对象的引用，那么它还会在内存中。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>要删除的对象的键。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1807">line 1807</a><p>

<p><span class="keywords">updateFrameData(key, frameData, cache)</span></p>
<p>更新一组帧数据。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>获得对象引用的唯一键名。</td></tr>
  <tr class="td"><td class="params indentS">frameData</td><td>number</td><td></td><td></td><td>新的帧数据。</td></tr>
  <tr class="td"><td class="params indentS">cache</td><td>integer</td><td>可选</td><td>Phaser.Cache.IMAGE</td><td>获得缓存中的键。为常量，如Phaser.Cache.IMAGE或haser.Cache.SOUND。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-1517">line 1517</a><p>

<p><span class="keywords">updateSound(key)</span></p>
<p>更新缓存中的声音对象</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
  <tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
  <tr class="td"><td class="params indentS">key</td><td>string</td><td>素材在缓存中的键名。</td></tr>
</table>
<p class="source indentS">源码 - <a href="../docs/src_loader_Cache.js.html">loader/Cache.js</a>, <a href="../docs/src_loader_Cache.js.html#sunlight-1-line-709">line 709</a><p>

<?php include_once 'partials/docFoot.php'; ?>	
