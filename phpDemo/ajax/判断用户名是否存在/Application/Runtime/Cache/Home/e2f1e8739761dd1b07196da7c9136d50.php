<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<script type="text/javascript">
window.onload=function(){
	document.getElementById('username').onblur=function(){
		var username=encodeURIComponent(this.value) ;
		var req=new XMLHttpRequest();
		req.open('post','/index.php/Home/Index/checkUser');
		req.onreadystatechange=function(){
			if(req.readyState==4 && req.status==200){
				var flag=parseInt(req.responseText);
				if(flag){
					alert('此用户名已经存在');
					document.getElementById('username').select();
					return false;
				}else{
					alert('恭喜你');
				}
			}
		}
		req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		req.send('username='+username);
	}
}
</script>
<form action="" method='post'>
	<table>
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="" id="username"></td>
		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="text" name="" id="pwd"></td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<input type="submit" value="注册" name='btn'>
			</td>
		</tr>
	</table>
</form>
</body>
</html>