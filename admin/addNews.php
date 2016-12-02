<?php 

session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../index.php");
}

require_once dirname ( __FILE__ ) . '/../services/NewsService.class.php';

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$newsService = new NewsService();
	$res = $newsService->selectNewsById($id);
	if(count($res) == 0) {
		$update = false;
	} else {
		$update = true;
		$news = $res[0];
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
	<link href="../css/admin/addNews.css" rel="stylesheet" />
	<script src="../ueditor/ueditor.config.js"></script>
	<script src="../ueditor/ueditor.all.min.js"></script>
	<script src="../ueditor/ueditor.parse.min.js"></script>
	<script src="../js/lib/jquery.js"></script>
</head>
<body>
	<div class="middleDiv">
		<h1 class="writeNewsTitle">新闻编辑平台</h1>
    	<form class="newsInfo" id="newsForm">
    		<?php 
    		if($update) {
    		?>
    		<div class="line"><span class="title">更新新闻：</span><input type="hidden" name="id" value="<?php if($update) {echo $news['id'];}?>" /></div>
    		<?php 
    		} else {
    		?>
    		<div class="line"><span class="title">增加新闻：</span></div>
    		<?php 
    		}
    		?>
	    	<div class="line"><span class="title">标题：</span><input type="text" name="title" value="<?php if($update) {echo $news['title'];}?>" /></div>
			<div class="line"><span class="title">作者：</span><input type="text" name="author" value="<?php if($update) {echo $news['author'];}?>" /></div>
			<div class="line"><span class="title">关键字(seo)：</span><input type="text" name="keywords" value="<?php if($update) {echo $news['keywords'];}?>" /></div>
			<div class="line"><span class="title">描述(seo)：</span><input type="text" name="description" value="<?php if($update) {echo $news['description'];}?>" /></div>
			<div class="line"><span class="title">顺序：</span><input type="text" name="newsOrder" value="<?php if($update) {echo $news['news_order'];}?>" /></div>
		</form>
        <div class="newsInfo">
        	<div class="line"><span class="title">图片上传：</span><input id="pic" type="file" name="pic" /><button id="uploadPic">选择图片</button><span id="picUrl"></span></div>
        </div>
        <textarea class="writeNewsEditor" name="content" id="myEditor" data-value='<?php if($update) {echo $news["content"];}?>'></textarea>
        <button class="writeNewsBtn" id="preBtn">预览</button>
        <button class="writeNewsBtn" id="subBtn">提交</button>
        <div class="middlediv">
        	<div class="content">
        		<hr />
        		<div id="pre" class="rightDiv"></div>
        	</div>
        </div>
        <div class="clear h300"></div>
	</div>
	<script src="../js/admin/addNews.js"></script>
</body>