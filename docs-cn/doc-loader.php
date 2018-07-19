<?php ini_set("include_path", "../"); ?>
<?php $subdir=1; ?>
<?php include_once 'partials/docHead.php'; ?>

<p class="title">本篇文档翻译者：channingbreeze</p>

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

<p><span class="keywords">crossOrigin</span> : boolean|string</p>
<p>跨域设置，此值经常被设置为'anonymous'</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-74">line 74</a><p>

<p><span class="keywords">enableParallel</span> : integer</p>
<p>并行加载，默认开启。如果要关闭，要在加载资源前，设置此值为false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-188">line 188</a><p>

<p><span class="keywords">hasLoaded</span> : boolean</p>
<p>如果所有资源都加载完成，此值为true。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-57">line 57</a><p>

<p><span class="keywords">isLoading</span> : boolean</p>
<p>如果正在加载资源，此值为true。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-50">line 50</a><p>

<p><span class="keywords">onFileComplete</span> : <a>Phaser.Signal</a></p>
<p>当一个资源文件(file)加载成功或者加载失败时，触发此信号。它的回调函数将接受以下参数：进度、文件的key、是否成功、总共加载了多少文件、总共要加载多少文件。其中进度是一个1到100的数，表示百分比。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-152">line 152</a><p>

<p><span class="keywords">onFileError</span> : <a>Phaser.Signal</a></p>
<p>当一个资源文件(file)或者资源包(pack)加载失败时，触发此信号。如果是资源文件(file)，它会在onFileComplete之前被触发。如果是资源包(pack)，它会在onPackComplete之前被触发。</p>
<p>参数：(file key, file)</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-163">line 163</a><p>

<p><span class="keywords">onFileStart</span> : <a>Phaser.Signal</a></p>
<p>当一个资源文件开始加载的时候，触发此信号。这个信号触发后，资源文件可能加载成功，也可能加载失败。</p>
<p>参数：(progress, file key, file url)</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-139">line 139</a><p>

<p><span class="keywords">onLoadComplete</span> : <a>Phaser.Signal</a></p>
<p>最后一个资源加载完成或加载失败时，触发此信号。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-118">line 118</a><p>

<p><span class="keywords">onLoadStart</span> : <a>Phaser.Signal</a></p>
<p>加载进度开始计算时，触发此信号。发生于第一个资源文件被请求前，但是在包(pack)描述文件被加载后</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-111">line 111</a><p>

<p><span class="keywords">onPackComplete</span> : <a>Phaser.Signal</a></p>
<p>当一个资源包加载完成或者加载失败时，触发此信号。当一个资源包的清单(manifest)文件加载成功，并且把内容加入加载队列(loader queue)的时候触发此信号。</p>
<p>参数：(pack key, success?, total packs loaded, total packs)</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-129">line 129</a><p>

<p><span class="keywords">path</span> : string</p>
<p>如果设置此值，将在所有相对路径前加上它。比如：</p>
<p>load.path = "images/sprites/";
<p>load.image("ball", "ball.png");</p>
<p>load.image("tree", "level1/oaktree.png");</p>
<p>load.image("boom", "http://server.com/explode.png");</p>
<p>会从images/sprites/ball.png去加载ball，从images/sprites/level1/oaktree.png去加载tree，但是从http://server.com/explode.png去加载boom</p>
<p>path会被加在文件名前，但是在baseURL之后，要以'/'结尾</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-103">line 103</a><p>

<p><span class="keywords">progress</span> : integer</p>
<p>取整后的进度(0-100)</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-2987">line 2987</a><p>

<p><span class="keywords">progressFloat</span> : number</p>
<p>进度(0.0-100.0)。在很多文件动态加载的情况下，进度可能会反而变小。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-2969">line 2969</a><p>

<p><span class="keywords">resetLocked</span> : boolean</p>
<p>如果此值为true，则Loader.reset不起作用。如果你要在进入加载场景前创建一个加载队列，可以用这个。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-43">line 43</a><p>

<p class="title">方法</p>

<p><span class="keywords">addSyncPoint(type, key)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中给指定文件添加一个同步点。对于已经加载过的文件无效。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
	<tr class="td"><td class="params indentS">type</td><td>string</td><td>资源类型(image, audio, xml 等)。</td></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td>资源索引(key)。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-1631">line 1631</a><p>

