<?php

if(isset($_GET['file'])) {
	
	$file = "../../downloads/" . $_GET['file'] . ".zip";
	
	// 判断file是否存在
	if(file_exists($file)) {
		$filename = basename($file);
		
		header("Content-type: application/octet-stream");
		
		//处理中文文件名
		$ua = $_SERVER["HTTP_USER_AGENT"];
		$encoded_filename = rawurlencode($filename);
		if (preg_match("/MSIE/", $ua)) {
			header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
		} else if (preg_match("/Firefox/", $ua)) {
			header("Content-Disposition: attachment; filename*=\"utf8''" . $filename . '"');
		} else {
			header('Content-Disposition: attachment; filename="' . $filename . '"');
		}
		
		header("Content-Length: ". filesize($file));
		readfile($file);
	} else {
		header('HTTP/1.1 404 Not Found');
		header("status: 404 Not Found");
	}
	
} else {
	header('HTTP/1.1 404 Not Found');
	header("status: 404 Not Found");
}

?>