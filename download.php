<!DOCTYPE html>
<head>
  <title>Phaser小站</title>
  <meta charset="utf-8" />
  <meta name="Keywords" content="Phaser，Phaser小站，HTML5，游戏，HTML5游戏，游戏引擎，游戏框架，HTML5游戏引擎，HTML5游戏框架" />
  <meta name="Description" content="Phaser小站是一个为phaser而生的网站，以宣传和发展Phaser为使命。本站提供一切关于Phaser的案例、源码、教程、教学视频。" />
  <link href="css/global.css" rel="stylesheet" />
  <link href="css/common.css" rel="stylesheet" />
  <link href="css/download.css" rel="stylesheet" />
  <script src="js/lib/jquery.js"></script>
  <script src="js/lib/handlebars.js"></script>
  <script>
    var NEWS = <?php echo json_encode($news);?>;
  </script>
  <script src="js/handleLogin.js"></script>
  <?php include_once 'partials/statistics.php';?>
</head>
<body>
  <?php include_once 'partials/header.php'; ?>
  <div class="middleDiv">
    <div class="h80"></div>
    <div class="line">
      <div>站长推荐使用phaser2.6.2版本，比较稳，<a href="inter/download/downloadFile.php?file=phaser2.6.2">点击下载</a>。其他版本请自行尝试。更多版本请移步<a href="http://phaser.io/download/archive" target="_blank">官方Phaser版本列表</a></div>
    </div>
    <div class="line">
      <div>Phaser官方入门案例，<a href="inter/download/downloadFile.php?file=example">点击下载</a></div>
    </div>
    <div class="line">
      <div>插件编写入门案例，<a href="inter/download/downloadFile.php?file=pluginExample">点击下载</a></div>
    </div>
    <div class="line">
      <div>新手强烈建议观看入门教程，<a href="https://www.phaser-china.com/tutorial-detail-1.html" target="_blank">文字版</a>，<a href="https://www.phaser-china.com/tutorial-detail-8.html" target="_blank">视频版</a></div>
    </div>
  </div>
  <div class="clear h100"></div>
  <?php include_once 'partials/footer.php'; ?>
  <?php include_once 'partials/bottomFixed.php'; ?>
  <script src="js/download.js"></script>
</body>