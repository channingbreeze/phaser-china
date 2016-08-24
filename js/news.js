(function($) {
	
	var refreshNews = function(id) {
		$("#news").html(Handlebars.compile($("#news-template").html())(NEWS[id]));
	}
	
	$("#newsList").delegate('a', 'click', function() {
		$this = $(this);
		var id = $this.data('id');
		refreshNews(id);
	});
	
	refreshNews(0);
	
})(jQuery);