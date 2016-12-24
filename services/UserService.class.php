<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';
require_once dirname ( __FILE__ ) . '/../tools/StringUtil.class.php';

class UserService {
	
	public function checkUsername($username) {
	
		if(!StringUtil::checkEmail($username)) {
			return false;
		}
	
		$sql = "select up.*, ua.* from user_profile up, user_auth ua where up.username='" . $username . "' and up.id=ua.user_id and ua.auth_type=0";
		$sqlHelper = new SQLHelper();
		$userArr = $sqlHelper->execute_dql_array($sql);
		if(count($userArr) != 0) {
			return false;
		} else {
			return true;
		}
	}
	
	public function login($username, $password) {
		
		if(!StringUtil::checkEmail($username)) {
			return false;
		}
		
		$sql = "select up.*, ua.* from user_profile up, user_auth ua where up.username='" . $username . "' and up.id=ua.user_id and ua.auth_type=0";
		$sqlHelper = new SQLHelper();
		$userArr = $sqlHelper->execute_dql_array($sql);
		if(count($userArr) != 1) {
			return false;
		}
		$userInfo = $userArr[0];

		if(md5($password) != $userInfo["access_token"]) {
			return false;
		}
		
		// 用户信息放入session
		$user = array();
		$user["username"] = $userInfo["username"];
		$user["headUrl"] = $userInfo["head_url"];
		$_SESSION['user'] = $user;
		
		return true;
	
	}
	
	public function register($username, $password) {
		
		if(!StringUtil::checkEmail($username)) {
			return false;
		}
		
		$sqlHelper = new SQLHelper();
		// 检查用户名是否被注册
		$sql = "select up.*, ua.* from user_profile up, user_auth ua where up.username='" . $username . "' and up.id=ua.user_id and ua.auth_type=0";
		$userArr = $sqlHelper->execute_dql_array($sql);
		if(count($userArr) != 0) {
			return false;
		}
		// 添加用户信息
		$sql = "insert into user_profile (gmt_create, gmt_modify, username, head_url, prioity, score) values (now(), now(), '" . $username . "', '', 1, 0)";
		$res = $sqlHelper->execute_dqm($sql);
		if($res != 1) {
			return false;
		}
		$userId = $sqlHelper->getLastInsertedId();
		// 添加认证信息
		$sql = "insert into user_auth (gmt_create, gmt_modify, user_id, auth_type, open_id, access_token) values (now(), now(), " . $userId . ", 0, null, md5('" . $password . "'))";
		$res = $sqlHelper->execute_dqm($sql);
		if($res != 1) {
			return false;
		}
		
		// 用户信息放入session
		$user = array();
		$user["username"] = $username;
		$_SESSION['user'] = $user;
		
		return true;
	}
	
	public function weiboLogin($username, $headUrl, $openId, $accessToken) {
		
		$sqlHelper = new SQLHelper();
		// 检查openId是否已经记录过
		$sql = "select up.*, ua.* from user_profile up, user_auth ua where ua.open_id='" . $openId . "' and up.id=ua.user_id and ua.auth_type=1";
		$userArr = $sqlHelper->execute_dql_array($sql);
		if(count($userArr) > 1) {
			return false;
		} else if(count($userArr) == 1) {
			// 已有用户
			$user = $userArr[0];
			if($user["username"] != $username || 
				$user["head_url"] != $headUrl ||
				$user["access_token"] != $accessToken) {
				if($user["username"] == $username && $user["head_url"] == $headUrl) {
					$sql = "update user_auth set access_token='" . $accessToken . "' where open_id='" . $openId . "'";
				} else {
					$sql = "update user_profile up, user_auth ua set up.username='" . $username . "', up.head_url='" . $headUrl . "', ua.access_token='" . $accessToken . "' where ua.open_id='" . $openId . "' and up.id=ua.user_id";
				}
				$sqlHelper->execute_dqm($sql);
			}
		} else {
			// 添加用户信息
			$sql = "insert into user_profile (gmt_create, gmt_modify, username, head_url, prioity, score) values (now(), now(), '" . $username . "', '" . $headUrl . "', 1, 0)";
			$res = $sqlHelper->execute_dqm($sql);
			if($res != 1) {
				return false;
			}
			$userId = $sqlHelper->getLastInsertedId();
			// 添加认证信息
			$sql = "insert into user_auth (gmt_create, gmt_modify, user_id, auth_type, open_id, access_token) values (now(), now(), " . $userId . ", 1, '" . $openId . "', '" . $accessToken . "')";
			$res = $sqlHelper->execute_dqm($sql);
			if($res != 1) {
				return false;
			}
		}
		// 用户信息放入session
		$user = array();
		$user["username"] = $username;
		$user["headUrl"] = $headUrl;
		$_SESSION['user'] = $user;
		
		return true;
		
	}
	
	public function qqLogin($username, $headUrl, $openId, $accessToken) {
	
		$sqlHelper = new SQLHelper();
		// 检查openId是否已经记录过
		$sql = "select up.*, ua.* from user_profile up, user_auth ua where ua.open_id='" . $openId . "' and up.id=ua.user_id and ua.auth_type=2";
		$userArr = $sqlHelper->execute_dql_array($sql);
		if(count($userArr) > 1) {
			return false;
		} else if(count($userArr) == 1) {
			// 已有用户
			$user = $userArr[0];
			if($user["username"] != $username ||
					$user["head_url"] != $headUrl ||
					$user["access_token"] != $accessToken) {
				if($user["username"] == $username && $user["head_url"] == $headUrl) {
					$sql = "update user_auth set access_token='" . $accessToken . "' where open_id='" . $openId . "'";
				} else {
					$sql = "update user_profile up, user_auth ua set up.username='" . $username . "', up.head_url='" . $headUrl . "', ua.access_token='" . $accessToken . "' where ua.open_id='" . $openId . "' and up.id=ua.user_id";
				}
				$sqlHelper->execute_dqm($sql);
			}
		} else {
			// 添加用户信息
			$sql = "insert into user_profile (gmt_create, gmt_modify, username, head_url, prioity, score) values (now(), now(), '" . $username . "', '" . $headUrl . "', 1, 0)";
			$res = $sqlHelper->execute_dqm($sql);
			if($res != 1) {
				return false;
			}
			$userId = $sqlHelper->getLastInsertedId();
			// 添加认证信息
			$sql = "insert into user_auth (gmt_create, gmt_modify, user_id, auth_type, open_id, access_token) values (now(), now(), " . $userId . ", 2, '" . $openId . "', '" . $accessToken . "')";
			$res = $sqlHelper->execute_dqm($sql);
			if($res != 1) {
				return false;
			}
		}
		// 用户信息放入session
		$user = array();
		$user["username"] = $username;
		$user["headUrl"] = $headUrl;
		$_SESSION['user'] = $user;
	
		return true;
	
	}
	
}

?>