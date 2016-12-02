(function($) {
	
	var bindExamEvents = function() {
		$("#exams").find('li').on('click', function() {
			$this = $(this);
			window.open("example-detail-" + $this.data('id') + ".html");
		});
	}
	
	var refreshExam = function(id, name) {
		$("#title").html(name);
		$.get('inter/getExamplesByType.php', {typeId: id}, function(data) {
			$("#exams").html(Handlebars.compile($("#exs-template").html())(JSON.parse(data)));
			bindExamEvents();
		});
	}
	
	var bindTypeEvents = function() {
		$("#exams").find('li').on('click', function() {
			$this = $(this);
			window.location.href = "example-" + $this.data('id') + ".html";
		});
	}
	
	var refreshAll = function() {
		$.get('inter/getExamplesByType.php', '', function(data) {
			$("#exams").html(Handlebars.compile($("#exTypes-template").html())(JSON.parse(data)));
			bindTypeEvents();
		});
	}
	
	$("#exTypes").find('li').on('click', function() {
		$this = $(this);
		var id = $this.data('id');
		if(id) {
			var name = $this.data('name');
			window.location.href = "example-" + id + ".html";
		} else {
			$("#title").html("SELECT A CATEGORY");
			window.location.href = "example.html";
		}
	});
	
	if(typeof(TYPE_ID) != 'undefined' && typeof(TYPE_NAME) != 'undefined') {
		refreshExam(TYPE_ID, TYPE_NAME);
	} else {
		refreshAll();
	}
	
})(jQuery);