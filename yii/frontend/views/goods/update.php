<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<center>
	<form method="post" action="<?php echo Url::to(['goods/update_do']);
 ?>">
	<table>
		<tr>
			<td>用户名</td>
			<td><input type="text" name="name" value="<?php echo $data['name'] ?>"></td>
		</tr>
		<tr>
			<td>内容</td>
			<td><textarea name="content"><?php echo $data['content'] ?></textarea></td>
		</tr>
		<tr><input type="hidden" name="id" value="<?php echo $data['id'] ?>">
			<td><input type="submit" value="修改"></td>
			<td></td>
		</tr>
	</table>
	</form>
</center>
</body>
</html>