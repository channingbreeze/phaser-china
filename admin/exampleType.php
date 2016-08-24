<?php 

session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../index.php");
}

require_once dirname ( __FILE__ ) . '/../services/ExampleTypeService.class.php';

$exampleTypeService = new ExampleTypeService();
$exTypes = $exampleTypeService->selectAllExampleTypes();

$isUpdate = false;

if(isset($_GET['id'])) {
	$isUpdate = true;
	$id = $_GET['id'];
	$curType = $exampleTypeService->selectExampleTypeById($id);
	$curType = $curType[0];
}

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Phaser小站</title>
	<link href="../css/global.css" rel="stylesheet" />
	<link href="../css/common.css" rel="stylesheet" />
	<link href="../css/admin/exampleType.css" rel="stylesheet" />
	<script src="../js/lib/jquery.js"></script>
</head>
<body>
	<div class="middleDiv">
		<?php 
		if($isUpdate) {
		?>
		<div class="title">修改实例类型 <a href="?">新增</a></div>
		<?php 
		} else {
		?>
		<div class="title">新增实例类型</div>
		<?php 
		}
		?>
		<form class="form" id="exampleTypeForm" action="#" method="post">
			<div class="line"><span>类型名称：</span><input type="text" name="typeName" value="<?php echo $curType['typename'];?>" /></div>
			<div class="line"><span>类型小图标：</span><input type="text" name="smallPicUrl" value="<?php echo $curType['type_small_pic_url'];?>" /></div>
			<div class="line"><span>类型大图标：</span><input type="text" name="bigPicUrl" value="<?php echo $curType['type_big_pic_url'];?>" /></div>
			<div class="line"><span>描述：</span><textarea name="discription" cols="30" rows="10"><?php echo $curType['discription'];?></textarea></div>
			<div class="line"><span>顺序：</span><input type="text" name="typeOrder" value="<?php echo $curType['type_order'];?>" /></div>
			<div class="line"><span>
			<?php
			if($isUpdate) {
			?>
			<button id="update" data-id="<?php echo $curType['id'];?>">修改</button>
			<?php 
			} else {
			?>
			<button id="add">增加</button>
			<?php 
			}
			?>
			</span></div>
		</form>
		<div class="title">实例类型列表</div>
		<table>
			<tr><th width="10%">名称</th><th width="80%">描述</th><th width="4%">顺序</th><th width="6%">操作</th></tr>
			<?php 
			foreach($exTypes as $exType) {
			?>
			<tr>
				<td><?php echo $exType['typename'];?></td>
				<td><?php echo $exType['discription'];?></td>
				<td><?php echo $exType['type_order'];?></td>
				<td><a href="?id=<?php echo $exType['id'];?>">修改</a></td>
			</tr>
			<?php 
			}
			?>
		</table>
	</div>
	<script src="../js/admin/exampleType.js"></script>
</body>