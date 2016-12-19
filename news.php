<?php 

require_once dirname ( __FILE__ ) . '/services/NewsService.class.php';

$newsService = new NewsService();
$news = $newsService->selectAllNews();

?>
<!DOCTYPE html>
<head>
	<title>Phaser小站</title>
	<meta charset="utf-8" />
	<meta name="Keywords" content="Phaser，Phaser小站，HTML5，游戏，HTML5游戏，游戏引擎，游戏框架，HTML5游戏引擎，HTML5游戏框架" />
	<meta name="Description" content="Phaser小站是一个为phaser而生的网站，以宣传和发展Phaser为使命。本站提供一切关于Phaser的案例、源码、教程、教学视频。" />
	<link href="css/global.css" rel="stylesheet" />
	<link href="css/common.css" rel="stylesheet" />
	<link href="css/news.css" rel="stylesheet" />
	<script src="js/lib/jquery.js"></script>
	<script src="js/lib/handlebars.js"></script>
	<script>
		var NEWS = <?php echo json_encode($news);?>;
	</script>
	<script id="news-template" type="text/x-handlebars-template">
        <div class="title">{{title}}</div>
		<div class="info"><span class="author">作者：{{author}}</span><span class="date">{{gmt_create}}</span></div>
		<div class="content">{{{content}}}</div>
    </script>
    <script src="js/handleLogin.js"></script>
    <?php include_once 'partials/statistics.php';?>
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	<div class="newsBanner">
		
	</div>
	<div class="middleDiv">
		<div class="leftDiv" id="newsList">
			<ul>
				<?php 
				$i = 0;
				foreach ($news as $new) {
					$time = explode(' ', $new['gmt_create']);
				?>
				<li>
					<a href="javascript:void(0);" data-id="<?php echo $i;?>"><?php echo $new['title'];?></a>
					<span><?php echo $time[0];?></span>
				</li>
				<?php 
				$i++;
				}
				?>
			</ul>
		</div>
		<div class="rightDiv" id="news">
			
		</div>
	</div>
	<div class="clear h100"></div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/news.js"></script>
</body>