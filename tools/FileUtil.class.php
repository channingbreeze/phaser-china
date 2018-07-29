<?php

class FileUtil {
  
  // 强制删除文件夹及其内部文件 , forceDeleteDir("/tmp/example/");
  static function forceDeleteDir($path) {
    //如果是目录则继续
    if(is_dir($path)){
      //扫描一个文件夹内的所有文件夹和文件并返回数组
      $p = scandir($path);
      foreach($p as $val) {
        //排除目录中的.和..
        if($val != "." && $val != "..") {
          //如果是目录则递归子目录，继续操作
          if(is_dir($path . $val)) {
            //子目录中操作删除文件夹和文件
            FileUtil::forceDeleteDir($path . $val . "/");
            //目录清空后删除空文件夹
            rmdir($path . $val . "/");
          } else {
            //如果是文件直接删除
            unlink($path . $val);
          }
        }
      }
      rmdir($path);
    }
  }

}

?>
