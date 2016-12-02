<?php 

session_start();
if(!isset($_SESSION['username'])) {
	echo "fail";
}

require_once dirname ( __FILE__ ) . '/../../tools/SQLHelper.class.php';
require_once dirname ( __FILE__ ) . '/../../tools/UniqueIdGenerator.class.php';
require_once dirname ( __FILE__ ) . '/../../tools/FileUploader.class.php';
require_once dirname ( __FILE__ ) . '/../../tools/ConfigUtil.class.php';

if(isset($_FILES['pic'])) {
	if(is_uploaded_file($_FILES['pic']['tmp_name'])) {
		$size = $_FILES['pic']['size'];
		$name = $_FILES['pic']['name'];
		$extension = substr($name, strpos($name, "."));
		$uniqueIdGenerator = new UniqueIdGenerator();
		$fileUploader = new FileUploader();
		$fileName = $uniqueIdGenerator->getUniqueId() . $extension;
		$filePath = $_FILES["pic"]["tmp_name"];
		if(ConfigUtil::getInstance()->isInDebugMode()) {
			move_uploaded_file($filePath, dirname ( __FILE__ ) . "/../../uploads/" . $fileName);
			$host = "http://localhost/phaser-china/uploads/";
		} else {
			$fileUploader->uploadFile($fileName, $filePath);
			$host = "http://7xjv6k.com1.z0.glb.clouddn.com/";
		}
		$url = $host . $fileName;
		$sqlHelper = new SQLHelper();
		$sql = "insert into pc_picture (gmt_create, gmt_modify, pic_name, pic_url, pic_size) values (now(), now(), '" . $name . "' ,'" . $url . "', ' " . $size . " ')";
		$res = $sqlHelper->execute_dqm($sql);
		if($res != 1) {
			echo "fail";
		} else {
			echo $url;
		}
	} else {
		echo "fail";
	}
} else {
	echo "fail";
}

?>
