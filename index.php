<?php 

require_once dirname ( __FILE__ ) . '/services/TutorialService.class.php';

$tutorialService = new TutorialService();

$tutorials = $tutorialService->selectTutorialsLastN(3);

?>
<!DOCTYPE html>
<head>
	<title>Phaser小站</title>
	<meta charset="utf-8" />
	<meta name="Keywords" content="Phaser，Phaser小站，HTML5，游戏，HTML5游戏，游戏引擎，游戏框架，HTML5游戏引擎，HTML5游戏框架" />
	<meta name="Description" content="Phaser小站是一个为phaser而生的网站，以宣传和发展Phaser为使命。本站提供一切关于Phaser的案例、源码、教程、教学视频。" />
	<meta name="baidu-site-verification" content="W0Gy0sAtiL" />
	<link href="css/global.css" rel="stylesheet" />
	<link href="css/common.css" rel="stylesheet" />
	<link href="css/index.css" rel="stylesheet" />
	<script src="js/lib/jquery.js"></script>
	<script src="js/lib/unslider.js"></script>
	<?php include_once 'partials/statistics.php';?>
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	<div class="banner">
		<ul>
			<li class="i1 hand" id="downloadExample">
				<div class="inner">
					<img src="images/banner/banner1.jpg" />
				</div>
			</li>
			<li class="i2">
				<div class="inner">
					<img src="images/banner/banner2.jpg" />
				</div>
			</li>
			<li class="i3">
				<div class="inner">
					<img src="images/banner/banner3.jpg" />
				</div>
			</li>
		</ul>
	</div>
	<div class="middleDiv">
		<ul class="introduce" id="circles">
			<li data-href="example.html">
				<div class="front circle f1">
					<img class="examIcon" src="images/icons/exam.jpg" />
					<div class="chinese">实例</div>
					<div class="english">Example</div>
				</div>
				<div class="back circle b1">
					<p class="p1">每一个知识点一个实例</p>
					<p class="p2">指哪打哪，逐个击破</p>
					<div class="icon i1"></div>
				</div>
			</li>
			<li data-href="tutorial.html">
				<div class="front circle f2">
					<img src="images/icons/tutorial.jpg" />
					<div class="chinese">教程</div>
					<div class="english">Tutorial</div>
				</div>
				<div class="back circle b2">
					<p class="p1">每一个实例一个教程</p>
					<p class="p2">剖析细节，注重实战</p>
					<div class="icon i2"></div>
				</div>
			</li>
			<li data-href="show.html">
				<div class="front circle f3">
					<img src="images/icons/show.jpg" />
					<div class="chinese">展示</div>
					<div class="english">Show</div>
				</div>
				<div class="back circle b3">
					<p class="p1">每一个教程一个展位</p>
					<p class="p2">精彩案例，先睹为快</p>
					<div class="icon i3"></div>
				</div>
			</li>
		</ul>
		<div class="clear"></div>
		<ul class="examples" id="examples">
			<?php 
			foreach($tutorials as $tutorial) {
			?>
			<li data-id="<?php echo $tutorial['id'];?>">
				<img src="<?php echo $tutorial['pic'];?>"/>
				<div class="right">
					<div class="title"><?php echo $tutorial['title'];?></div>
					<div class="author">作者：<?php echo $tutorial['author'];?>&nbsp;&nbsp;&nbsp;&nbsp;日期：<?php $time = explode(' ', $tutorial['gmt_create']); echo $time[0];?></div>
					<div class="abstract"><?php echo $tutorial['abstract'];?></div>
				</div>
			</li>
			<?php 
			}
			?>
		</ul>
	</div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/index.js"></script>
</body>