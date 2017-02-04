$(function() {
	
	$("#webLoginBtn").on("click", function() {
		if(window.location.href.indexOf("login") == -1) {
			document.cookie = "loginBackUrl=" + window.location.href;
		}
		window.location.href = "login.html";
	});
	
	$("#weiboLoginBtn").on("click", function() {
		if(window.location.href.indexOf("login") == -1) {
			document.cookie = "loginBackUrl=" + window.location.href;
		}
		window.location.href = "loginsdk/weibo/login.html";
	})
	
	$("#qqLoginBtn").on("click", function() {
		if(window.location.href.indexOf("login") == -1) {
			document.cookie = "loginBackUrl=" + window.location.href;
		}
		window.location.href = "loginsdk/qq/login.html";
	})
	
	$("#githubLoginBtn").on("click", function() {
		if(window.location.href.indexOf("login") == -1) {
			document.cookie = "loginBackUrl=" + window.location.href;
		}
		window.location.href = "loginsdk/github/login.html";
	})
	
	$("#logoutBtn").on("click", function() {
		$.post("inter/login/logout.php", "", function() {
			window.location.reload();
		})
	});
	
});