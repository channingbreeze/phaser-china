$(function() {
	$('.banner').unslider({
		speed: 500,               //  The speed to animate each slide (in milliseconds)
		delay: 3000,              //  The delay between slide animations (in milliseconds)
		complete: function() {},  //  A function that gets called after every slide animation
		keys: true,               //  Enable keyboard (left, right) arrow shortcuts
		dots: true
	});
	
	$("#circles").find('li').on('click', function() {
		$this = $(this);
		window.location.href = $this.data('href');
	});
	
	$("#examples").find('li').on('click', function() {
		$this = $(this);
		window.location.href = "tutorial-detail-" + $this.data('id') + ".html";
	});
});