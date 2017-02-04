<?php
session_start();

require_once dirname ( __FILE__ ) . '/../../tools/NetUtil.class.php';
require_once dirname ( __FILE__ ) . '/../../services/UserService.class.php';

$arr = parse_ini_file ( dirname ( __FILE__ ) . "/../../config/env.ini" );
$githubAk = $arr ['githubAk'];
$githubSk = $arr ['githubSk'];

$TOKEN_URL = "https://github.com/login/oauth/access_token";
$USERINFO_URL = "https://api.github.com/user";
$callbackUrl = "http://www.phaser-china.com/loginsdk/github/callback.php";

if (isset($_REQUEST['code'])) {
	$params = array();
	$params['code'] = $_REQUEST['code'];
	$params['client_id'] = $githubAk;
	$params['client_secret'] = $githubSk;
	$params["state"] = $_REQUEST['state'];
	
	// 设置header，返回json
	$headers = array (
		"Content-type: application/json;charset='utf-8'",
		"Accept: application/json",
		"Cache-Control: no-cache",
		"Pragma: no-cache",
	);
	$res = NetUtil::post($TOKEN_URL, $params, $headers);
	$res = json_decode($res, true);
	$token = $res['access_token'];
}

if ($token) {
	$_SESSION['token'] = $token;
	$params = array();
	$params['access_token'] = $token;
	// 设置header，OAUTH-TOKEN
	$headers = array (
		"User-Agent: channingbreeze@163.com",
	);
	$res = NetUtil::get($USERINFO_URL, $params, $headers);
	$res = json_decode($res, true);
	var_dump($res);
	
	$userService = new UserService();
	$userService->githubLogin($res["name"], $res["avatar_url"], $res["id"], $token);
	$loginBackUrl = $_COOKIE["loginBackUrl"];
	header("Location: " . $loginBackUrl);

} else {
	$loginBackUrl = $_COOKIE["loginBackUrl"];
	header("Location: " . $loginBackUrl);
}

?>
