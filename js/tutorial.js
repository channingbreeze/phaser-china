(function($) {
	
	$(".tutorials").find('li').on('click', function() {
		$this = $(this);
		var id = $this.data('id');
		window.location.href = "tutorial-detail-" + id + ".html";
	});
	
	$(".pag").find('li').on('click', function() {
		$this = $(this);
		var id = $this.data('id');
		window.location.href = "tutorial-" + id + ".html";
	});
	
})(jQuery);