<?php 

session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../index.php");
}

require_once dirname ( __FILE__ ) . '/../services/ShowService.class.php';

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$showService = new ShowService();
	$res = $showService->selectShowById($id);
	if(count($res) == 0) {
		$update = false;
	} else {
		$update = true;
		$show = $res[0];
	}
} else {
	$update = false;
}

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Phaser小站</title>
	<link href="../css/global.css" rel="stylesheet" />
	<link href="../css/common.css" rel="stylesheet" />
	<link href="../css/admin/addShow.css" rel="stylesheet" />
	<script src="../js/lib/jquery.js"></script>
</head>
<body>
	<div class="middleDiv">
		<h1 class="writeShowTitle">展示编辑平台</h1>
    	<form class="showInfo" id="showForm">
    		<?php 
    		if($update) {
    		?>
    		<div class="line"><span class="title">更新展示：</span><input type="hidden" name="id" value="<?php echo $show['id'];?>" /><?php echo $show['id'];?></div>
    		<?php 
    		} else {
    		?>
    		<div class="line"><span class="title">增加展示：</span></div>
    		<?php 
    		}
    		?>
    		<div class="line"><span class="title">游戏地址：</span><input type="text" name="title" value="<?php if($update) {echo $show['game_url'];}?>" /></div>
	    	<div class="line"><span class="title">标题：</span><input type="text" name="title" value="<?php if($update) {echo $show['show_name'];}?>" /></div>
			<div class="line"><span class="title">作者：</span><input type="text" name="author" value="<?php if($update) {echo $show['show_author'];}?>" /></div>
			<div class="line"><span class="title">简介：</span><input type="text" name="description" value="<?php if($update) {echo $show['show_description'];}?>" /></div>
			<div class="line"><span class="title">玩法：</span><input type="text" name="play" value="<?php if($update) {echo $show['show_play'];}?>" /></div>
			<div class="line"><span class="title">图片(220x220)：</span><input type="text" name="pic" value="<?php if($update) {echo $show['pic_url'];}?>" /></div>
			<div class="line"><span class="title">顺序：</span><input type="text" name="showOrder" value="<?php if($update) {echo $show['show_order'];}?>" /></div>
		</form>
        <div class="showInfo">
        	<div class="line"><span class="title">图片上传：</span><input id="pic" type="file" name="pic" /><button id="uploadPic">选择图片</button><span id="picUrl"></span></div>
        </div>
        <button class="writeShowBtn" id="preBtn">预览</button>
        <button class="writeShowBtn" id="subBtn">提交</button>
        <div class="h100"></div>
        <div class="middlediv">
        	<img class="content" id="pre">
        		
        	</img>
        </div>
        <div class="clear h300"></div>
	</div>
	<script src="../js/admin/addShow.js"></script>
</body>