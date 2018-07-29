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
		window.open("example-edit-" + $this.data("id") + ".html", '_blank');
	});

	$("#downloadBtn").on("click", function() {
		$this = $(this);
		window.open("inter/download/downloadExample.php?id=" + $this.data("id"), '_blank');
	});
	
})(jQuery);