<p><span class="keywords">atlas(key, textureURL, atlasURL, atlasData, format)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个atlas资源文件。Atlas的素材集可以通过<a>Texture Packer</a>或者<a>Shoebox</a>来制作。如果用Texture Packer，建议勾选Trim sprite names。生成资源的时候不要选择“旋转”。</p>
<p>你可以通过URL来提供一个json文件，也可以通过参数atlasData，传递一个json对象或者一个string。如果你传入string，会被直接JSON.parse，然后被加入到Phaser.Cache。</p>
<p>如果提供的是URL，文件不会马上被加载，而是被放入加载队列。参数key要是唯一的，它会是Phaser.Cache中的键。</p>
<p>可以通过<span class="params">Cache.getImage(key)</span>来获取文件。JSON文件会被自动加载解析。如果你希望控制JSON文件的解析，那就用<span class="params">Loader.text</span>。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有传textureURL参数，Loader会自动创建一个文件名。比如key是player，textureURL没传，Loader会将URL设置为player.png。对于atlasURL来说是一样的，比如key是player，atlasURL会变成player.json。如果你不希望这样，就传参数或者传json对象。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="15%" class="indentS">参数名</th><th width="15%">参数类型</th><th width="15%">是否可选</th><th width="55%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td>资源索引(key)。</td></tr>
	<tr class="td"><td class="params indentS">textureURL</td><td>string</td><td>可选</td><td>texture图像URL。如果是null，会被设置为&lt;key&gt;.png，例如key是alien，URL会被设置为alien.png</td></tr>
	<tr class="td"><td class="params indentS">atlasURL</td><td>string</td><td>可选</td><td>atlas数据文件URL。如果是null，会被设置为&lt;key&gt;.json，例如key是alien，URL会被设置为alien.json</td></tr>
	<tr class="td"><td class="params indentS">atlasData</td><td>object</td><td>可选</td><td>JSON或者XML对象，如果指定了URL，就不需要此参数。</td></tr>
	<tr class="td"><td class="params indentS">format</td><td>number</td><td>可选</td><td>数据格式。可以是 Phaser.Loader.TEXTURE_ATLAS_JSON_ARRAY(默认), Phaser.Loader.TEXTURE_ATLAS_JSON_HASH 或者 Phaser.Loader.TEXTURE_ATLAS_XML_STARLING</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-1500">line 1500</a><p>

<p><span class="keywords">atlasJSONArray(key, textureURL, atlasURL, atlasData)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个atlas资源文件。希望数据是JSON数组。Atlas的素材集可以通过<a>Texture Packer</a>或者<a>Shoebox</a>来制作。如果用Texture Packer，建议勾选Trim sprite names。生成资源的时候不要选择“旋转”。</p>
<p>你可以通过URL来提供一个json文件，也可以通过参数atlasData，传递一个json对象或者一个string。如果你传入string，会被直接JSON.parse，然后被加入到Phaser.Cache。</p>
<p>如果提供的是URL，文件不会马上被加载，而是被放入加载队列。参数key要是唯一的，它会是Phaser.Cache中的键。</p>
<p>可以通过<span class="params">Cache.getImage(key)</span>来获取文件。JSON文件会被自动加载解析。如果你希望控制JSON文件的解析，那就用<span class="params">Loader.text</span>。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有传textureURL参数，Loader会自动创建一个文件名。比如key是player，textureURL没传，Loader会将URL设置为player.png。对于atlasURL来说是一样的，比如key是player，atlasURL会变成player.json。如果你不希望这样，就传参数或者传json对象。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="15%" class="indentS">参数名</th><th width="15%">参数类型</th><th width="15%">是否可选</th><th width="55%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td>资源索引(key)。</td></tr>
	<tr class="td"><td class="params indentS">textureURL</td><td>string</td><td>可选</td><td>texture图像URL。如果是null，会被设置为&lt;key&gt;.png，例如key是alien，URL会被设置为alien.png</td></tr>
	<tr class="td"><td class="params indentS">atlasURL</td><td>string</td><td>可选</td><td>atlas数据文件URL。如果是null，会被设置为&lt;key&gt;.json，例如key是alien，URL会被设置为alien.json</td></tr>
	<tr class="td"><td class="params indentS">atlasData</td><td>object</td><td>可选</td><td>JSON或者XML对象，如果指定了URL，就不需要此参数。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-1354">line 1354</a><p>

<p><span class="keywords">atlasJSONHash(key, textureURL, atlasURL, atlasData)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个atlas资源文件。希望数据是JSON对象。Atlas的素材集可以通过<a>Texture Packer</a>或者<a>Shoebox</a>来制作。如果用Texture Packer，建议勾选Trim sprite names。生成资源的时候不要选择“旋转”。</p>
<p>你可以通过URL来提供一个json文件，也可以通过参数atlasData，传递一个json对象或者一个string。如果你传入string，会被直接JSON.parse，然后被加入到Phaser.Cache。</p>
<p>如果提供的是URL，文件不会马上被加载，而是被放入加载队列。参数key要是唯一的，它会是Phaser.Cache中的键。</p>
<p>可以通过<span class="params">Cache.getImage(key)</span>来获取文件。JSON文件会被自动加载解析。如果你希望控制JSON文件的解析，那就用<span class="params">Loader.text</span>。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有传textureURL参数，Loader会自动创建一个文件名。比如key是player，textureURL没传，Loader会将URL设置为player.png。对于atlasURL来说是一样的，比如key是player，atlasURL会变成player.json。如果你不希望这样，就传参数或者传json对象。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="15%" class="indentS">参数名</th><th width="15%">参数类型</th><th width="15%">是否可选</th><th width="55%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td>资源索引(key)。</td></tr>
	<tr class="td"><td class="params indentS">textureURL</td><td>string</td><td>可选</td><td>texture图像URL。如果是null，会被设置为&lt;key&gt;.png，例如key是alien，URL会被设置为alien.png</td></tr>
	<tr class="td"><td class="params indentS">atlasURL</td><td>string</td><td>可选</td><td>atlas数据文件URL。如果是null，会被设置为&lt;key&gt;.json，例如key是alien，URL会被设置为alien.json</td></tr>
	<tr class="td"><td class="params indentS">atlasData</td><td>object</td><td>可选</td><td>JSON或者XML对象，如果指定了URL，就不需要此参数。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-1400">line 1400</a><p>

