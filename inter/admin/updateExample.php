<?php

session_start();
if(!isset($_SESSION['username'])) {
	echo "fail";
}

require_once dirname ( __FILE__ ) . '/../../services/ExampleService.class.php';

if(isset($_POST['id'])) {
	
	$id = $_POST['id'];
	
	if(isset($_POST['typeId'])) {
		$typeId = $_POST['typeId'];
	} else {
		$typeId = 0;
	}
	
	if(isset($_POST['exName'])) {
		$exName = $_POST['exName'];
	} else {
		$exName = "";
	}
	
	if(isset($_POST['picUrl'])) {
		$picUrl = $_POST['picUrl'];
	} else {
		$picUrl = "";
	}
	
	if(isset($_POST['jsDir'])) {
		$jsDir = $_POST['jsDir'];
	} else {
		$jsDir = "";
	}
	
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
	
	if(isset($_POST['exOrder']) && !empty($_POST['exOrder'])) {
		$exOrder = $_POST['exOrder'];
	} else {
		$exOrder = 0;
	}
	
	$exampleService = new ExampleService();
	$res = $exampleService->updateExample($id, $typeId, $exName, $picUrl, $jsDir, $explain, $discription, $exOrder);
	
	if($res) {
		echo "true";
	} else {
		echo "false";
	}
	
} else {
	echo "false";
}

?>