<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';

class ExampleService {
	
	public function addExample($typeId, $exName, $picUrl, $jsDir, $exExplain, $discription, $exOrder) {
		
		$sql = "insert into pc_example (gmt_create, gmt_modify, type_id, ex_name, pic_url, js_dir, ex_explain, discription, ex_order) values (now(), now(), " . $typeId . ", '" . $exName . "', '" . $picUrl . "', '" . $jsDir . "', '" . $exExplain . "', '" . $discription . "', " . $exOrder . ")";
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dqm($sql);
		if($res == 1) {
			return true;
		} else {
			return false;
		}
		
	}
	
	public function selectAllExamples() {
		
		$sql = "select * from pc_example order by type_id, ex_order";
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
		
	}
	
	public function selectExampleByType($typeId) {
		
		$sql = "select * from pc_example where type_id=" . $typeId . " order by ex_order";
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
		
	}
	
	public function selectExampleById($id) {
		
		$sql = "select * from pc_example where id=" . $id;
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
		
	}
	
	public function updateExample($id, $typeId, $exName, $picUrl, $jsDir, $exExplain, $discription, $exOrder) {
		
		$sql = "update pc_example set gmt_modify=now(), type_id=" . $typeId . ", ex_name='" . $exName . "', pic_url='" . $picUrl . "', js_dir='" . $jsDir . "', ex_explain='" . $exExplain . "', discription='" . $discription . "', ex_order=" . $exOrder . " where id=" . $id;
		
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