<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title></title>
	<style type="text/css">
		


	</style>
</head>
<body>

<?php   header('content:text/html;charset=utf-8');
	
	$sql_host="120.25.201.59";
	$sql_username="axzd";
	$sql_password="lyy303";
	$con=mysql_connect("$sql_host","$sql_username","$sql_password");
if($con){//是否连接上
	mysql_select_db("tsystem");
	mysql_query("set names utf-8");
	$oldpass=$_POST['oldpass'];
	$newpass=$_POST['newpass'];
	$username=$_POST['username'];
	$ss="select username from admin where username='$username'";
	$result=mysql_query($ss);
	$rows=mysql_num_rows($result);
		if($rows!=0){//用户名若存在
			$old="select * from admin where username='$username' and password='$oldpass'";
			$result1=mysql_query($old);
			$rowsq=mysql_num_rows($result1);
			if($rowsq!=0){//若旧密码正确
				$sql="update admin set password='$newpass' where username='$username'";
			 	$r=mysql_query($sql);
			 	if($r){
	 				echo"密码修改成功";
				}
				else{
	 				echo"密码修改失败";
				}
			}
			else{
				echo"旧密码错误";
			}

	
		
	 	
		}
		else
		{
			echo"用户不存在";
		}
 }
 else{
	 	echo"连接不上服务器";
}
			

?>

</body>
</html>






 