<?php 

session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../index.php");
}

require_once dirname ( __FILE__ ) . '/../services/TutorialService.class.php';

$tutorialService = new TutorialService();
$tutorials = $tutorialService->selectAllTutorials();

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Phaser小站</title>
	<link href="../css/global.css" rel="stylesheet" />
	<link href="../css/common.css" rel="stylesheet" />
	<link href="../css/admin/tutorialManager.css" rel="stylesheet" />
	<script src="../js/lib/jquery.js"></script>
</head>
<body>
	<div class="middleDiv">
		<table id="tutorialTable" class="tutorialTable">
			<tr><th>ID</th><th>标题</th><th>作者</th><th>顺序</th><th>操作</th></tr>
			<?php 
			foreach ($tutorials as $tutorial) {
			?>
			<tr><td><?php echo $tutorial['id'];?></td><td><?php echo $tutorial['title'];?></td><td><?php echo $tutorial['author'];?></td><td><?php echo $tutorial['tutorial_order'];?></td><td><a href="javascript:void(0);" data-id="<?php echo $tutorial['id'];?>">修改</a></td></tr>
			<?php 
			}
			?>
		</table>
	</div>
	<script src="../js/admin/tutorialManager.js"></script>
</body>