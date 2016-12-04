<?php 

require_once dirname ( __FILE__ ) . '/services/ExampleTypeService.class.php';

$exampleTypeService = new ExampleTypeService();
$exampleTypes = $exampleTypeService->selectAllExampleTypes();

$totalCount = 0;

foreach($exampleTypes as $exampleType) {
	$totalCount = $totalCount + $exampleType['typecount'];
}

if(isset($_GET['id'])) {
	$typeId = $_GET['id'];
	$selectedType = $exampleTypeService->selectExampleTypeById($typeId);
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
	<link href="css/example.css" rel="stylesheet" />
	<script src="js/lib/jquery.js"></script>
	<script src="js/lib/handlebars.js"></script>
	<script id="exTypes-template" type="text/x-handlebars-template">
        <ul>
			{{#each this}}
			<li data-id="{{id}}" data-name="{{typename}}">
				<img src="{{type_big_pic_url}}" />
				<div class="name">{{typename}}</div>
				<div class="discription">{{discription}}</div>
			</li>
			{{/each}}
		</ul>
    </script>
    <script id="exs-template" type="text/x-handlebars-template">
        <ul>
			{{#each this}}
			<li data-id="{{id}}">
				<img src="{{pic_url}}" />
				<div class="name">{{ex_name}}</div>
				<div class="discription">{{discription}}</div>
			</li>
			{{/each}}
		</ul>
    </script>
    <?php 
    if(isset($selectedType)) {
    ?>
    <script>
		var TYPE_ID = '<?php echo $selectedType[0]['id'];?>';
		var TYPE_NAME = '<?php echo $selectedType[0]['typename'];?>';
    </script>
    <?php 
    }
    ?>
    <?php include_once 'partials/statistics.php';?>
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	<div class="middleDiv">
		<div class="exampleTitle">
			<div class="title" id="title">SELECT A CATEGORY</div>
		</div>
		<div class="leftDiv" id="exTypes">
			<ul>
				<li data-id="0">
					<span class="exampleCategory">ALL</span>
					<span class="exampleNum"><?php echo $totalCount;?></span>
				</li>
			<?php 
			foreach($exampleTypes as $exampleType) {
			?>
				<li data-id="<?php echo $exampleType['id'];?>" data-name="<?php echo $exampleType['typename'];?>">
					<span class="exampleCategory"><?php echo $exampleType['typename'];?></span>
					<span class="exampleNum"><?php echo $exampleType['typecount'];?></span>
				</li>
			<?php 
			}
			?>
			</ul>
		</div>
		<div id="exams" class="rightDiv">
			
		</div>
		<div class="clear h100"></div>
	</div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/example.js"></script>
</body>