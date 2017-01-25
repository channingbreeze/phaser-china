<?php
class NetUtil {
	
	static function get($url, $params) {
		$url = $url . "?";
		foreach ($params as $key => $value) {
			$url = $url . $key . "=" . $value . "&";
		}
		// 初始化
		$ch = curl_init ();
		// 设置选项，包括URL
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $ch, CURLOPT_HEADER, 0 );
		// 执行并获取HTML文档内容
		$output = curl_exec ( $ch );
		// 释放curl句柄
		curl_close ( $ch );
		// 打印获得的数据
		print_r ( $output );
	}
	
	static function post($url, $params) {
		// 初始化
		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
		// post数据
		curl_setopt ( $ch, CURLOPT_POST, 1 );
		// post的变量
		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $params );
		$output = curl_exec ( $ch );
		curl_close ( $ch );
		// 打印获得的数据
		print_r ( $output );
	}
	
}

?>
