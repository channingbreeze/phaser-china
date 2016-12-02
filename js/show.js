(function($) {
	
	$('#shows').find('li').on('click', function() {
		$this = $(this);
		window.open($this.data('url'));
	});
	
})(jQuery);