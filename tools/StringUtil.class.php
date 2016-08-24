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
	
}

?>
