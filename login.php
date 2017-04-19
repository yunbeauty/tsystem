<?php
	header('content-type:text/html;charset=utf-8');
	if(!$_POST){
		header('location:https://www.baidu.com/?tn=90823477_hao_pg');
		die;

	}
	
	$sql_host="120.25.201.59";
	$sql_username="axzd";
	$sql_password="lyy303";
    $con=mysql_connect($sql_host,$sql_username,$sql_password);

     if($con){
     	$name=$_POST['user'];
		$password=$_POST['psw'];
		mysql_select_db("tsystem");
     	$in=mysql_query("select * from admin where username='$name' and password='$password'");
     	$rownum = mysql_num_rows($in);
     	// echo $rownum = mysql_num_rows($in);
     		if($rownum != 0){
     		echo"登陆成功";
     		// header('location:http://hao123.com');
     		
     		}
     		else{
     		
     		echo"用户名或密码错误";
     		echo"<a href='login.html'> 重新登录</a>";
    	
     	}
 	}
     else{
     	echo"连接失败";
    }


	
?>