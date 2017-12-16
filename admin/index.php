<?php 

session_start();
if(!isset($_SESSION['username'])) {
	header("Location: login.php");
}

?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Phaser小站</title>
	<link href="../css/global.css" rel="stylesheet" />
	<link href="../css/common.css" rel="stylesheet" />
	<link href="../css/admin/index.css" rel="stylesheet" />
	<script src="../js/lib/jquery.js"></script>
</head>
<body>
	<div class="middleDiv">
		<ul>
			<li><a href="addNews.php">增加新闻</a></li>
			<li><a href="newsManager.php">新闻管理</a></li>
			<li><a href="addTutorial.php">增加教程</a></li>
			<li><a href="tutorialManager.php">教程管理</a></li>
			<li><a href="exampleType.php">实例类型管理</a></li>
			<li><a href="example.php">实例管理</a></li>
			<li><a href="addShow.php">增加展示</a></li>
			<li><a href="showManager.php">展示管理</a></li>
		</ul>
	</div>
	<script src="../js/admin/index.js"></script>
</body>