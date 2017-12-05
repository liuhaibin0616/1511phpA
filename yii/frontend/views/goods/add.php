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
	<form method="post" action="<?php echo Url::to(['goods/add_do']);
 ?>">
	<table>
		<tr>
			<td>用户名</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>内容</td>
			<td><textarea name="content"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit"></td>
			<td></td>
		</tr>
	</table>
	</form>
</center>
</body>
</html>