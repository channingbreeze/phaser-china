(function($) {
	
	Sunlight.highlightAll();
	
	var assets = $("span.sunlight-string:contains('assets')");
	assets.addClass('hand');
	assets.on("click", function() {
		$this = $(this);
		var text = $this.text().replace(/'/g, "");
		window.open(text, '_blank');
	});
	
	$("#editBtn").on("click", function() {
		$this = $(this);
		window.location.href = "example-edit-" + $this.data("id") + ".html";
	});
	
})(jQuery);
