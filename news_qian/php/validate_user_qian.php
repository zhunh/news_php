<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/> 	
<title>处理</title>
</head>
<?php
	session_start();
	//$yanzhengma=_POST['authcode'];
	
	if(md5(strtolower($_POST['authcode']))== $_SESSION['verification']){
	include("connection.php");
	$db->query("SET NAMES 'UTF8'");
	if(isset($_POST['username'])and$_POST['password']!==null){
		echo $_POST['username'];
		echo $_POST['authcode'];
		echo $_POST['password'];
		$pas=md5(trim($_POST['password']));
		echo $pas;
		$select=mysqli_query($db,"select * from user_qian where username='".$_POST['username']."'and password='".$pas."'");
		$select1=mysqli_query($db,"select * from user_qian where username='".$_POST['username']."'");
		if($row=mysqli_num_rows($select)){//返回查询结果

		$_SESSION['username']=$_POST['username'];
		echo "登录成功，正在跳转...<script>window.location.href='../index_qian.php';</script>;";
		}
		else{
			echo "<script>alert('账户或密码错误!');window.location.href='../login.html';</script>;";
		}
	}
	}
	else{
		echo "<script>alert('验证码错误!');window.location.href='../login.html';</script>;";
	}
?>
<body>

</body>
</html>
