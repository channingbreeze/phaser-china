<?php 

require_once dirname ( __FILE__ ) . '/services/TutorialService.class.php';

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	if($id < 1) {
		$id = 1;
	}
} else {
	$id = 1;
}

$tutorialService = new TutorialService();
$tutorial = $tutorialService->selectTutorialById($id);
$tutorial = $tutorial[0];

?>
<!DOCTYPE html>
<head>
	<title>Phaser小站</title>
	<meta charset="utf-8" />
	<meta name="Keywords" content="Phaser，Phaser小站，HTML5，游戏，HTML5游戏，游戏引擎，游戏框架，HTML5游戏引擎，HTML5游戏框架，<?php echo $tutorial['keywords'];?>" />
	<meta name="Description" content="Phaser小站是一个为phaser而生的网站，以宣传和发展Phaser为使命。本站提供一切关于Phaser的案例、源码、教程、教学视频。<?php echo $tutorial['description'];?>" />
	<link href="css/global.css" rel="stylesheet" />
	<link href="css/common.css" rel="stylesheet" />
	<link href="css/tutorialDetail.css" rel="stylesheet" />
	<script src="js/lib/jquery.js"></script>
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	<div class="middleDiv">
		<div class="h100"></div>
		<div class="title"><?php echo $tutorial['title'];?></div>
		<div class="headInfo">
			<img src="<?php echo $tutorial['pic'];?>" />
			<div class="rightDiv">
				<div class="author">作者：<?php echo $tutorial['author'];?></div>
				<div class="date">日期：<?php $time = explode(' ', $tutorial['gmt_create']); echo $time[0];?></div>
				<div class="abstract"><?php echo $tutorial['abstract'];?></div>
			</div>
		</div>
		<div class="content clear">
			<?php echo $tutorial['content'];?>
			<div class="reprint">转载请注明出处：<a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>"><?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?></a></div>
		</div>
		<div class="h100"></div>
	</div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/tutorialDetail.js"></script>
</body>