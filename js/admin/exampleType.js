(function($){
	
	$("#add").on('click', function(e) {
		e.preventDefault();
		$.post('../inter/admin/addExampleType.php', $("#exampleTypeForm").serialize(), function(data) {
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
		$.post('../inter/admin/updateExampleType.php', 'id=' + id + '&' + $("#exampleTypeForm").serialize(), function(data) {
			if(data == "true") {
				window.location.reload();
			} else {
				window.alert("fail");
			}
		});
	});
	
})(jQuery);