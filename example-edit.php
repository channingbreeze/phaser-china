<?php 

require_once dirname ( __FILE__ ) . '/services/ExampleService.class.php';

$exampleService = new ExampleService();

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$example = $exampleService->selectExampleById($id);
	copy($example[0]['js_dir'], 'js/user/global.js');
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
	<link href="css/exampleEdit.css" rel="stylesheet" />
	<script src="js/lib/jquery.js"></script>
	<script src="js/lib/acelib/lib/ace/ext/emmet.js"></script>
	<script src="js/lib/acelib/kitchen-sink/require.js"></script>
	<script src="examples/libs/phaser.2.4.4.min.js"></script>
	<script src="js/user/global.js?now=<?php echo time();?>"></script>
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	
	<div class="middleDiv">
		<div class="gameWrapper">
			<div class="game" id="phaser-example"></div>
			<div class="phaser">PHASER</div>
			<div class="copyright">Copyright © 2015 phaser-china.com All Rights Reserved</div>
		</div>
		<div class="buttonDiv">
			<button id="runBtn">运行</button>
		</div>
		<div class="editorWrapper">
			<pre class="editor" id="editor"></pre>
		</div>
	</div>
	<div class="h100"></div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/exampleEdit.js"></script>
</body>