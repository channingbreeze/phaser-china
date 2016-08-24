<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';

class NewsService {
	
	public function selectNewsById($id) {
		
		$sql = "select * from pc_news where id=" . $id;
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
		
	}
	
	public function selectAllNews() {
		
		$sqlHelper = new SQLHelper();
		$sql = "select * from pc_news order by news_order desc";
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
				
	}
	
	public function addNews($title, $author, $keywords, $description, $content, $newsOrder) {
		
		$sqlHelper = new SQLHelper();
		$sql = "insert into pc_news (gmt_create, gmt_modify, title, author, keywords, description, content, news_order) values (now(), now(), '" . $title . "', '" . $author . "', '" . $keywords . "', '" . $description . "', '" . $content . "', " . $newsOrder . ")";
		$res = $sqlHelper->execute_dqm($sql);
		return $res;
		
	}
	
	public function updateNews($id, $title, $author, $keywords, $description, $content, $newsOrder) {
		
		$sqlHelper = new SQLHelper();
		$sql ="update pc_news set gmt_modify=now(), title='" . $title . "', author='" . $author . "', keywords='" . $keywords . "', description='" . $description . "', content='" . $content . "', news_order=" . $newsOrder . " where id=" . $id;
		$res = $sqlHelper->execute_dqm($sql);
		return $res;
		
	}
	
}

?>