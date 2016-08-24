<?php

session_start();
if(!isset($_SESSION['username'])) {
	echo "fail";
}

require_once dirname ( __FILE__ ) . '/../../services/ExampleTypeService.class.php';

if(isset($_POST['typeName'])) {
	
	$typeName = $_POST['typeName'];
	
	if(isset($_POST['smallPicUrl'])) {
		$smallPicUrl = $_POST['smallPicUrl'];
	} else {
		$smallPicUrl = "";
	}
	
	if(isset($_POST['bigPicUrl'])) {
		$bigPicUrl = $_POST['bigPicUrl'];
	} else {
		$bigPicUrl = "";
	}
	
	if(isset($_POST['discription'])) {
		$discription = $_POST['discription'];
	} else {
		$discription = "";
	}
	
	if(isset($_POST['typeOrder'])) {
		$typeOrder = $_POST['typeOrder'];
	} else {
		$typeOrder = "";
	}
	
	$exampleTypeService = new ExampleTypeService();
	$res = $exampleTypeService->addExampleType($typeName, $smallPicUrl, $bigPicUrl, $discription, $typeOrder);
	
	if($res) {
		echo "true";
	} else {
		echo "false";
	}
	
} else {
	echo "false";
}

?>