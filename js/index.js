$(function() {
	$('.banner').unslider({
		speed: 500,               //  The speed to animate each slide (in milliseconds)
		delay: 10000,              //  The delay between slide animations (in milliseconds)
		complete: function() {},  //  A function that gets called after every slide animation
		keys: true,               //  Enable keyboard (left, right) arrow shortcuts
		dots: true
	});
	
	$("#downloadExample").on('click', function() {
		window.location.href = "inter/download/downloadFile.php?file=example";
	});

	$("#gotoHuizhi").on('click', function() {
		window.open("http://xc.hubwiz.com/course/59b1c2fcc7fd1d494539802c?affid=phaser-china");
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