(function($) {
	
	$('#shows').find('li').on('click', function() {
		$this = $(this);
		window.open($this.data('url'));
	});

  $(".tab").find('li').on('click', function() {
    $this = $(this);
    var type = $this.data('type');
    window.location.href = "show-" + type + ".html";
  });
	
})(jQuery);