<p><span class="keywords">atlasXML(key, textureURL, atlasURL, atlasData)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个atlas资源文件。希望数据是XML格式。Atlas的素材集可以通过<a>Texture Packer</a>或者<a>Shoebox</a>来制作。如果用Texture Packer，建议勾选Trim sprite names。生成资源的时候不要选择“旋转”。</p>
<p>你可以通过URL来提供一个json文件，也可以通过参数atlasData，传递一个json对象或者一个string。如果你传入string，会被直接JSON.parse，然后被加入到Phaser.Cache。</p>
<p>如果提供的是URL，文件不会马上被加载，而是被放入加载队列。参数key要是唯一的，它会是Phaser.Cache中的键。</p>
<p>可以通过<span class="params">Cache.getImage(key)</span>来获取文件。JSON文件会被自动加载解析。如果你希望控制JSON文件的解析，那就用<span class="params">Loader.text</span>。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有传textureURL参数，Loader会自动创建一个文件名。比如key是player，textureURL没传，Loader会将URL设置为player.png。对于atlasURL来说是一样的，比如key是player，atlasURL会变成player.json。如果你不希望这样，就传参数或者传json对象。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="15%" class="indentS">参数名</th><th width="15%">参数类型</th><th width="15%">是否可选</th><th width="55%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td>资源索引(key)。</td></tr>
	<tr class="td"><td class="params indentS">textureURL</td><td>string</td><td>可选</td><td>texture图像URL。如果是null，会被设置为&lt;key&gt;.png，例如key是alien，URL会被设置为alien.png</td></tr>
	<tr class="td"><td class="params indentS">atlasURL</td><td>string</td><td>可选</td><td>atlas数据文件URL。如果是null，会被设置为&lt;key&gt;.json，例如key是alien，URL会被设置为alien.json</td></tr>
	<tr class="td"><td class="params indentS">atlasData</td><td>object</td><td>可选</td><td>JSON或者XML对象，如果指定了URL，就不需要此参数。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-1446">line 1446</a><p>

<p><span class="keywords">audio(key, urls, autoDecode)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个音频文件。调用这个方法之后，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>可以通过<span class="params">Cache.getSound(key)</span>来获取文件。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>移动端请注意：有一些设备(如ipad2,ipad mini)不能播放48000Hz的音频，会导致音频播放系统奔溃，解决方案是使用低频的音频，比如44100Hz。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>音频文件的键值。</td></tr>
	<tr class="td"><td class="params indentS">urls</td><td>string|Array.&lt;string&gt;|Array.&lt;object&gt;</td><td></td><td></td><td>字符串，字符串数组，或者是一个对象数组，数组中的元素都是<span class="params">{uri: .., type: ..}</span>。如果是一个数组，那么第一个设备兼容的URI会被选择。比如：<span class="params">"jump.mp3"</span>，<span class="params">['jump.mp3', 'jump.ogg', 'jump.m4a']</span>或者<span class="params">[{uri: "data:&lt;opus_resource&gt;", type: 'opus'}, 'fallback.mp3']</span>。BLOB和DATA URIs只能用对象数组方式加载。</td></tr>
	<tr class="td"><td class="params indentS">autoDecode</td><td>boolean</td><td>可选</td><td>true</td><td>使用Web Audio时，音频资源可以在加载时解码，也可以在运行时解码。因为音频文件在使用前必须先解码，如果此值为true，那么音频被加载后就会马上解码。音频解码是异步的，但是会严重耗费CPU，尤其是在移动端。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-968">line 968</a><p>

