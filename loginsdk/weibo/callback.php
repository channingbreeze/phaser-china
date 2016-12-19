<?php
session_start();

require_once( 'saetv2.ex.class.php' );
require_once dirname ( __FILE__ ) . '/../../services/UserService.class.php';

$arr = parse_ini_file ( dirname ( __FILE__ ) . "/../../config/env.ini" );
$weiboAk = $arr ['weiboAk'];
$weiboSk = $arr ['weiboSk'];
$callbackUrl = 'http://www.phaser-china.com/loginsdk/weibo/callback.php';

$o = new SaeTOAuthV2($weiboAk, $weiboSk);

if (isset($_REQUEST['code'])) {
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = $callbackUrl;
	try {
		$token = $o->getAccessToken( 'code', $keys ) ;
	} catch (OAuthException $e) {
	}
}

if ($token) {
	$_SESSION['token'] = $token;
	setcookie( 'weibojs_'.$o->client_id, http_build_query($token) );
	
	$c = new SaeTClientV2($weiboAk, $weiboSk, $_SESSION['token']['access_token'] );
	$uid_get = $c->get_uid();
	$uid = $uid_get['uid'];
	$user_message = $c->show_user_by_id( $uid);//根据ID获取用户等基本信息
	
	$userService = new UserService();
	$userService->weiboLogin($user_message["screen_name"], $user_message["profile_image_url"], $token["uid"], $token["access_token"]);
	$loginBackUrl = $_COOKIE["loginBackUrl"];
	header("Location: " . $loginBackUrl);
	
} else {
	$loginBackUrl = $_COOKIE["loginBackUrl"];
	header("Location: " . $loginBackUrl);
}
?>
