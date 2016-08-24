<?php 

session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../index.php");
}

require_once dirname ( __FILE__ ) . '/../services/NewsService.class.php';

$newsService = new NewsService();
$news = $newsService->selectAllNews();

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Phaser小站</title>
	<link href="../css/global.css" rel="stylesheet" />
	<link href="../css/common.css" rel="stylesheet" />
	<link href="../css/admin/newsManager.css" rel="stylesheet" />
	<script src="../js/lib/jquery.js"></script>
</head>
<body>
	<div class="middleDiv">
		<table id="newsTable" class="newsTable">
			<tr><th>ID</th><th>标题</th><th>作者</th><th>顺序</th><th>操作</th></tr>
			<?php 
			foreach ($news as $new) {
			?>
			<tr><td><?php echo $new['id'];?></td><td><?php echo $new['title'];?></td><td><?php echo $new['author'];?></td><td><?php echo $new['news_order'];?></td><td><a href="javascript:void(0);" data-id="<?php echo $new['id'];?>">修改</a></td></tr>
			<?php 
			}
			?>
		</table>
	</div>
	<script src="../js/admin/newsManager.js"></script>
</body>