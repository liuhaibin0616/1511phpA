<?php
use yii\helpers\Url;
use yii\widgets\LinkPager; 
require '../../vendor/autoload.php';
use DfaFilter\SensitiveHelper;
$wordData = array(
    '啊',
);
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>展示</title>
</head>
<body>
<center>
	<table border="5">
		<a href="<?php echo Url::to(['goods/add']) ?>">继续添加</a>
		<tr>
			<td>ID</td>
			<td>标题</td>
			<td>内容</td>
			<td>操作</td>
		</tr>
		<?php foreach ($list as $key => $v) {?>
		<tr>
			<td><?php echo $v['id'] ?></td>
			<td><?php echo SensitiveHelper::init()->setTree($wordData)->replace($v['name'], '*。*');?></td>
			<td><?php echo SensitiveHelper::init()->setTree($wordData)->replace($v['content'], '*。*');?></td>
			<td>
				<a href="<?= Url::toRoute(['goods/del','id'=>$v['id']]);?>">删除</a>
            	<a href="<?= Url::toRoute(['goods/update','id'=>$v['id']]);?>">修改</a>
            	
			</td>
		</tr>
		<?php } ?> 
	<?= LinkPager::widget(['pagination' => $pagination]) ?>
	</table>
</center>
</body>
</html>


