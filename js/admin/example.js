(function($) {
	
	$("#add").on('click', function(e) {
		e.preventDefault();
		$.post('../inter/admin/addExample.php', $("#exampleForm").serialize(), function(data) {
			if(data == "true") {
				window.location.reload();
			} else {
				window.alert("fail");
			}
		});
	});
	
	$("#update").on('click', function(e) {
		e.preventDefault();
		var id = $(this).data('id');
		$.post('../inter/admin/updateExample.php', 'id=' + id + '&' + $("#exampleForm").serialize(), function(data) {
			if(data == "true") {
				window.location.reload();
			} else {
				window.alert("fail");
			}
		});
	});
	
})(jQuery);