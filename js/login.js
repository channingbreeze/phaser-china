(function($) {
	
	var readCookie = function(name) {
		var arr;
		var reg = new RegExp("(^| )"+name+"=([^;]*)(;|$)");
		if(arr = document.cookie.match(reg)) {
			return unescape(arr[2]);
		} else {
			return null;
		}
	}
	
	var validEmail = function(str) {
		var reg = /^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/gi;
		if(reg.test(str)) {
			return true;
		} else {
			return false;
		}
	}
	
	$("#loginTab").on("click", function() {
		$(".loginTab").removeClass("none");
		$(".registerTab").addClass("none");
		$("#loginTab").addClass("active");
		$("#registerTab").removeClass("active");
	});
	
	$("#registerTab").on("click", function() {
		$(".loginTab").addClass("none");
		$(".registerTab").removeClass("none");
		$("#loginTab").removeClass("active");
		$("#registerTab").addClass("active");
	});
	
	$("#loginBtn").on("click", function() {
		var username = $("#loginUsername").val();
		var password = $("#loginPassword").val();
		if(!validEmail(username)) {
			$("#loginUsernameError").text("用户名非邮箱格式");
			return;
		}
		$.post("inter/login/login.php", {username: username, password: password}, function(data) {
			if(data == "success") {
				var loginBackUrl = readCookie("loginBackUrl");
				if(!loginBackUrl) {
					loginBackUrl = "http://www.phaser-china.com";
				}
				window.location.href = loginBackUrl;
			} else {
				$("#loginPasswordError").text("用户名或密码错误");
			}
		})
	});
	
	$("#loginUsername").on("keydown", function() {
		$("#loginUsernameError").text("");
		$("#loginPasswordError").text("");
	});
	$("#loginPassword").on("keydown", function() {
		$("#loginPasswordError").text("");
	});
	
	$("#registerBtn").on("click", function() {
		var username = $("#registerUsername").val();
		var password = $("#registerPassword").val();
		var repassword = $("#registerRepassword").val();
		if(!validEmail(username)) {
			$("#registerUsernameError").text("请使用邮箱注册");
			return;
		}
		if(password != repassword) {
			$("#registerRepasswordError").text("两次密码不一致");
			return;
		}
		$.post("inter/login/register.php", {username: username, password: password}, function(data) {
			if(data == "success") {
				var loginBackUrl = readCookie("loginBackUrl");
				if(!loginBackUrl) {
					loginBackUrl = "http://www.phaser-china.com";
				}
				window.location.href = loginBackUrl;
			} else {
				$("#registerUsernameError").text("用户名已存在");
			}
		})
	});
	
	$("#registerUsername").on("keydown", function() {
		$("#registerUsernameError").text("");
	});
	$("#registerPassword").on("keydown", function() {
		$("#registerRepasswordError").text("");
	});
	$("#registerRepassword").on("keydown", function() {
		$("#registerRepasswordError").text("");
	});
	
})(jQuery);