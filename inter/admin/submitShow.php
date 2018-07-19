<?php 

session_start();
if(!isset($_SESSION['username'])) {
	echo "fail";
}

require_once dirname ( __FILE__ ) . '/../../services/ShowService.class.php';

if(isset($_POST['gameUrl']) &&
	isset($_POST['title']) &&
	isset($_POST['author']) &&
	isset($_POST['description']) &&
	isset($_POST['play']) &&
	isset($_POST['pic']) &&
	isset($_POST['showOrder']) &&
	isset($_POST['gameType'])) {
	
	$gameUrl = $_POST['gameUrl'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$play = $_POST['play'];
	$pic = $_POST['pic'];
	$showOrder = $_POST['showOrder'];
	$gameType = $_POST['gameType'];
	
	if(isset($_POST['id'])) {
		$update = true;
		$id = $_POST['id'];
	} else {
		$update = false;
	}
	
	$showService = new ShowService();
	if(!$update) {
		$res = $showService->addShow($gameUrl, $title, $author, $description, $play, $pic, $showOrder, $gameType);
	} else {
		$res = $showService->updateShow($id, $gameUrl, $title, $author, $description, $play, $pic, $showOrder, $gameType);
	}

	if($res != 1) {
		echo "fail";
	} else {
		echo "success";
	}
	
} else {
	echo "fail";
}

?>
