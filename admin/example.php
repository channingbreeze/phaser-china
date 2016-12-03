<?php 

session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../index.php");
}

require_once dirname ( __FILE__ ) . '/../services/ExampleTypeService.class.php';
require_once dirname ( __FILE__ ) . '/../services/ExampleService.class.php';

$exampleTypeService = new ExampleTypeService();
$exampleTypes = $exampleTypeService->selectAllExampleTypes();

$typeTable = array();
foreach($exampleTypes as $examType) {
	$typeTable[$examType['id']] = $examType['typename'];
}

$exampleService = new ExampleService();
$exs = $exampleService->selectAllExamples();

$isUpdate = false;

if(isset($_GET['id'])) {
	$isUpdate = true;
	$id = $_GET['id'];
	$curEx = $exampleService->selectExampleById($id);
	$curEx = $curEx[0];
}

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Phaser小站</title>
	<link href="../css/global.css" rel="stylesheet" />
	<link href="../css/common.css" rel="stylesheet" />
	<link href="../css/admin/example.css" rel="stylesheet" />
	<script src="../js/lib/jquery.js"></script>
</head>
<body>
	<div class="middleDiv">
		<?php 
		if($isUpdate) {
		?>
		<div class="title">修改实例 <a href="?">新增</a></div>
		<?php 
		} else {
		?>
		<div class="title">新增实例</div>
		<?php 
		}
		?>
		<form class="form" id="exampleForm" action="#" method="post">
			<div class="line"><span>选择类型：</span><select name="typeId">
			<?php 
			foreach($exampleTypes as $exampleType) {
			
			?>
				<option value="<?php echo $exampleType['id'];?>"<?php if($curEx['type_id'] == $exampleType['id']) {echo "selected";}?>><?php echo $exampleType['typename'];?></option>
			<?php
			}
			?>
			</select></div>
			<div class="line"><span>实例名字：</span><input type="text" name="exName" value="<?php echo $curEx['ex_name'];?>" /></div>
			<div class="line"><span>图片路径：</span><input type="text" name="picUrl" value="<?php echo $curEx['pic_url'];?>" /></div>
			<div class="line"><span>JS路径：</span><input type="text" name="jsDir" value="<?php echo $curEx['js_dir'];?>" /></div>
			<div class="line"><span>案例解释：</span><textarea cols="100" rows="10" name="explain" ><?php echo $curEx['ex_explain'];?></textarea></div>
			<div class="line"><span>简述：</span><textarea cols="100" rows="3" name="discription" ><?php echo $curEx['discription'];?></textarea></div>
			<div class="line"><span>顺序：</span><input type="text" name="exOrder" value="<?php echo $curEx['ex_order'];?>" /></div>
			<div class="line"><span>
			<?php 
			if($isUpdate) {
			?>
			<button id="update" data-id="<?php echo $curEx['id'];?>">修改</button>
			<?php 
			} else {
			?>
			<button id="add">新增</button>
			<?php 
			}
			?>
			</span></div>
		</form>
		<table>
			<tr><th width="10%">类型</th><th width="10%">名称</th><th width="70%">描述</th><th width="4%">顺序</th><th width="6%">操作</th></tr>
			<?php 
			foreach($exs as $ex) {
			?>
			<tr>
				<td><?php echo $ex[''];?></td>
				<td><?php echo $ex['ex_name'];?></td>
				<td><?php echo $ex['discription'];?></td>
				<td><?php echo $ex['ex_order'];?></td>
				<td><a href="?id=<?php echo $ex['id'];?>">修改</a></td>
			</tr>
			<?php 
			}
			?>
		</table>
	</div>
	<script src="../js/admin/example.js"></script>
</body>