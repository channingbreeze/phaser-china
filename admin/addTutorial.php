<?php 

session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../index.php");
}

require_once dirname ( __FILE__ ) . '/../services/TutorialService.class.php';

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$tutorialService = new TutorialService();
	$res = $tutorialService->selectTutorialById($id);
	if(count($res) == 0) {
		$update = false;
	} else {
		$update = true;
		$tutorial = $res[0];
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
	<link href="../css/admin/addTutorial.css" rel="stylesheet" />
	<script src="../ueditor/ueditor.config.js"></script>
	<script src="../ueditor/ueditor.all.min.js"></script>
	<script src="../ueditor/ueditor.parse.min.js"></script>
	<script src="../js/lib/jquery.js"></script>
</head>
<body>
	<div class="middleDiv">
		<h1 class="writeTutorialTitle">教程编辑平台</h1>
    	<form class="tutorialInfo" id="tutorialForm">
    		<?php 
    		if($update) {
    		?>
    		<div class="line"><span class="title">更新教程：</span><input type="hidden" name="id" value="<?php if($update) {echo $tutorial['id'];}?>" /></div>
    		<?php 
    		} else {
    		?>
    		<div class="line"><span class="title">增加教程：</span></div>
    		<?php 
    		}
    		?>
	    	<div class="line"><span class="title">标题：</span><input type="text" name="title" value="<?php if($update) {echo $tutorial['title'];}?>" /></div>
			<div class="line"><span class="title">作者：</span><input type="text" name="author" value="<?php if($update) {echo $tutorial['author'];}?>" /></div>
			<div class="line"><span class="title">图片(240x135)：</span><input type="text" name="pic" value="<?php if($update) {echo $tutorial['pic'];}?>" /></div>
			<div class="line"><span class="title">摘要：</span><input type="text" name="abstract" value="<?php if($update) {echo $tutorial['abstract'];}?>" /></div>
			<div class="line"><span class="title">关键字(seo)：</span><input type="text" name="keywords" value="<?php if($update) {echo $tutorial['keywords'];}?>" /></div>
			<div class="line"><span class="title">描述(seo)：</span><input type="text" name="description" value="<?php if($update) {echo $tutorial['description'];}?>" /></div>
			<div class="line"><span class="title">顺序：</span><input type="text" name="toturialOrder" value="<?php if($update) {echo $tutorial['tutorial_order'];}?>" /></div>
		</form>
        <div class="tutorialInfo">
        	<div class="line"><span class="title">图片上传：</span><input id="pic" type="file" name="pic" /><button id="uploadPic">选择图片</button><span id="picUrl"></span></div>
        </div>
        <textarea class="writeTutorialEditor" name="content" id="myEditor" data-value='<?php if($update) {echo $tutorial["content"];}?>'></textarea>
        <button class="writeTutorialBtn" id="preBtn">预览</button>
        <button class="writeTutorialBtn" id="subBtn">提交</button>
        <div class="h100"></div>
        <div class="middlediv">
        	<div class="content" id="pre">
        		
        	</div>
        </div>
        <div class="clear h300"></div>
	</div>
	<script src="../js/admin/addTutorial.js"></script>
</body>