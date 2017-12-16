(function($) {
	
    // 上传图片
    $("#uploadPic").on('click', function(e) {
    	e.preventDefault();
    	$("#pic").click();
    });

    $("#preBtn").on('click', function() {
        $("#pre").attr('src', $("#picUrl").html());
    });
    
    $("#pic").on('change', function(e) {
    	var fd = new FormData();
        fd.append(this.name, this.files[0]);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../inter/admin/uploadShowPic.php', true);
        xhr.upload.onprogress = function (ev) {
        	percent = 100 * ev.loaded / ev.total;
        	$("#picUrl").html(percent);
        }
        xhr.onload = function() {
        	if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                	$("#picUrl").html(xhr.responseText);
                }
        	}
        }
        xhr.send(fd);
    });
    
    // 提交教程
    $("#subBtn").on('click', function(e) {
    	var params = $("#showForm").serialize();
    	$.post('../inter/admin/submitShow.php', params, function(data) {
    		if(data == "success") {
    			window.alert('提交成功');
    		} else {
    			window.alert('提交失败');
    		}
    	});
    	
    });
    
})(jQuery);