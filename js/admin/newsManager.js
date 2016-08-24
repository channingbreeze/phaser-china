(function($) {
	
	$("#newsTable").find('a').on('click', function(e) {
		e.preventDefault();
		$this = $(this);
		var id = $this.data('id');
		window.location.href = "addNews.php?id=" + id;
	});
	
})(jQuery);