<?php 

require_once dirname ( __FILE__ ) . '/services/ExampleService.class.php';

$exampleService = new ExampleService();

$id = 1;

if(isset($_GET['id'])) {
	$id = $_GET['id'];
}

$exam = $exampleService->selectExampleById($id);
$exam = $exam[0];	

?>
<!DOCTYPE html>
<head>
	<title>Phaser小站</title>
	<meta charset="utf-8" />
	<meta name="Keywords" content="Phaser，Phaser小站，HTML5，游戏，HTML5游戏，游戏引擎，游戏框架，HTML5游戏引擎，HTML5游戏框架" />
	<meta name="Description" content="Phaser小站是一个为phaser而生的网站，以宣传和发展Phaser为使命。本站提供一切关于Phaser的案例、源码、教程、教学视频。<?php echo $exam['discription'];?>" />
	<link href="css/global.css" rel="stylesheet" />
	<link href="css/common.css" rel="stylesheet" />
	<link href="css/lib/sunlight.dark.css" rel="stylesheet" />
	<link href="css/exampleDetail.css" rel="stylesheet" />
	<script src="js/lib/jquery.js"></script>
	<script src="js/lib/sunlight-min.js"></script>
	<script src="js/lib/sunlight.javascript-min.js"></script>
	<script src="examples/libs/phaser.2.4.4.min.js"></script>
	<?php 
	if(isset($exam['js_deps']) && !empty($exam['js_deps'])) {
		$deps = explode(",", $exam['js_deps']);
		foreach($deps as $dep) {
			echo "<script src=\"" . $dep . "\"></script>";
		}
	}
	?>
	<!-- <script type="text/javascript" src="_plugins/phaser.2.4.4.particlestorm.min.js"></script> -->
	<script src="<?php echo $exam['js_dir'];?>"></script>
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	
	<div class="middleDiv">
		<div class="exampleTitle">
			<div class="titleWrap">
				<span class="title"><?php echo $exam['ex_name'];?></span>
				<span class="subtitle">(<?php echo $exam['discription'];?>)</span>
			</div>
		</div>
		<div class="gameWrapper">
			<div class="game" id="phaser-example"></div>
			<div class="phaser">PHASER</div>
			<div class="copyright">Copyright © 2015 phaser-china.com All Rights Reserved</div>
		</div>
		<div class="source">
		<pre class="sunlight-highlight-javascript linenums">
		<?php 
			include_once $exam['js_dir'];
		?>
		</pre>
		</div>
		<div class="explain">
			<?php 
			if(isset($exam['js_deps']) && !empty($exam['js_deps'])) {
				$depmes = "<p>本案例需要依赖：";
				$deps = explode(",", $exam['js_deps']);
				foreach($deps as $dep) {
					$js = explode("/", $dep);
					$depmes = $depmes . $js[1] . " ";
				}
				$depmes = $depmes . "</p>";
				echo $depmes;
			}
			?>
			<?php 
				$message = "<p>" . str_replace("\n", "</p><p>", $exam['ex_explain']) . "</p>";
				echo $message;
			?>
		</div>
	</div>
	<div class="h100"></div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/exampleDetail.js"></script>
</body>