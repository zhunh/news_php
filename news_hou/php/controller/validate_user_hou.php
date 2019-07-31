<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
		session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/> 	
<title>处理</title>
</head>
<?php
	include("testmysqlconnection.php");$sd=$_POST['zhanghu'];
	$db->query("SET NAMES 'UTF8'");
	if(isset($_POST['zhanghu'])and$_POST['mima']!==null){
	$select=mysqli_query($db,"select * from user_hou where zhanghu='".$_POST['zhanghu']."'and mima='".$_POST['mima']."'");
	if($row=mysqli_num_rows($select)){
		$_SESSION['zhanghu']=$_POST['zhanghu'];
		setcookie($_SESSION['zhanghu'], '', time()+42000, '/');
		echo "登录成功，正在跳转...<script>window.location.href='../../index1.php';</script>;";
		}
		else{
			echo "<script>alert('账户或用户名错误!');window.location.href='../../empty.html';</script>;";
		}
	}
?>
<body>

</body>
</html>