<p><span class="keywords">audiosprite(key, urls, jsonURL, jsonData, autoDecode)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个音频精灵。调用这个方法之后，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>音频精灵是音频文件和JSON配置的组合。JSON格式可以参考<a href="https://github.com/tonistiigi/audiosprite" target="_blank">https://github.com/tonistiigi/audiosprite</a></p>
<p>可以通过<span class="params">Cache.getSoundData(key)</span>来获取文件。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>音频精灵的键值。</td></tr>
	<tr class="td"><td class="params indentS">urls</td><td>Array|string</td><td></td><td></td><td>可以是一个包含音频文件URL的数组，例如：<span class="params">['audiosprite.mp3', 'audiosprite.ogg', 'audiosprite.m4a']</span>，也可以是一个字符串，只表示一个音频文件的URL。</td></tr>
	<tr class="td"><td class="params indentS">jsonURL</td><td>string</td><td>可选</td><td>null</td><td>音频精灵的JSON配置文件的URL。如果你想直接传JSON数据，把这个值设为null。</td></tr>
	<tr class="td"><td class="params indentS">jsonData</td><td>string|object</td><td>可选</td><td>null</td><td>音频精灵的JSON配置对象。如果jsonURL不是null，那么此值会被忽略。</td></tr>
	<tr class="td"><td class="params indentS">autoDecode</td><td>boolean</td><td>可选</td><td>true</td><td>使用Web Audio时，音频资源可以在加载时解码，也可以在运行时解码。因为音频文件在使用前必须先解码，如果此值为true，那么音频被加载后就会马上解码。音频解码是异步的，但是会严重耗费CPU，尤其是在移动端。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-1011">line 1011</a><p>

<p><span class="keywords">binary(key, url, callback, callbackContext)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个二进制文件。调用这个方法之后，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>可以通过<span class="params">Cache.getBinary(key)</span>来获取文件。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有指定URL，加载器会根据key生成一个文件名。例如key是alien，没指定URL，加载器会把URL设置为alien.bin。</p>
<p>它会通过xhr加载，返回类型是arraybuffer。你可以在文件加载完成后设置一个回调来处理数据，回调有两个参数，文件key和文件数据。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>二进制文件的键值。</td></tr>
	<tr class="td"><td class="params indentS">url</td><td>string</td><td>可选</td><td></td><td>二进制文件的URL。如果是undefined或者null，URL会被设置为<span class="params">&lt;key&gt;.bin，例如：key是alien，URL就是alien.bin</span></td></tr>
	<tr class="td"><td class="params indentS">callback</td><td>function</td><td>可选</td><td>(none)</td><td>文件加载完成后的回调函数，你可以在这里对二进制进行进一步处理。</td></tr>
	<tr class="td"><td class="params indentS">callbackContext</td><td>object</td><td>可选</td><td></td><td>回调的上下文，如果没有指定，会用callback自己作为上下文。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-888">line 888</a><p>

<p><span class="keywords">bitmapFont(key, textureURL, atlasURL, atlasData, xSpacing, ySpacing)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个位图字体文件。</p>
<p>Windows下可以用<a href="http://www.angelcode.com/products/bmfont/" target="_blank">BMFont</a>(免费)，mac下可以用<a href="http://www.71squared.com/en/glyphdesigner" target="_blank">Glyph Designer</a>(商业版收费)，或者用web在线的<a href="" target="_blank">Littera</a>(免费)都可以创建位图字体。</p>
<p>你可以通过提供一个XML文件的URL地址，从网络加载字体。或者给atlasData传一个XML对象或者字符串。如果传字符串，它会被Loader.parseXML直接解析成XML对象放入Phaser.Cache。</p>
<p>调用这个方法之后，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>可以通过<span class="params">Cache.getBitmapFont(key)</span>来获取文件。XML文件会在加载后自动解析，如果你需要控制XML的解析时间，你可以用Loader.text，然后自己解析XML文件。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有指定textureURL，加载器会根据key生成一个文件名。例如key是megaFont，没指定URL，加载器会把URL设置为megaFont.png。atlasURL也一样，如果没有指定atlasURL，也没有atlasData，加载器会根据key生成一个atlasURL，例如key是megaFont，则atlasURL是megaFont.xml</p>
<p>如果你不想这样，就提供Url和data。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>位图字体文件的键值。</td></tr>
	<tr class="td"><td class="params indentS">textureURL</td><td>string</td><td></td><td></td><td>位图字体文件的图片的URL。如果是undefined或者null，URL会被设置为<span class="params">&lt;key&gt;.png，例如：key是megaFont，URL就是megaFont.png</span></td></tr>
	<tr class="td"><td class="params indentS">atlasURL</td><td>string</td><td></td><td></td><td>位图字体文件的描述文件的URL。如果是undefined或者null，而且atlasData也是null，URL会被设置为<span class="params">&lt;key&gt;.xml，例如：key是megaFont，URL就是megaFont.xml</span></td></tr>
	<tr class="td"><td class="params indentS">atlasData</td><td>object</td><td>可选</td><td></td><td>位图字体描述，字符串或者XML对象。</td></tr>
	<tr class="td"><td class="params indentS">xSpacing</td><td>number</td><td>可选</td><td>0</td><td>字母间的水平间隙。</td></tr>
	<tr class="td"><td class="params indentS">ySpacing</td><td>number</td><td>可选</td><td>0</td><td>字母间的垂直间隙。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-1263">line 1263</a><p>

