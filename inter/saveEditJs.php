<?php

if(isset($_POST['source'])) {
	$source = $_POST['source'];
	file_put_contents('../js/user/global.js', $source);
	echo "success";
} else {
	echo "fail";
}

?>
