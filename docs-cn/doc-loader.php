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






<?php include_once 'partials/docFoot.php'; ?>		