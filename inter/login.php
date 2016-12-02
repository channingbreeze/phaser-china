<?php

require_once dirname ( __FILE__ ) . '/../tools/ConfigUtil.class.php';

	session_start();
	if(isset($_SESSION['username'])) {
		header("Location: ../admin/index.php");
	} else {
		if( isset($_POST['username']) &&
			isset($_POST['password']) ) {
			
			if( strcmp(ConfigUtil::getInstance()->username, $_POST['username']) == 0 &&
				strcmp(ConfigUtil::getInstance()->password, $_POST['password']) == 0 ) {
				$_SESSION['username'] = $_POST['username'];
				header("Location: ../admin/index.php");
				
			} else {
				header("Location: ../admin/login.php");
			}
			
		} else {
			header("Location: ../admin/login.php");
		}
	}

?>