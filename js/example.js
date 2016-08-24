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
			refreshExam($this.data('id'), $this.data('name'));
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
			refreshExam(id, name);
		} else {
			$("#title").html("SELECT A CATEGORY");
			refreshAll();
		}
	});
	
	refreshAll();
	
})(jQuery);