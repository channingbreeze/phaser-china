<?php

if(isset($_POST['code'])){
	if(!empty($_POST['code'])){
		echo '您好，',$_POST['code'].'！';
	}
} else {
	echo "none";
}
?>