<?php 

require_once dirname ( __FILE__ ) . '/services/ShowService.class.php';

$showService = new ShowService();

if(isset($_GET['type'])) {
	$type = $_GET['type'];
} else {
	$type = 2;
}

$shows = $showService->selectShowsByType($type);

?>
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
		<div class="source">以下游戏的素材和源码在：<a href="https://github.com/channingbreeze/games" target="_blank">https://github.com/channingbreeze/games</a></div>
		<ul class="tab">
			<li class="tabItem <?php if($type == 2) {echo 'active';} ?>" data-type="2">Phaser2</li>
			<li class="tabItem <?php if($type == 3) {echo 'active';} ?>" data-type="3">Phaser3</li>
		</ul>
		<ul class="shows" id="shows">
			<?php
			foreach($shows as $show) {
			?>
			<li data-url="<?php echo $show['game_url'];?>">
				<div class="front">
					<img src="<?php echo $show['pic_url'];?>"/>
				</div>
				<div class="back">
					<div class="name"><?php echo $show['show_name'];?></div>
					<div class="author">作者：<?php echo $show['show_author'];?></div>
					<div class="desc">简介：<?php echo $show['show_description'];?></div>
					<div class="play">玩法：<?php echo $show['show_play'];?></div>
				</div>
			</li>
			<?php
			}
			?>
		</ul>
	</div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/show.js"></script>
</body>