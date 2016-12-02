<?php 
if(isset($subdir)) {
	$path = "../";
} else {
	$path = "";
}
?>
<header>
	<div class="mainHead">
		<ul class="menu left">
			<li><a href="<?php echo $path;?>news.html">新闻</a></li>
			<li><a href="<?php echo $path;?>doc.html">文档</a></li>
			<li><a href="<?php echo $path;?>tutorial.html">教程</a></li>
		</ul>
		<div class="middleItem"><a class="logoPng" href="<?php echo $path;?>index.html"></a></div>
		<ul class="menu right">
			<li><a href="<?php echo $path;?>example.html">实例</a></li>
			<li><a href="<?php echo $path;?>show.html">展示</a></li>
			<li><a href="<?php echo $path;?>about.html">关于</a></li>
		</ul>
	</div>
</header>