<p><span class="keywords">checkKeyExists(type, key)</span> : → {boolean}</p>
<p>检查一个文件/资源是否在加载队列中。</p>
<p>可以用Phaser.Cache来获取一个已经加载的资源，例如：<a>Phaser.Cache#checkImageKey</a></p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
	<tr class="td"><td class="params indentS">type</td><td>string</td><td>资源类型(image, audio, xml 等)。</td></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td>资源索引(key)。</td></tr>
</table>
<p>返回：如果存在返回true，否则返回false。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-367">line 367</a><p>

<p><span class="keywords">getAsset(type, key)</span> : → {any}</p>
<p>获取一个文件/资源。</p>
<p>只有在加载队列中的文件能够被找到。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
	<tr class="td"><td class="params indentS">type</td><td>string</td><td>资源类型(image, audio, xml 等)。</td></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td>资源索引(key)。</td></tr>
</table>
<p>返回：如果找到，返回一个有index和file两个属性的对象，否则返回false。index会经常变化，只能在这个函数被调用后马上使用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-418">line 418</a><p>

<p><span class="keywords">getAssetIndex(type, key)</span> : → {number}</p>
<p>获取一个文件/资源在加载队列中的索引。</p>
<p>只有在加载队列中的文件能够被找到。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="20%" class="indentS">参数名</th><th width="20%">参数类型</th><th width="60%">描述</th></tr>
	<tr class="td"><td class="params indentS">type</td><td>string</td><td>资源类型(image, audio, xml 等)。</td></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td>资源索引(key)。</td></tr>
</table>
<p>返回：如果找到，返回文件/资源在加载队列中的索引，否则返回-1。index会经常变化，只能在这个函数被调用后马上使用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-418">line 418</a><p>

<p><span class="keywords">image(key, url, overwrite)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个图片。调用这个方法之后，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>Phaser可以处理png，jpg，gif等浏览器原生支持的图片。</p>
<p>可以通过<span class="params">Cache.getImage(key)</span>来获取图片。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有指定url，加载器会根据key生成一个文件名。例如key是alien，没指定URL，加载器会把URL设置为alien.png。如果你不想这样，就提供url。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>图片的键值。</td></tr>
	<tr class="td"><td class="params indentS">url</td><td>string</td><td>可选</td><td></td><td>图片的url。如果没设置，url会变成<span class="params">&lt;key&gt;.png</span>，例如key是alien，url会被设置为alien.png</td></tr>
	<tr class="td"><td class="params indentS">overwrite</td><td>boolean</td><td>可选</td><td>false</td><td>如果一个key对应的图片已经存在，该值为true，则新图片覆盖原图片。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-670">line 670</a><p>

<p><span class="keywords">images(key, urls)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一组图片。它相当于对组中每一个image调用Loader.image方法。调用这个方法之后，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>Phaser可以处理png，jpg，gif等浏览器原生支持的图片。</p>
<p>可以通过<span class="params">Cache.getImage(key)</span>来获取图片。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有指定url，加载器会根据key生成一个文件名。例如key是alien，没指定URL，加载器会把URL设置为alien.png。如果你不想这样，就提供url。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">keys</td><td>string</td><td></td><td></td><td>图片的键值组成的数组。</td></tr>
	<tr class="td"><td class="params indentS">urls</td><td>string</td><td>可选</td><td></td><td>图片的url组成的数组。如果没设置，url会变成<span class="params">&lt;key&gt;.png</span>，例如key是alien，url会被设置为alien.png。如果设置，url数组长度要和key数组长度匹配。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-699">line 699</a><p>

<p><span class="keywords">json(key, url, overwrite)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个JSON文件。调用这个方法之后，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>可以通过<span class="params">Cache.getJSON(key)</span>来获取JSON文件。JSON文件被加载后就会被解析。如果你想控制JSON的解析，就用<span class="params">Loader.text</span>来加载文件，然后自己parseJSON。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有指定url，加载器会根据key生成一个文件名。例如key是alien，没指定URL，加载器会把URL设置为alien.json。如果你不想这样，就提供url。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>JSON文件的键值。</td></tr>
	<tr class="td"><td class="params indentS">url</td><td>string</td><td>可选</td><td></td><td>JSON文件的url。如果没设置，url会变成<span class="params">&lt;key&gt;.json</span>，例如key是alien，url会被设置为alien.json</td></tr>
	<tr class="td"><td class="params indentS">overwrite</td><td>boolean</td><td>可选</td><td>false</td><td>如果一个key对应的JSON文件已经存在，该值为true，则新文件覆盖原文件。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-771">line 771</a><p>

