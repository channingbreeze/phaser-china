<?php 

if(isset($_GET['text'])) {
	$text = $_GET['text'];
} else {
	$text = "";
}

?>
<!DOCTYPE html>
<head>
	<title>Phaser小站</title>
	<meta charset="utf-8" />
	<meta name="Keywords" content="Phaser，Phaser小站，HTML5，游戏，HTML5游戏，游戏引擎，游戏框架，HTML5游戏引擎，HTML5游戏框架" />
	<meta name="Description" content="Phaser小站是一个为phaser而生的网站，以宣传和发展Phaser为使命。本站提供一切关于Phaser的案例、源码、教程、教学视频。" />
	<link href="css/global.css" rel="stylesheet" />
	<link href="css/common.css" rel="stylesheet" />
	<link href="css/searchResult.css" rel="stylesheet" />
	<script src="js/lib/jquery.js"></script>
    <script src="js/lib/handlebars.js"></script>
	<script id="searchRes-template" type="text/x-handlebars-template">
		{{#each this}}
		<li class="resultItem">
			<div class="resultTitle">
				<a href="docs/{{path}}#{{anchor}}" target="_blank">{{name}} / {{path}}</a>
			</div>
			<div class="resultDesc">
				{{description}}
			</div>
		</li>
		{{/each}}
    </script>
    <script src="js/handleLogin.js"></script>
    <?php include_once 'partials/statistics.php';?>
    <script>
		var TEXT = "<?php echo $text;?>";
    </script>
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	<div class="middleDiv">
		<div class="inputDiv">
			<input id="searchText" type="text" placeholder="请输入函数名" value="<?php echo $text;?>" />
			<button id="searchBtn" class="enable">搜索</button>
		</div>
		<div class="totalResult">
			<span>搜索 <span class="text" id="resText">(空)</span> ，共得到 <span class="num" id="resNum">0</span> 个结果</span>
		</div>
		<ul class="resultDetail" id="resUl">
		</ul>
		<div class="clear h100"></div>
	</div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/searchResult.js"></script>
</body>