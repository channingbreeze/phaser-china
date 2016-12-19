<?php 

session_start();
if(isset($_SESSION['user'])) {
	header("Location: index.html");
}

?>
<!DOCTYPE html>
<head>
	<title>Phaser小站</title>
	<meta charset="utf-8" />
	<meta name="Keywords" content="Phaser，Phaser小站，HTML5，游戏，HTML5游戏，游戏引擎，游戏框架，HTML5游戏引擎，HTML5游戏框架" />
	<meta name="Description" content="Phaser小站是一个为phaser而生的网站，以宣传和发展Phaser为使命。本站提供一切关于Phaser的案例、源码、教程、教学视频。" />
	<link href="css/global.css" rel="stylesheet" />
	<link href="css/common.css" rel="stylesheet" />
	<link href="css/login.css" rel="stylesheet" />
	<script src="js/lib/jquery.js"></script>
	<?php include_once 'partials/statistics.php';?>
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	<div class="middleDiv">
		<div class="topContainer">
			<div class="tab">
				<div id="loginTab" class="button active">登录</div>
				<div id="registerTab" class="button">注册</div>
			</div>
		</div>
		<div class="loginTab">
			<form>
				<label><input type="text" id="loginUsername" name="username" placeholder="用户名"/></label>
				<label><span class="error" id="loginUsernameError"></span></label>
				<label><input type="password" id="loginPassword" name="password" placeholder="密码"/></label>
				<label><span class="error" id="loginPasswordError"></span></label>
			</form>
			<div class="buttonContainer"><button id="loginBtn">登录</button></div>
			<div class="h30"></div>
		</div>
		<div class="registerTab none">
			<form>
				<label><input type="text" id="registerUsername" name="username" placeholder="邮箱注册"/></label>
				<label><span class="error" id="registerUsernameError"></span></label>
				<label><input type="password" id="registerPassword" name="password" placeholder="密码"/></label>
				<label><span class="error"></span></label>
				<label><input type="password" id="registerRepassword" name="repassword" placeholder="确认密码"/></label>
				<label><span class="error" id="registerRepasswordError"></span></label>
			</form>
			<div class="buttonContainer"><button id="registerBtn">注册</button></div>
			<div class="h30"></div>
		</div>
		<div class="thirdLogin">
			<a href="loginsdk/weibo/login.php"><img src="loginsdk/weibo/weibo_login.png" /></a>
		</div>
		<div class="h100"></div>
	</div>
	<?php include_once 'partials/footer.php'; ?>
	<?php include_once 'partials/bottomFixed.php'; ?>
	<script src="js/login.js"></script>
</body>