<?php

session_start();

include_once( 'saetv2.ex.class.php' );

$arr = parse_ini_file ( dirname ( __FILE__ ) . "/../../config/env.ini" );
$weiboAk = $arr ['weiboAk'];
$weiboSk = $arr ['weiboSk'];

$o = new SaeTOAuthV2($weiboAk, $weiboSk);

$callbackUrl = 'http://www.phaser-china.com/loginsdk/weibo/callback.php';
$code_url = $o->getAuthorizeURL($callbackUrl);

header("Location: " . $code_url);

?>
