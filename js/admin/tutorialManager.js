(function($) {
	
	$("#tutorialTable").find('a').on('click', function(e) {
		e.preventDefault();
		$this = $(this);
		var id = $this.data('id');
		window.location.href = "addTutorial.php?id=" + id;
	});
	
})(jQuery);