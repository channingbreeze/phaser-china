(function($) {
	
	var href = window.location.href;
	var prefix = "";
	if(href.indexOf("docs-cn") != -1) {
		prefix = "../";
	}
	
	$("#searchBtn").on("click", function() {
		var text = $("#searchText").val();
		window.open(prefix + "search-result.html?text=" + text, "_blank ");
	});
	
	document.onkeypress = function(e) {
		// 回车
		if(e.keyCode == 13) {
			var text = $("#searchText").val();
			window.open(prefix + "search-result.html?text=" + text, "_blank ");
		}
    }
	
})(jQuery);