<p><span class="keywords">pack(key, url, data, callbackContext)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个打包文件。一个打包文件是一个JSON文件，包含一系列要被加载的资源，可以查看<a href="../example-detail-363.html" target="_blank">示例</a>。打包文件会被放在队列前面。key必须唯一。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>打包文件的键值。</td></tr>
	<tr class="td"><td class="params indentS">url</td><td>string</td><td>可选</td><td></td><td>打包文件的url。如果想直接通过JSON对象来设定打包文件，此值传null。</td></tr>
	<tr class="td"><td class="params indentS">data</td><td>object</td><td>可选</td><td></td><td>打包文件的JSON数据。用这个参数直接传递一个JSON对象。</td></tr>
	<tr class="td"><td class="params indentS">callbackContext</td><td>object</td><td>可选</td><td>(loader)</td><td>一些加载资源的过程，需要给它们的回调传递上下文，例如Binary和Script。在这里传递上下文。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-590">line 590</a><p>

<p><span class="keywords">physics(key, url, data, format)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个物理数据文件。数据必须是<span class="params">Lime + Corona</span>的JSON格式。<a href="https://www.codeandweb.com/" target="_blank">Physics Editor</a>默认可以导出这种格式。</p>
<p>你可以从URL去加载这个文件，也可以直接传递一个JSON对象。如果你传的是一个string，会自动调用JSON.parse来解析它。</p>
<p>调用这个方法之后，如果传递URL，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>可以通过<span class="params">Cache.getJSON(key)</span>来获取JSON文件。JSON文件被加载后就会被解析。如果你想控制JSON的解析，就用<span class="params">Loader.text</span>来加载文件，然后自己parseJSON。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有指定url，加载器会根据key生成一个文件名。例如key是alien，没指定URL，加载器会把URL设置为alien.json。如果你不想这样，就提供url。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>物理数据文件的键值。</td></tr>
	<tr class="td"><td class="params indentS">url</td><td>string</td><td>可选</td><td></td><td>物理数据文件的url。如果传null或undefined，也没有设置参数data，url会被设置为<span class="params">&lt;key&gt;.json</span>，比如，key是alien，url会被设置为alien.json。</td></tr>
	<tr class="td"><td class="params indentS">data</td><td>object|string</td><td>可选</td><td></td><td>JSON对象，用来指定物理数据。如果设置了此值，参数url会被忽略。</td></tr>
	<tr class="td"><td class="params indentS">format</td><td>string</td><td>可选</td><td>Phaser.Physics.LIME_CORONA_JSON</td><td>物理数据的格式。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-1202">line 1202</a><p>

<p><span class="keywords">script(key, url, callback, callbackContext)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个javascript文件。</p>
<p>调用这个方法之后，如果传递URL，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有指定url，加载器会根据key生成一个文件名。例如key是alien，没指定URL，加载器会把URL设置为alien.js。如果你不想这样，就提供url。</p>
<p>成功加载后，js会变成一个script标签，马上被执行，所以要小心！</p>
<p>当script标签被创建之后，可以指定一个callback，callback要返回相关数据。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>脚本文件的键值。</td></tr>
	<tr class="td"><td class="params indentS">url</td><td>string</td><td>可选</td><td></td><td>脚本文件的url。如果传null或undefined，url会被设置为<span class="params">&lt;key&gt;.js</span>，比如，key是alien，url会被设置为alien.js。</td></tr>
	<tr class="td"><td class="params indentS">callback</td><td>function</td><td>可选</td><td>(none)</td><td>script标签被创建之后，可以指定一个回调函数。你可以用这招做一些额外事情。</td></tr>
	<tr class="td"><td class="params indentS">callbackContext</td><td>object</td><td>可选</td><td>(loader)</td><td>回调函数的上下文，如果没指定，就是Phaser.Loader。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-853">line 853</a><p>

<p><span class="keywords">setPreloadSprite(sprite, direction)</span></p>
<p>把一个精灵设置为加载精灵。</p>
<p>加载精灵会根据加载的百分比，动态裁剪自己的宽度和高度，这样做Loading进度条就很简单了。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">sprite</td><td>Phaser.Sprite|Phaser.Image</td><td></td><td></td><td>在加载时会根据进度被裁剪的精灵。</td></tr>
	<tr class="td"><td class="params indentS">direction</td><td>number</td><td>可选</td><td>0</td><td>0--水平，1--垂直。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-315">line 315</a><p>

<p><span class="keywords">shader(key, url, overwrite)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个像素shader文件。</p>
<p>调用这个方法之后，如果传递URL，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>可以通过<span class="params">Cache.getShader(key)</span>来获取文件。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有指定url，加载器会根据key生成一个文件名。例如key是blur，没指定URL，加载器会把URL设置为blur.frag。如果你不想这样，就提供url。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>shader文件的键值。</td></tr>
	<tr class="td"><td class="params indentS">url</td><td>string</td><td>可选</td><td></td><td>shader文件的url。如果传null或undefined，url会被设置为<span class="params">&lt;key&gt;.frag</span>，比如，key是blur，url会被设置为blur.frag。</td></tr>
	<tr class="td"><td class="params indentS">overwrite</td><td>boolean</td><td>可选</td><td>false</td><td>如果一个key对应的文件已经存在，该值为true，则新文件覆盖原文件。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-799">line 799</a><p>

