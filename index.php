<?php 

require_once dirname ( __FILE__ ) . '/services/TutorialService.class.php';

$tutorialService = new TutorialService();

$tutorials = $tutorialService->selectTutorialsLastN(3);

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Phaser小站</title>
	<link href="css/global.css" rel="stylesheet" />
	<link href="css/common.css" rel="stylesheet" />
	<link href="css/index.css" rel="stylesheet" />
	<script src="js/lib/jquery.js"></script>
	<script src="js/lib/unslider.js"></script>
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	<div class="banner">
		<ul>
			<li class="i1">
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
				<div class="front circle f1">实例</div>
				<div class="back circle b1">
					<p class="p1">每一个知识点一个实例</p>
					<p class="p2">指哪打哪，逐个击破</p>
				</div>
			</li>
			<li data-href="tutorial.html">
				<div class="front circle f2">教程</div>
				<div class="back circle b2">
					<p class="p1">每一个实例一个教程</p>
					<p class="p2">剖析细节，注重实战</p>
				</div>
			</li>
			<li data-href="show.html">
				<div class="front circle f3">展示</div>
				<div class="back circle b3">
					<p class="p1">每一个教程一个展位</p>
					<p class="p2">精彩案例，先睹为快</p>
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