<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';

class TutorialService {
	
	private $tutorialPerPage = 3;
	
	public function selectTutorialById($id) {
		
		$sql = "select * from pc_tutorial where id=" . $id;
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
		
	}
	
	public function selectAllTutorials() {
		
		$sql = "select * from pc_tutorial";
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
		
	}
	
	public function selectTutorialsByPage($page) {
		
		$arr = array();
		
		$sqlHelper = new SQLHelper();
		$sql = "select count(id) as count from pc_tutorial";
		$count = $sqlHelper->execute_dql_array($sql);
		$count = $count[0]['count'];		
		
		if($count % $this->tutorialPerPage == 0) {
			$total = intval(floor($count / $this->tutorialPerPage));
		} else {
			$total = intval(floor($count / $this->tutorialPerPage)) + 1;
		}
		
		$start = ($page - 1) * $this->tutorialPerPage;
		
		$sql = "select * from pc_tutorial limit " . $start . "," . $this->tutorialPerPage;
		$res = $sqlHelper->execute_dql_array($sql);
		
		$arr['curPage'] = $page;
		$arr['total'] = $total;
		$arr['data'] = $res;
		
		return $arr;
		
	}
	
	public function addTutorial($title, $author, $pic, $abstract, $keywords, $description, $content, $toturialOrder) {
		
		$sqlHelper = new SQLHelper();
		$sql = "insert into pc_tutorial (gmt_create, gmt_modify, title, author, pic, abstract, keywords, description, content, tutorial_order) values (now(), now(), '" . $title . "', '" . $author . "', '" . $pic . "', '" . $abstract . "', '" . $keywords . "', '" . $description . "', '" . $content . "', " . $toturialOrder . ")";
		$res = $sqlHelper->execute_dqm($sql);
		return $res;
		
	}
	
	public function updateTutorial($id, $title, $author, $pic, $abstract, $keywords, $description, $content, $toturialOrder) {
	
		$sqlHelper = new SQLHelper();
		$sql = "update pc_tutorial set gmt_modify=now(), title='" . $title . "', author='" . $author . "', pic='" . $pic . "', abstract='" . $abstract .  "', keywords='" . $keywords . "', description='" . $description . "', content='" . $content . "', tutorial_order=" . $toturialOrder . " where id=" . $id;
		$res = $sqlHelper->execute_dqm($sql);
		return $res;
	
	}
	
	public function selectTutorialsLastN($num) {
		
		$sql = "select * from pc_tutorial order by tutorial_order desc limit 0, " . $num;
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
		
	}
	
}

?>