<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';

class ShowService {
	
	public function addShow($gameUrl, $showName, $showAuthor, $showDescription, $showPlay, $picUrl, $showOrder) {
		
		$sql = "insert into pc_show (gmt_create, gmt_modify, game_url, show_name, show_author, show_description, show_play, pic_url, show_order) values (now(), now(), '" . $gameUrl . "', '" . $showName . "', '" . $showAuthor . "', '" . $showDescription . "', '" . $showPlay . "', '" . $picUrl . "', " . $showOrder . ");";
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dqm($sql);
		if($res == 1) {
			return true;
		} else {
			return false;
		}
		
	}
	
	public function selectAllShows() {
		
		$sql = "select * from pc_show order by show_order";
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
		
	}
	
	public function selectShowById($id) {
		
		$sql = "select * from pc_show where id=" . $id;
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
		
	}
	
	public function updateShow($id, $gameUrl, $showName, $showAuthor, $showDescription, $showPlay, $picUrl, $showOrder) {
		
		$sql = "update pc_show set gmt_modify=now(), game_url='" . $gameUrl . "', show_name='" . $showName . "', show_author='" . $showAuthor . "', show_description='" . $showDescription . "', show_play='" . $showPlay . "', pic_url='" . $picUrl . "', show_order=" . $showOrder . " where id=" . $id;
		
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dqm($sql);
		if($res == 0) {
			return false;
		} else {
			return true;
		}
		
	}
	
}

?>