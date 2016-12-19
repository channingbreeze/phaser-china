<?php 
if(isset($subdir)) {
	$path = "../";
} else {
	$path = "";
}
?>
<header>
	<div class="mainLogin">
		<div class="loginContainer">
			<?php 
			session_start();
			if(isset($_SESSION['user'])) {
			?>
			<div class="userInfo"><a id="logoutBtn" href="javascript:void(0);">退出登陆</a></div>
			<div class="userInfo"><a id="userInfoBtn" href="javascript:void(0);"><?php echo $_SESSION['user']['username'];?></a></div>
			<?php } else {
			?>
			<div class="loginTips">登录内测(欢迎小伙伴们通过右侧登录按钮进行注册和登录)</div>
			<div class="loginBtn"><a id="webLoginBtn" href="javascript:void(0);">登录</a></div>
			<div class="loginBtn"><a id="weiboLoginBtn" href="javascript:void(0);"><img src="loginsdk/weibo/weibo_login.png"/></a></div>
			<div class="loginBtn"><a id="qqLoginBtn" href="javascript:void(0);">QQ登录</a></div>
			<?php } ?>
		</div>
	</div>
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