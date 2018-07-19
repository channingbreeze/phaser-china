<?php 

session_start();
if(!isset($_SESSION['username'])) {
	echo "fail";
}

require_once dirname ( __FILE__ ) . '/../../services/TutorialService.class.php';

if(isset($_POST['title']) &&
	isset($_POST['author']) &&
	isset($_POST['pic']) &&
	isset($_POST['abstract']) &&
	isset($_POST['keywords']) &&
	isset($_POST['description']) &&
	isset($_POST['toturialOrder']) &&
	isset($_POST['tutorial'])) {
	
	$title = $_POST['title'];
	$author = $_POST['author'];
	$pic = $_POST['pic'];
	$abstract = $_POST['abstract'];
	$keywords = $_POST['keywords'];
	$description = $_POST['description'];
	$toturialOrder = $_POST['toturialOrder'];
	$content = $_POST['tutorial'];
	
	if(isset($_POST['id'])) {
		$update = true;
		$id = $_POST['id'];
	} else {
		$update = false;
	}
	
	$tutorialService = new TutorialService();
	
	if(!$update) {
		$res = $tutorialService->addTutorial($title, $author, $pic, $abstract, $keywords, $description, $content, $toturialOrder);
	} else {
		$res = $tutorialService->updateTutorial($id, $title, $author, $pic, $abstract, $keywords, $description, $content, $toturialOrder);
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
