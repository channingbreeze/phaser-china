<?php

session_start();
if(!isset($_SESSION['username'])) {
	echo "fail";
}

require_once dirname ( __FILE__ ) . '/../../services/ExampleService.class.php';
require_once dirname ( __FILE__ ) . '/../../services/ExampleTypeService.class.php';

if(isset($_POST['typeId']) &&
	isset($_POST['exName']) &&
	isset($_POST['picUrl']) &&
	isset($_POST['jsDir'])) {
	
	$typeId = $_POST['typeId'];
	$exName = $_POST['exName'];
	$picUrl = $_POST['picUrl'];
	$jsDir = $_POST['jsDir'];
	
	if(isset($_POST['explain'])) {
		$explain = $_POST['explain'];
	} else {
		$explain = "";
	}
	
	if(isset($_POST['discription'])) {
		$discription = $_POST['discription'];
	} else {
		$discription = "";
	}
	
	if(isset($_POST['exOrder'])) {
		$exOrder = $_POST['exOrder'];
	} else {
		$exOrder = 0;
	}
	
	$exampleService = new ExampleService();
	$exampleServiceType = new ExampleTypeService();
	$exampleServiceType->addCountById($typeId);
	$res = $exampleService->addExample($typeId, $exName, $picUrl, $jsDir, $explain, $discription, $exOrder);
	
	if($res) {
		echo "true";
	} else {
		echo "false";
	}
	
} else {
	echo "false";
}

?>