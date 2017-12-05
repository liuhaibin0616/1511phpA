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
	<form method="post" action="<?php echo Url::to(['login/login_do']);
 ?>">
		<table>
			<tr>
				<td>用户名</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="pwd"></td>
			</tr>
			<tr>
				<td><input type="submit" value="登陆"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>