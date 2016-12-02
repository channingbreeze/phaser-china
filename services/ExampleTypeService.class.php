<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';

class ExampleTypeService {
	
	public function addExampleType($typename, $typeSmallPicUrl, $typeBigPicUrl, $discription, $typeOrder) {
		
		$sql = "insert into pc_example_type (gmt_create, gmt_modify, typename, type_small_pic_url, type_big_pic_url, typecount, discription, type_order) values (now(), now(), '" . $typename . "', '" . $typeSmallPicUrl . "', '" . $typeBigPicUrl . "', 0, '" . $discription . "', " . $typeOrder . ")";
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dqm($sql);
		if($res == 1) {
			return true;
		} else {
			return false;
		}
		
	}
	
	public function selectAllExampleTypes() {
		
		$sql = "select * from pc_example_type order by type_order desc";
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
		
	}
	
	public function addCountById($id) {
		
		$sql = "update pc_example_type set typecount=typecount+1 where id=" . $id;
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dqm($sql);
		if($res == 1) {
			return true;
		} else {
			return false;
		}
		
	}
	
	public function selectExampleTypeById($id) {
		
		$sql = "select * from pc_example_type where id=" . $id;
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
		
	}
	
	public function updateExampleTypeById($id, $typeName, $smallPicUrl, $bigPicUrl, $discription, $typeOrder) {
		
		$sql = "update pc_example_type set gmt_modify=now(), typename='" . $typeName . "', type_small_pic_url='" . $smallPicUrl . "', type_big_pic_url='" . $bigPicUrl . "', discription='" . $discription . "', type_order=" . $typeOrder . " where id=" . $id;
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