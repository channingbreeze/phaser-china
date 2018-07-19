(function($) {
	
	$("#showTable").find('a').on('click', function(e) {
		e.preventDefault();
		$this = $(this);
		var id = $this.data('id');
		window.location.href = "addShow.php?id=" + id;
	});
	
})(jQuery);