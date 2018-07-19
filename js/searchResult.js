(function($) {
	
	$searchBtn = $("#searchBtn");
	$searchText = $("#searchText");
	$resText = $("#resText");
	$resNum = $("#resNum");
	var search = function(text) {
		var text = text.replace(/^\s+|\s+$/gi, "");
		if(text) {
			$resText.text(text);
			$resNum.text("...");
			history.pushState({id:1}, text, "/search-result.html?text=" + text);
			$.get("inter/search/getSearchResult.php", {text: text}, function(res) {
				res = JSON.parse(res);
				$resNum.text(res.length);
				$("#resUl").html(Handlebars.compile($("#searchRes-template").html())(res));
			});
		} else {
			$searchBtn.removeClass("enable");
		}
	}
	
	$searchBtn.on("click", function() {
		search($searchText.val());
	});

	$searchText.on("keyup", function() {
		if(!$searchText.val().replace(/^\s+|\s+$/gi, "")) {
			$searchBtn.removeClass("enable");
		} else {
			$searchBtn.addClass("enable");
		}
	});
	
	document.onkeypress = function(e) {
		// 回车
		if(e.keyCode == 13) {
			search($searchText.val());
		}
    }
	
	search(TEXT);
	
})(jQuery);
