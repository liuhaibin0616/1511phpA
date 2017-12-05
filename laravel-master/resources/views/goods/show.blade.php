<?php 
 ?>
 <center>
 	<table border="5">
 		<a href="about">继续添加</a>
 		<tr>
 			<td>ID</td>
 			<td>名称</td>
 			<td>内容</td>
 			<td>操作</td>
 		</tr>
 	@foreach($data as $sort)
        <tr>
        	<td>{{$sort->id}}</td>
            <td>{{$sort->name}}</td>
            <td>{{$sort->content}}</td>
            <td>
              <a href="deletes?id=<?= $sort->id ?>">删除</a>
              <a href="updates?id=<?= $sort->id ?>">修改</a>
            </td>
        </tr>
     @endforeach
 	</table>
 </center>