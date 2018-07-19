<?php
class NetUtil {
	
	static function combineGetUrl($url, $params) {
		$url = $url . "?";
		foreach ($params as $key => $value) {
			$url = $url . $key . "=" . $value . "&";
		}
		return $url;
	}
	
	static function get($url, $params, $headers = array()) {
		// 拼接url
		$url = NetUtil::combineGetUrl($url, $params);
		// 初始化
		$ch = curl_init();
		// 设置选项，包括URL
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// 设置header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		// 禁止检查https
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		// 执行并获取地址内容
		$output = curl_exec($ch);
		// 释放curl句柄
		curl_close($ch);
		// 返回数据
		return $output;
	}
	
	static function post($url, $params, $headers = array()) {
		// 初始化
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// post数据
		curl_setopt($ch, CURLOPT_POST, 1);
		// post的变量
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
		// 设置header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		// 禁止检查https
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		// 执行并获取地址内容
		$output = curl_exec($ch);
		// 释放curl句柄
		curl_close($ch);
		// 返回数据
		return $output;
	}
	
}

?>
