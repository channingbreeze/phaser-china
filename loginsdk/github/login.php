<?php

require_once dirname ( __FILE__ ) . '/../../tools/NetUtil.class.php';

$arr = parse_ini_file ( dirname ( __FILE__ ) . "/../../config/env.ini" );
$githubAk = $arr ['githubAk'];
$githubSk = $arr ['githubSk'];

$AUTHORIZE_URL = "https://github.com/login/oauth/authorize";

$params = array();
$params["client_id"] = $githubAk;
$params["redirect_uri"] = "http://www.phaser-china.com/loginsdk/github/callback.php";
$params["state"] = time() . rand();

$url = NetUtil::combineGetUrl($AUTHORIZE_URL, $params);

header("Location: " . $url);

?>
