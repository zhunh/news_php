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
	//echo "<script>alert('确认删除此条记录吗');</script>";	
	$id=$_GET['row'];
	$sql="DELETE FROM news_item WHERE id = '$id'";	
	$result=mysqli_query($db,$sql);	
	mysqli_close($db);
	echo "删除成功！;<script>window.location.href='../../table.php';</script>";
?>
</body>
</html>