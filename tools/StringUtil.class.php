<?php
class StringUtil {
	
	static function startsWith($src, $sub) {
		if (strlen ( $src ) < strlen ( $sub )) {
			return false;
		} else {
			return ! substr_compare ( $src, $sub, 0, strlen ( $sub ) );
		}
	}
	
	static function endsWith($src, $sub) {
		if (strlen ( $src ) < strlen ( $sub )) {
			return false;
		} else {
			return ! substr_compare ( $src, $sub, strlen ( $src ) - strlen ( $sub ), strlen ( $sub ) );
		}
	}
	
	static function checkEmail($str) {
		$pattern="/^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/i";
		if(preg_match($pattern, $str)){
			return true;
		} else{
			return false;
		}
	}
	
}

?>
