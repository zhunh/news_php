<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/> 	
<title>处理</title>
</head>
<body>

<?php
	include("testmysqlconnection.php");
	$id=$_GET['id'];
	$biaoti=$_POST['biaoti'];
	$zuozhe=$_POST['zuozhe'];
	$beizhu=$_POST['beizhu'];
	$neirong=$_POST['neirong'];
	//echo $title.$id;
	$sql="UPDATE news_item SET title='$biaoti',author = '$zuozhe',remarkes='$beizhu',content='$neirong' WHERE id = '$id'";//order by _id desc
	$result=mysqli_query($db,$sql);	
	mysqli_close($db);
	echo "<script>alert('修改成功!');window.location.href='../../table.php';</script>;";
?>
</body>
</html>