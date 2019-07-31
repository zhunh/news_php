<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv='Content-Type' content='text/html' charset='UTF-8'/> 	
<title>评论提交</title>
</head>
<?php
	session_start();
	include("connection.php");
	if($_SESSION['username']!=null){
		
		$param=$_GET['param'];
		$a=explode('_',$param);

		$comment_time=date("Y-m-d H:i",time()) ;
		$session=$_SESSION['username'];
		$comment=$_POST['comment'];
		
		$add_comment="insert into comments(username,comment,time,comment_time)values('$session','$comment','$a[1]','$comment_time')";
		mysqli_query($db,$add_comment);
		echo "评论成功...<script>window.location.href='../new_item.php?id=".$a[0]."';</script>;";
	}
	else{
	echo "请登录...<script>window.location.href='../login.html';</script>;";
	}
?>
<body>

</body>
</html>