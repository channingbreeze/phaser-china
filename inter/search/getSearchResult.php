<?php

require_once dirname ( __FILE__ ) . '/../../services/SearchService.class.php';

if(isset($_GET['text'])) {
	
	$text = $_GET['text'];
	$searchService = new SearchService();
	$res = $searchService->search($text);
	echo $res;
	
} else {
	
	echo "no param data";
	
}

?>