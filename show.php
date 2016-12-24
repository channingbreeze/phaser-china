<!DOCTYPE html>
<head>
	<title>Phaser小站</title>
	<meta charset="utf-8" />
	<meta name="Keywords" content="Phaser，Phaser小站，HTML5，游戏，HTML5游戏，游戏引擎，游戏框架，HTML5游戏引擎，HTML5游戏框架" />
	<meta name="Description" content="Phaser小站是一个为phaser而生的网站，以宣传和发展Phaser为使命。本站提供一切关于Phaser的案例、源码、教程、教学视频。" />
	<link href="css/global.css" rel="stylesheet" />
	<link href="css/common.css" rel="stylesheet" />
	<link href="css/show.css" rel="stylesheet" />
	<script src="js/lib/jquery.js"></script>
	<script src="js/handleLogin.js"></script>
	<?php include_once 'partials/statistics.php';?>
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	<div class="middleDiv">
		<div class="source">以下游戏源码在：<a href="https://github.com/channingbreeze/games" target="_blank">https://github.com/channingbreeze/games</a></div>
		<ul class="shows" id="shows">
			<li data-url="http://game.webxinxin.com/learn/exam8.html">
				<div class="front">
					<img src="images/show/show1.jpg"/>
				</div>
				<div class="back">
					<div class="name">Phaser官方入门案例</div>
					<div class="author">作者：Phaser官方</div>
					<div class="desc">简介：Phaser官方的入门案例，使用到了Phaser中的很多常用的功能，值得好好研究！</div>
					<div class="play">玩法：使用方向键控制小人，收集星星</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/flappybird/">
				<div class="front">
					<img src="images/show/show2.jpg"/>
				</div>
				<div class="back">
					<div class="name">Flappybird</div>
					<div class="author">作者：来自网络</div>
					<div class="desc">简介：Phaser实现的flappybird经典游戏！</div>
					<div class="play">玩法：鼠标或手指点击屏幕，控制小鸟往前飞，加油233</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/plane/">
				<div class="front">
					<img src="images/show/show3.jpg"/>
				</div>
				<div class="back">
					<div class="name">打飞机</div>
					<div class="author">作者：channingbreeze</div>
					<div class="desc">简介：Phaser实现的简版打飞机小游戏，可以在手机上玩哦！</div>
					<div class="play">玩法：鼠标或手指拖动飞机移动，还可以接子弹666</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/?game=weiduan&id=1">
				<div class="front">
					<img src="images/show/show4.jpg"/>
				</div>
				<div class="back">
					<div class="name">高仿微信对话</div>
					<div class="author">作者：channingbreeze</div>
					<div class="desc">简介：高仿微信的功能，get这个技能，你就能做很多事情！</div>
					<div class="play">玩法：打开看，然后，笑就行了233</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/fruit">
				<div class="front">
					<img src="images/show/show5.jpg"/>
				</div>
				<div class="back">
					<div class="name">水果忍者</div>
					<div class="author">作者：channingbreeze</div>
					<div class="desc">简介：实现水果忍者的基本功能，可扩展！</div>
					<div class="play">玩法：用鼠标切水果，别漏了，也别切到炸弹</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/2048">
				<div class="front">
					<img src="images/show/show6.jpg"/>
				</div>
				<div class="back">
					<div class="name">2048</div>
					<div class="author">作者：channingbreeze</div>
					<div class="desc">简介：2048标准版，可扩展</div>
					<div class="play">玩法：可用鼠标滑动，也可用方向键</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/candy">
				<div class="front">
					<img src="images/show/show7.jpg"/>
				</div>
				<div class="back">
					<div class="name">怪物要糖果</div>
					<div class="author">作者：老外</div>
					<div class="desc">简介：来自老外的一个小demo</div>
					<div class="play">玩法：鼠标点击糖果，不要点中炸弹哦！</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/stardog">
				<div class="front">
					<img src="images/show/show8.jpg"/>
				</div>
				<div class="back">
					<div class="name">星星狗</div>
					<div class="author">作者：han</div>
					<div class="desc">简介：网友han提供的加强版接星星游戏</div>
					<div class="play">玩法：不要碰到狗狗，吃医药包可以暴走哦！</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/run">
				<div class="front">
					<img src="images/show/show9.jpg"/>
				</div>
				<div class="back">
					<div class="name">跑男</div>
					<div class="author">作者：freeMan</div>
					<div class="desc">简介：网友freeMan提供的跑男小游戏</div>
					<div class="play">玩法：鼠标点击左右侧可以切换跑道，点击上侧可以跳起来！60秒钟，看谁分最高！</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/blockdown">
				<div class="front">
					<img src="images/show/show10.jpg"/>
				</div>
				<div class="back">
					<div class="name">掉块儿</div>
					<div class="author">作者：HaiboLee</div>
					<div class="desc">简介：网友HaiboLee提供的掉块儿小游戏</div>
					<div class="play">玩法：左右键控制左右，向上键可以试试，不要让方块掉出平台。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/breaklovers">
				<div class="front">
					<img src="images/show/show11.jpg"/>
				</div>
				<div class="back">
					<div class="name">拆散小情侣</div>
					<div class="author">作者：mcdyzg</div>
					<div class="desc">简介：网友mcdyzg提供，适合在情人节玩</div>
					<div class="play">玩法：疯狂点击，让小情侣变成单身狗。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/puzzle">
				<div class="front">
					<img src="images/show/show12.jpg"/>
				</div>
				<div class="back">
					<div class="name">拼图</div>
					<div class="author">作者：mcdyzg</div>
					<div class="desc">简介：网友mcdyzg提供，可以用在微信运营</div>
					<div class="play">玩法：拖拽图片交换，15秒内，完成拼图。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/hitball">
				<div class="front">
					<img src="images/show/show13.jpg"/>
				</div>
				<div class="back">
					<div class="name">弹珠儿</div>
					<div class="author">作者：han</div>
					<div class="desc">简介：网友han提供，很有意思的游戏</div>
					<div class="play">玩法：点击屏幕，去碰黄色的小球。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/quitsmoke">
				<div class="front">
					<img src="images/show/show14.jpg"/>
				</div>
				<div class="back">
					<div class="name">别抽烟</div>
					<div class="author">作者：hexcola</div>
					<div class="desc">简介：网友hexcola提供，戒烟公益游戏</div>
					<div class="play">玩法：移动鼠标，别让球球掉下去。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/circlepath">
				<div class="front">
					<img src="images/show/show15.jpg"/>
				</div>
				<div class="back">
					<div class="name">往上爬</div>
					<div class="author">作者：老外</div>
					<div class="desc">简介：网友ladeng666博客</div>
					<div class="play">玩法：顺着路径往上爬。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/downfloor">
				<div class="front">
					<img src="images/show/show16.jpg"/>
				</div>
				<div class="back">
					<div class="name">下楼</div>
					<div class="author">作者：老外</div>
					<div class="desc">简介：从老外网站扒来的</div>
					<div class="play">玩法：找个位置放小人，不要碰到左右边。</div>
				</div>
			</li>
		</ul>
	</div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/show.js"></script>
</body>