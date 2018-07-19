<?php

require_once dirname ( __FILE__ ) . '/../tools/NetUtil.class.php';

class SearchService {
	
	public function search($text) {
	
		$params = array();
		$params["keyword"] = $text;
		$res = NetUtil::get("http://localhost:8000/search_docs", $params);
		// TODO: maybe we can do some highlights
		return $res;
		
	}
	
}

?>