<?php ini_set("include_path", "../"); ?>
<?php $subdir=1; ?>
<?php include_once 'partials/docHead.php'; ?>

<?php include_once 'libs/Parsedown.php';?>

<p class="title">本篇文档翻译者：SangLiang</p>

<div class="markdownContainer">
<?php 
$Parsedown = new Parsedown();
$filePath = "./markdown/Phaser.Camera.md";
$str = file_get_contents($filePath);
echo $Parsedown->text($str);
?>
</div>

<?php include_once 'partials/docFoot.php'; ?>		