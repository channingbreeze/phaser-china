<?php

require_once("API/qqConnectAPI.php");
require_once dirname ( __FILE__ ) . '/../../services/UserService.class.php';

$oauth = new OAuth();

$accessToken = $oauth->qq_callback();
$openId = $oauth->get_openid();

if($accessToken) {
	$qc = new QC($accessToken, $openId);
	$userInfo = $qc->get_user_info();
	
	$userService = new UserService();
	$userService->qqLogin($userInfo["nickname"], $userInfo["figureurl_qq_2"], $openId, $accessToken);
	$loginBackUrl = $_COOKIE["loginBackUrl"];
	header("Location: " . $loginBackUrl);
} else {
	$loginBackUrl = $_COOKIE["loginBackUrl"];
	header("Location: " . $loginBackUrl);
}


?>
