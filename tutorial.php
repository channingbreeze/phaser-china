<?php 

require_once dirname ( __FILE__ ) . '/services/TutorialService.class.php';

$tutorialService = new TutorialService();

if(isset($_GET['page'])) {
	$page = $_GET['page'];
	if($page < 1) {
		$page = 1;
	}
} else {
	$page = 1;
}

$tutorials = $tutorialService->selectTutorialsByPage($page);

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Phaser小站</title>
	<link href="css/global.css" rel="stylesheet" />
	<link href="css/common.css" rel="stylesheet" />
	<link href="css/tutorial.css" rel="stylesheet" />
	<script src="js/lib/jquery.js"></script>
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	<div class="middleDiv">
		<ul class="tutorials">
			<?php 
			foreach ($tutorials['data'] as $tutorial) {
			?>
			<li data-id="<?php echo $tutorial['id'];?>">
				<img src="<?php echo $tutorial['pic'];?>" />
				<div class="info">
					<div class="title"><?php echo $tutorial['title'];?></div>
					<div class="authorInfo">作者：<?php echo $tutorial['author'];?>&nbsp;&nbsp;&nbsp;&nbsp;日期：<?php $time = explode(' ', $tutorial['gmt_create']); echo $time[0];?></div>
					<div class="abstract"><?php echo $tutorial['abstract'];?></div>
				</div>
			</li>
			<?php 
			}
			?>
		</ul>
		<div class="pag">
			<ul>
				<?php 
				for( $i=1; $i<=$tutorials['total']; $i++) {
				?>
				<li data-id="<?php echo $i;?>" class="<?php if($i == $tutorials['curPage']) {
					echo "cur";
				} else {
					echo "clickable";
				}?>"><?php echo $i;?></li>
				<?php 
				}
				?>
	        </ul>
        </div>
	</div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/tutorial.js"></script>
</body>