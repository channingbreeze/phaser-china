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
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	<div class="middleDiv">
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
		</ul>
	</div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/show.js"></script>
</body>