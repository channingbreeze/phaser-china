(function($) {
	
	var el = document.getElementById("editor");
	
	// setup paths
	require.config({paths: { "ace" : "js/lib/acelib/lib/ace"}});
	// load ace and extensions
	require(["ace/ace", "ace/ext/emmet"], function(ace) {
	    var editor = ace.edit("editor");
	    editor.session.setMode("ace/mode/javascript");
	    // enable emmet on the current editor
	    editor.setOption("enableEmmet", true);
	    // monokai tomorrow_night
	    editor.setTheme("ace/theme/tomorrow_night");
	});
	
	if (typeof ace == "undefined" && typeof require == "undefined") {
	    document.body.innerHTML = "<p style='padding: 20px 50px;'>couldn't find ace.js file, <br>"
	        + "to build it run <code>node Makefile.dryice.js full<code>"
	} else if (typeof ace == "undefined" && typeof require != "undefined") {
	    require(["ace/ace"], setValue)
	} else {
	    require = ace.require;
	    setValue()
	}

	function setValue() {
	    require("ace/lib/net").get('js/user/global.js?now=' + new Date().getTime(), function(t){
	        el.env.editor.setValue(t, 1);
	    })
	}
	
	$("#runBtn").on("click", function() {
		$.post('inter/saveEditJs.php', {source: el.env.editor.getValue()}, function(data) {
			if(data == "success") {
				window.location.href = "example-edit.html";
			} else {
				window.alert("竟然失败了，不可能啊");
			}
		});
	});
	
})(jQuery);