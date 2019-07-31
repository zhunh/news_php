<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv='Content-Type' content='text/html' charset='UTF-8'/> 	
<title>处理</title>
</head>
<?php require_once("connection.php")?>
<?php
	$email=$_POST['email'];
	$username=$_POST['username'];
	$telephone=$_POST['telephone'];
	$password=md5($_POST['password']);
	$sex=$_POST['sex'];
	$beizhu=$_POST['beizhu'];
	echo $email;
	$sql_insert="insert into user_qian(email,username,password,tel,sex,tips)values('$email','$username','$password','$telephone','$sex','$beizhu')";
	mysqli_query($db,$sql_insert);
	echo "<script>alert('注册成功!');window.location.href='../login.html';</script>;";
?>
<body>

</body>
</html>
