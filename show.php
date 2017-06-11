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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show1.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show2.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show3.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show4.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show5.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show6.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show7.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show8.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show9.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show10.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show11.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show12.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show13.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show14.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show15.jpg"/>
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
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show16.jpg"/>
				</div>
				<div class="back">
					<div class="name">下楼</div>
					<div class="author">作者：老外</div>
					<div class="desc">简介：从老外网站扒来的</div>
					<div class="play">玩法：找个位置放小人，不要碰到左右边。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/rpgdemo">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show17.jpg"/>
				</div>
				<div class="back">
					<div class="name">RPG小游戏</div>
					<div class="author">作者：Aleaf</div>
					<div class="desc">简介：张有忌成长之路</div>
					<div class="play">玩法：和村长谈话领取打狼人任务，打完狼人，会村长谈话得到铁剑，再跟愤青谈话，得到打牛怪任务，打完后他给你倚天剑，Over。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/kupao">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show18.jpg"/>
				</div>
				<div class="back">
					<div class="name">酷跑</div>
					<div class="author">作者：coer</div>
					<div class="desc">简介：蜘蛛侠上下跳</div>
					<div class="play">玩法：点击屏幕，上下跳，别被淘汰。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/kite">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show19.jpg"/>
				</div>
				<div class="back">
					<div class="name">风筝</div>
					<div class="author">作者：coer</div>
					<div class="desc">简介：卡通的风筝游戏</div>
					<div class="play">玩法：拖动风筝，别挂到树叶上。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/nail">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show20.jpg"/>
				</div>
				<div class="back">
					<div class="name">别碰钉子</div>
					<div class="author">作者：coer</div>
					<div class="desc">简介：小鸟别碰钉子</div>
					<div class="play">玩法：点击控制小鸟，别碰钉子。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/fubag">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show21.jpg"/>
				</div>
				<div class="back">
					<div class="name">接福袋</div>
					<div class="author">作者：coer</div>
					<div class="desc">简介：新春送福</div>
					<div class="play">玩法：鼠标控制小人，接福袋。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/bike">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show22.jpg"/>
				</div>
				<div class="back">
					<div class="name">单车骑行</div>
					<div class="author">作者：coer</div>
					<div class="desc">简介：骑自行车小游戏</div>
					<div class="play">玩法：点击屏幕就是跳，可以二连跳。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/fctank">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show23.jpg"/>
				</div>
				<div class="back">
					<div class="name">FC坦克大战</div>
					<div class="author">作者：channingbreeze</div>
					<div class="desc">简介：仿FC坦克大战</div>
					<div class="play">玩法：玩家1，上下左右，空格；玩家2，WSAD，J。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/tank">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show24.jpg"/>
				</div>
				<div class="back">
					<div class="name">坦克大战</div>
					<div class="author">作者：Aleaf</div>
					<div class="desc">简介：坦克大战</div>
					<div class="play">玩法：上下左右，空格，去消灭坦克吧。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/getcockscomb">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show25.jpg"/>
				</div>
				<div class="back">
					<div class="name">接鸡冠</div>
					<div class="author">作者：codingbat</div>
					<div class="desc">简介：小海豹接鸡冠</div>
					<div class="play">玩法：鼠标移动小海豹，接住鸡冠，躲开炸弹。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/marathon">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show26.jpg"/>
				</div>
				<div class="back">
					<div class="name">社区跑</div>
					<div class="author">作者：MicroJes</div>
					<div class="desc">简介：一只萌恐恐在跑步</div>
					<div class="play">玩法：看着它跑，捡箱子，然后就到终点了。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/collectstar">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show27.jpg"/>
				</div>
				<div class="back">
					<div class="name">接星星</div>
					<div class="author">作者：MngYou</div>
					<div class="desc">简介：官方案例升级版</div>
					<div class="play">玩法：碰到小狗掉血，捡到血包急加血，接完所有星星，再接钻石过关。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/donottapwhitetile">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show28.jpg"/>
				</div>
				<div class="back">
					<div class="name">别踩白块儿</div>
					<div class="author">作者：MngYou</div>
					<div class="desc">简介：别踩白块儿</div>
					<div class="play">玩法：小心不要点到白块儿，把黑块儿变绿。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/dragandmatch">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show29.jpg"/>
				</div>
				<div class="back">
					<div class="name">拖一拖</div>
					<div class="author">来自Phaser社区</div>
					<div class="desc">简介：拖动彩色方块</div>
					<div class="play">玩法：横竖拖动彩色方块，让横或数三个及以上相同颜色连在一起即可消除。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/fifty">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show30.jpg"/>
				</div>
				<div class="back">
					<div class="name">看谁能坚持50秒</div>
					<div class="author">作者：MngYou</div>
					<div class="desc">简介：反应力游戏</div>
					<div class="play">玩法：拖动红色方块，不要碰到蓝色方块和边界。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/findpath">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show31.jpg"/>
				</div>
				<div class="back">
					<div class="name">自动寻路Demo</div>
					<div class="author">作者：Aleaf</div>
					<div class="desc">简介：实现自动寻路</div>
					<div class="play">玩法：鼠标点击地图，小人会自己走过去。</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/hearthstone">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show32.jpg"/>
				</div>
				<div class="back">
					<div class="name">炉石传说</div>
					<div class="author">作者：SangLiang</div>
					<div class="desc">简介：炉石传说Phaser版</div>
					<div class="play">玩法：会玩炉石传说吗？不会玩百度下</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/ballgame">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show33.jpg"/>
				</div>
				<div class="back">
					<div class="name">撞球</div>
					<div class="author">作者：咸蛋变超人</div>
					<div class="desc">简介：超简易撞球游戏</div>
					<div class="play">玩法：不要让黄球到自己这边</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/shoot">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show34.jpg"/>
				</div>
				<div class="back">
					<div class="name">射击大战</div>
					<div class="author">作者：admin</div>
					<div class="desc">简介：简单的射击游戏</div>
					<div class="play">玩法：点击鼠标射击，不要让敌机碰到你，还可以按空格键，表示炸弹</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/susliks">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show35.jpg"/>
				</div>
				<div class="back">
					<div class="name">打地鼠</div>
					<div class="author">作者：admin</div>
					<div class="desc">简介：打地鼠游戏</div>
					<div class="play">玩法：疯狂点击地鼠，看看30秒内你能打多少个</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/pixelstar">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show36.jpg"/>
				</div>
				<div class="back">
					<div class="name">像素接星星</div>
					<div class="author">作者：MngYou</div>
					<div class="desc">简介：纯像素化的游戏</div>
					<div class="play">玩法：本游戏没有任何图片资源，接所有星星，不要碰到狗和地刺，3条命</div>
				</div>
			</li>
			<li data-url="http://game.webxinxin.com/memory">
				<div class="front">
					<img src="http://7xjv6k.com1.z0.glb.clouddn.com/show37.jpg"/>
				</div>
				<div class="back">
					<div class="name">记忆翻牌游戏</div>
					<div class="author">作者：MngYou</div>
					<div class="desc">简介：考验记忆的小游戏</div>
					<div class="play">玩法：翻牌，两两配对，30秒内你能完成吗？</div>
				</div>
			</li>
		</ul>
	</div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/show.js"></script>
</body>