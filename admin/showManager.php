<?php 

session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../index.php");
}

require_once dirname ( __FILE__ ) . '/../services/ShowService.class.php';

$showService = new ShowService();
$shows = $showService->selectAllShows();

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Phaser小站</title>
	<link href="../css/global.css" rel="stylesheet" />
	<link href="../css/common.css" rel="stylesheet" />
	<link href="../css/admin/showManager.css" rel="stylesheet" />
	<script src="../js/lib/jquery.js"></script>
</head>
<body>
	<div class="middleDiv">
		<table id="showTable" class="showTable">
			<tr><th>ID</th><th>标题</th><th>作者</th><th>顺序</th><th>操作</th></tr>
			<?php 
			foreach ($shows as $show) {
			?>
			<tr><td><?php echo $show['id'];?></td><td><?php echo $show['show_name'];?></td><td><?php echo $show['show_author'];?></td><td><?php echo $show['show_order'];?></td><td><a href="javascript:void(0);" data-id="<?php echo $show['id'];?>">修改</a></td></tr>
			<?php 
			}
			?>
		</table>
	</div>
	<script src="../js/admin/showManager.js"></script>
</body>