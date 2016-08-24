<?php 

require_once dirname ( __FILE__ ) . '/services/NewsService.class.php';

$newsService = new NewsService();
$news = $newsService->selectAllNews();

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Phaser小站</title>
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