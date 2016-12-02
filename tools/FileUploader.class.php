<?php 

require_once dirname ( __FILE__ ) . '/../qiniu/autoload.php';
require_once dirname ( __FILE__ ) . '/ConfigUtil.class.php';

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use Qiniu\Storage\BucketManager;

class FileUploader
{
	private $accessKey;
	private $secretKey;
	private $bucket;
	private $auth;
	private $token;
	private $uploadMgr;
	private $bmgr;
	
	function __construct() {
		$this->accessKey = ConfigUtil::getInstance()->accessKey;
		$this->secretKey = ConfigUtil::getInstance()->secretKey;
		$this->bucket = ConfigUtil::getInstance()->bucket;
		$this->auth = new Auth($this->accessKey, $this->secretKey);
		$this->token = $this->auth->uploadToken($this->bucket);
		$this->uploadMgr = new UploadManager();
		$this->bmgr = new BucketManager($this->auth);
	}
	
	public function uploadFile($fileName, $filePath) {
		$this->uploadMgr->putFile($this->token, $fileName, $filePath);
	}
	
	public function fetchFile($fileName, $url) {
		list($ret, $err) = $this->bmgr->fetch($url, $this->bucket, $fileName);
		if ($err !== null) {
			return false;
		} else {
			return true;
		}
	}
	
}


?>