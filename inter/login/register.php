<?php

require_once dirname ( __FILE__ ) . '/../../services/UserService.class.php';

if(!isset($_POST['username']) && !isset($_POST['password'])) {
	echo "param missing";
} else {

	session_start();
	$userService = new UserService();
	$res = $userService->register($_POST['username'], $_POST['password']);
	if($res) {
		echo "success";
	} else {
		echo "username already used";
	}

}

?>
