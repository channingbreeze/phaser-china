<?php 

session_start();
if(!isset($_SESSION['username'])) {
	echo "fail";
}

require_once dirname ( __FILE__ ) . '/../../tools/SQLHelper.class.php';
require_once dirname ( __FILE__ ) . '/../../tools/FileUploader.class.php';
require_once dirname ( __FILE__ ) . '/../../tools/ConfigUtil.class.php';

if(isset($_FILES['pic'])) {
	if(is_uploaded_file($_FILES['pic']['tmp_name'])) {
		$size = $_FILES['pic']['size'];
		$name = $_FILES['pic']['name'];
		$fileUploader = new FileUploader();
		$fileName = $name;
		$filePath = $_FILES["pic"]["tmp_name"];
		if(ConfigUtil::getInstance()->isInDebugMode()) {
			move_uploaded_file($filePath, dirname ( __FILE__ ) . "/../../images/show/" . $fileName);
			$host = "http://host.phaser-china.com/images/show/";
		} else {
			$fileUploader->uploadFile($fileName, $filePath);
			$host = "http://qiniu.webxinxin.com/";
		}
		$url = $host . $fileName;
		echo $url;
	} else {
		echo "fail";
	}
} else {
	echo "fail";
}

?>
