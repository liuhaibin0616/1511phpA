
<form action="update_do"  method="post">
	<table>
		<tr>
			<td>名字</td>
			<td><input type="text" name="name" value="<?= $data->name?>"></td>
		</tr>
		<tr>
			<td>内容</td>
			<td><input type="text" name="content" value="<?= $data->content ?>"></td>
		</tr>
		<tr>
			<input type="hidden" name="id" value="<?= $data->id ?>">
			<td></td>
			<td><input type="submit"></td>
		</tr>
	</table>
</form>