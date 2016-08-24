<?php 

session_start();
if(!isset($_SESSION['username'])) {
	echo "fail";
}

require_once dirname ( __FILE__ ) . '/../../services/NewsService.class.php';

if(isset($_POST['title']) &&
	isset($_POST['author']) &&
	isset($_POST['keywords']) &&
	isset($_POST['description']) &&
	isset($_POST['newsOrder']) &&
	isset($_POST['news'])) {
	
	$title = $_POST['title'];
	$author = $_POST['author'];
	$keywords = $_POST['keywords'];
	$description = $_POST['description'];
	$newsOrder = $_POST['newsOrder'];
	$content = $_POST['news'];
	
	if(isset($_POST['id'])) {
		$update = true;
		$id = $_POST['id'];
	} else {
		$update = false;
	}
	
	$newsService = new NewsService();
	
	if(!$update) {
		$res = $newsService->addNews($title, $author, $keywords, $description, $content, $newsOrder);
	} else {
		$res = $newsService->updateNews($id, $title, $author, $keywords, $description, $content, $newsOrder);
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