<p><span class="keywords">spritesheet(key, url, frameWidth, frameHeight, frameMax, margin, spacing)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个精灵序列文件。</p>
<p>调用这个方法之后，如果传递URL，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>专业术语解释：spritesheet是一个图片，通常包含一个动画的所有帧，这些帧有着相同的尺寸，按照顺序排列着。比如帧大小是32x32，那么在spritesheet中的每一帧，都是32x32。在Phaser之外的其他引擎里，spritesheet可能指的是atlas纹理。altas纹理就是把图片打包在一起，不管是什么尺寸的图片都可以。Texture Packer、Flash CC或者Shoebox都可以生成atlas纹理。如果你想加载atlas纹理，用<span class="params">Loader.atlas</span>。</p>
<p>可以通过<span class="params">Cache.getImage(key)</span>来获取文件。精灵序列文件和其他图片一样。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有指定url，加载器会根据key生成一个文件名。例如key是alien，没指定URL，加载器会把URL设置为alien.png。如果你不想这样，就提供url。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>spritesheet文件的键值。</td></tr>
	<tr class="td"><td class="params indentS">url</td><td>string</td><td></td><td></td><td>spritesheet文件的url。如果传null或undefined，url会被设置为<span class="params">&lt;key&gt;.png</span>，比如，key是alien，url会被设置为alien.png。</td></tr>
	<tr class="td"><td class="params indentS">frameWidth</td><td>number</td><td></td><td></td><td>spritesheet中一帧的宽度，像素为单位。</td></tr>
	<tr class="td"><td class="params indentS">frameHeight</td><td>number</td><td></td><td></td><td>spritesheet中一帧的高度，像素为单位。</td></tr>
	<tr class="td"><td class="params indentS">frameMax</td><td>number</td><td>可选</td><td>-1</td><td>spritesheet中有多少帧，如果不指定，整张图片都被当作spritesheet。</td></tr>
	<tr class="td"><td class="params indentS">margin</td><td>number</td><td>可选</td><td>0</td><td>如果spritesheet的帧之间有margin，在这里指定。</td></tr>
	<tr class="td"><td class="params indentS">spacing</td><td>number</td><td>可选</td><td>0</td><td>如果spritesheet的帧之间有spacing，在这里指定。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-926">line 926</a><p>

<p><span class="keywords">start()</span></p>
<p>开始加载资源。通常你不需要手动调用它，StateManager会调用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-1691">line 1691</a><p>

<p><span class="keywords">text(key, url, overwrite)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个文本文件。</p>
<p>调用这个方法之后，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>可以通过<span class="params">Cache.getText(key)</span>来获取文件。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有指定url，加载器会根据key生成一个文件名。例如key是alien，没指定URL，加载器会把URL设置为alien.txt。如果你不想这样，就提供url。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>文本文件的键值。</td></tr>
	<tr class="td"><td class="params indentS">url</td><td>string</td><td>可选</td><td></td><td>文本文件的url。如果传null或undefined，url会被设置为<span class="params">&lt;key&gt;.txt</span>，比如，key是alien，url会被设置为alien.txt。</td></tr>
	<tr class="td"><td class="params indentS">overwrite</td><td>boolean</td><td>可选</td><td>false</td><td>如果一个key对应的文件已经存在，该值为true，则新文件覆盖原文件。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-744">line 744</a><p>

<p><span class="keywords">tilemap(key, url, data, format)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个瓦片地图。</p>
<p>你可以通过URL来提供一个json文件，也可以通过参数data，传递一个json对象或者一个string。如果你传入string，会被直接JSON.parse，然后被加入到Phaser.Cache。</p>
<p>如果提供的是URL，文件不会马上被加载，而是被放入加载队列。参数key要是唯一的，它会是Phaser.Cache中的键。</p>
<p>可以通过<span class="params">Cache.getTilemapData(key)</span>来获取文件。JSON文件会被自动加载解析。如果你希望控制JSON文件的解析，那就用<span class="params">Loader.text</span>。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有传url参数，Loader会自动创建一个文件名。比如key是level1，url没传，Loader会将URL设置为level1.json。如果你把format设置为Tilemap.CSV，那url会被设置为level1.csv。如果你不希望这样，就传参数或者传json对象。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>资源索引(key)。</td></tr>
	<tr class="td"><td class="params indentS">url</td><td>string</td><td>可选</td><td></td><td>瓦片地图url。如果是null，会被设置为&lt;key&gt;.json，例如key是level1，URL会被设置为level1.json</td></tr>
	<tr class="td"><td class="params indentS">data</td><td>object|string</td><td>可选</td><td></td><td>可选的JSON对象，如果指定该值，url参数就失效。</td></tr>
	<tr class="td"><td class="params indentS">format</td><td>number</td><td>可选</td><td>Phaser.Tilemap.CSV</td><td>数据格式。可以是 Phaser.Tilemap.CSV或者Phaser.Tilemap.TILED_JSON</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-1125">line 1125</a><p>

