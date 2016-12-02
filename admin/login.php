<?php 

session_start();
if(isset($_SESSION['username'])) {
	header("Location: ../admin/index.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>李欣的个人博客</title>
        <meta charset="utf-8" />
        <link href="../css/global.css" rel="stylesheet"></link>
        <link href="../css/common.css" rel="stylesheet"></link>
        <link href="../css/login.css" rel="stylesheet"></link>
        <script src="../js/lib/jquery.min.js"></script>
    </head>
    <body>
    	<form class="loginForm" action="../inter/login.php" method="post">
	    	用户名：<input name="username" type="text">
	    	密　码：<input name="password" type="password">
	    	<input type="submit" value="提交" />
    	</form>
        <script src="../js/login.js"></script>
    </body>
</html>