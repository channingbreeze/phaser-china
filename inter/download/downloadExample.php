<?php

require_once dirname ( __FILE__ ) . '/../../services/ExampleService.class.php';
require_once dirname ( __FILE__ ) . '/../../tools/FileUtil.class.php';
require_once dirname ( __FILE__ ) . '/../../tools/ZipUtil.class.php';

$exampleService = new ExampleService();

if(isset($_GET['id'])) {
  
  $id = $_GET['id'];

  $exam = $exampleService->selectExampleById($id);
  $exam = $exam[0]; 

  // TODO 文件名写死，未考虑并发
  // 在/tmp/中生成文件夹打包好发送过去
  $exampleDir = "/tmp/example/";
  $exampleZip = "/tmp/example.zip";

  // 1 先删除之前的/tmp/example/文件夹，同时删除/tmp/example.zip文件
  FileUtil::forceDeleteDir($exampleDir);
  unlink($exampleZip);

  // 2 创建/tmp/example/文件夹及其子文件夹
  mkdir($exampleDir, 0777, true);
  mkdir($exampleDir . "libs/", 0777, true);
  mkdir($exampleDir . "assets/", 0777, true);

  // 3 拷贝模板文件，js文件
  copy(dirname ( __FILE__ ) . '/exampleTemplate.html', $exampleDir . "index.html");
  copy(dirname ( __FILE__ ) . '/../../' . $exam['js_dir'], $exampleDir . "main.js");

  // 4 拷贝js文件，拼装js_deps
  copy(dirname ( __FILE__ ) . '/../../examples/libs/phaser.min.js', $exampleDir . "libs/phaser.min.js");
  $jsDeps = "";
  if(isset($exam['js_deps']) && !empty($exam['js_deps'])) {
    $deps = explode(",", $exam['js_deps']);
    foreach($deps as $dep) {
      // echo $dep;
      $names = explode("/", $dep);
      copy(dirname ( __FILE__ ) . '/../../' . $dep, $exampleDir . "libs/" . $names[1]);
      $jsDeps = $jsDeps . "<script src=\"./libs/" . $names[1] . "\"></script>";
    }
  }

  // 5 替换模板中的js_deps
  $html = "";
  $fp = fopen($exampleDir . "index.html", "r");
  while(!feof($fp)) {
    $buffer = fgets($fp, 4096);
    $buffer = str_replace("%script_deps%", $jsDeps, $buffer);
    $html = $html . $buffer;
  }
  fclose($fp);

  $fp = fopen($exampleDir . "index.html", "w");
  fwrite($fp, $html);
  fclose($fp);

  // 6 找出main.js中的assets，拷贝过去，替换main.js的assets路径
  $main = "";
  $fp = fopen($exampleDir . "main.js", "r");
  while(!feof($fp)) {
    $buffer = fgets($fp, 4096);
    $pattern = '/\'(assets\/.*\.[a-z]+)\'/iU';
    $res = preg_match_all($pattern, $buffer, $matches);
    
    if($res) {
      foreach ($matches[1] as $asset) {
        $parts = explode("/", $asset);
        $subName = $parts[count($parts) - 1];
        copy(dirname ( __FILE__ ) . '/../../' . $asset, $exampleDir . "assets/" . $subName);
        $buffer = str_replace($asset, "assets/" . $subName, $buffer);
      };
    }

    $main = $main . $buffer;
  }
  fclose($fp);

  $fp = fopen($exampleDir . "main.js", "w");
  fwrite($fp, $main);
  fclose($fp);

  // 7 压缩
  $prefixToRemove = "/tmp";
  $zip_result = ZipUtil::createZip($exampleDir, $exampleZip, $prefixToRemove);

  if($zip_result["success"] == 1) {
    // 判断file是否存在
    if(file_exists($exampleZip)) {
      $filename = basename($exampleZip);
      
      header("Content-type: application/octet-stream");
      
      //处理中文文件名
      $ua = $_SERVER["HTTP_USER_AGENT"];
      $encoded_filename = rawurlencode($filename);
      if (preg_match("/MSIE/", $ua)) {
        header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
      } else if (preg_match("/Firefox/", $ua)) {
        header("Content-Disposition: attachment; filename*=\"utf8''" . $filename . '"');
      } else {
        header('Content-Disposition: attachment; filename="' . $filename . '"');
      }
      
      header("Content-Length: ". filesize($exampleZip));
      readfile($exampleZip);
    } else {
      header('HTTP/1.1 404 Not Found');
      header("status: 404 Not Found");
    }
  } else {
    header('HTTP/1.1 404 Not Found');
    header("status: 404 Not Found");
  }
  
} else {
  header('HTTP/1.1 404 Not Found');
  header("status: 404 Not Found");
}

?>