<p><span class="keywords">video(key, urls, loadEvent, asBlob)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个视频文件。调用这个方法之后，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>可以通过<span class="params">Cache.getVideo(key)</span>来获取文件。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>你没有必要去预先加载一个视频文件，详情可查看<span class="params">Video.createVideoFromURL</span>。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>视频文件的键值。</td></tr>
	<tr class="td"><td class="params indentS">urls</td><td>string|Array.&lt;string&gt;|Array.&lt;object&gt;</td><td></td><td></td><td>字符串，字符串数组，或者是一个对象数组，数组中的元素都是<span class="params">{uri: .., type: ..}</span>。如果是一个数组，那么第一个设备兼容的URI会被选择。比如：<span class="params">"boom.mp4"</span>，<span class="params">['boom.mp4', 'boom.ogg', 'boom.webm']</span>或者<span class="params">[{uri: "data:&lt;opus_resource&gt;", type: 'opus'}, 'fallback.mp4']</span>。BLOB和DATA URIs只能用对象数组方式加载。</td></tr>
	<tr class="td"><td class="params indentS">loadEvent</td><td>string</td><td>可选</td><td>'canplaythrough'</td><td>加载视频源时，当收到loadEvent设定的事件时，认为加载结束。默认的canplaythrough事件是在视频加载得足够多，并且带宽足够大，使得视频可以被播放完整的时候触发。canplay事件是在视频加载到可以播放的时候触发，但是不一定能够播放完整。loadeddata事件仅仅保证视频的元数据和第一帧已经下载完毕。火狐默认事件是loadeddata，其他是canplaythrough。</td></tr>
	<tr class="td"><td class="params indentS">asBlob</td><td>boolean</td><td>可选</td><td>false</td><td>视频文件可以通过video标签的src属性加载，或者通过xhr请求，作为二进制文件保存在内存中(IE9和Android2不支持)。如果你需要同时在几个精灵中播放不同的视频文件，那就用二进制的方式，设该值为true。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-1071">line 1071</a><p>

<p><span class="keywords">withSyncPoints(callback, callbackContext)</span> : → {<a>Phaser.Loader</a>}</p>
<p>给通过回调添加的资源/文件添加一个同步点。</p>
<p>一个同步点可以确保一个资源加载完成后，它之后的资源才开始加载。一个被标志为同步点的资源，不需要等待其他资源的加载(除非其他资源也是同步点)。一些资源，比如pack，可以在同步点前后被加载，只要它没有结束加载过程。(说实话不太懂这段，啥意思？)</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">callback</td><td>function</td><td></td><td></td><td>回调有一个参数：loader。</td></tr>
	<tr class="td"><td class="params indentS">callbackContext</td><td>object</td><td>可选</td><td>loader</td><td>回调上下文</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-1605">line 1605</a><p>

<p><span class="keywords">xml(key, url, overwrite)</span> : → {<a>Phaser.Loader</a>}</p>
<p>在加载队列中添加一个XML文件。调用这个方法之后，文件不会马上加载，只是放到了加载队列。key必须唯一。</p>
<p>可以通过<span class="params">Cache.getXML(key)</span>来获取文件。</p>
<p>URL可以是相对路径，也可以是绝对路径。如果是相对路径，<span class="params">Loader.baseURL</span>和<span class="params">Loader.path</span>会加在它前面。</p>
<p>如果没有传url参数，Loader会自动创建一个文件名。比如key是alien，url没传，Loader会将URL设置为alien.xml。如果你不希望这样，就传url参数。</p>
<p class="subTitle">参数：</p>
<table cellspacing="0">
	<tr align="left"><th width="12%" class="indentS">参数名</th><th width="12%">参数类型</th><th width="12%">是否可选</th><th width="12%">默认值</th><th width="42%">描述</th></tr>
	<tr class="td"><td class="params indentS">key</td><td>string</td><td></td><td></td><td>XML文件的键值。</td></tr>
	<tr class="td"><td class="params indentS">url</td><td>string</td><td>可选</td><td></td><td>XML文件的url。如果传null或undefined，url会被设置为<span class="params">&lt;key&gt;.xml</span>，比如，key是alien，url会被设置为alien.xml。</td></tr>
	<tr class="td"><td class="params indentS">overwrite</td><td>boolean</td><td>可选</td><td>false</td><td>如果一个key对应的文件已经存在，该值为true，则新文件覆盖原文件。</td></tr>
</table>
<p>返回：Phaser.Loader，加载器引用。</p>
<p class="source indentS">源码 - <a href="../docs/src_loader_Loader.js.html">loader/Loader.js</a>, <a href="../docs/src_loader_Loader.js.html#sunlight-1-line-826">line 826</a><p>

<?php include_once 'partials/docFoot.php'; ?>
