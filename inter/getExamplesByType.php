<?php

require_once dirname ( __FILE__ ) . '/../services/ExampleService.class.php';
require_once dirname ( __FILE__ ) . '/../services/ExampleTypeService.class.php';

if(isset($_GET['typeId'])) {
	
	$typeId = $_GET['typeId'];
	$exampleService = new ExampleService();
	$res = $exampleService->selectExampleByType($typeId);
	echo json_encode($res);
	
} else {
	
	$exampleTypeService = new ExampleTypeService();
	$res = $exampleTypeService->selectAllExampleTypes();
	echo json_encode($res);
	
}

?>