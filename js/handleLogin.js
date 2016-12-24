$(function() {
	
	$("#webLoginBtn").on("click", function() {
		if(window.location.href.indexOf("login.php") == -1) {
			document.cookie = "loginBackUrl=" + window.location.href;
		}
		window.location.href = "login.html";
	});
	
	$("#weiboLoginBtn").on("click", function() {
		if(window.location.href.indexOf("login.php") == -1) {
			document.cookie = "loginBackUrl=" + window.location.href;
		}
		window.location.href = "loginsdk/weibo/login.html";
	})
	
	$("#qqLoginBtn").on("click", function() {
		if(window.location.href.indexOf("login.php") == -1) {
			document.cookie = "loginBackUrl=" + window.location.href;
		}
		window.location.href = "http://www.phaser-china.com/loginsdk/qq/login.php";
	})
	
	$("#logoutBtn").on("click", function() {
		$.post("inter/login/logout.php", "", function() {
			window.location.reload();
		})
	});
	
});