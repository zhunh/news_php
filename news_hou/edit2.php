<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/> 	
<title>处理</title>
</head>
<body>

<?php
	include("php/controller/testmysqlconnection.php");
	$id=$_GET['row'];
	$sql="select * from news_item where id='$id'";//order by _id desc
	$result=mysqli_query($db,$sql);	
	$rs=mysqli_fetch_object($result);
?>
<form action="php/controller/update.php?id=<?php echo $id;?>" method="post">
标题: <input type="text" id="biaoti" name="biaoti" value="<?php echo $rs->title;?>"><br>
作者: <input type="text" id="zuozhe" name="zuozhe" value="<?php echo $rs->author;?>"><br>
备注: <input type="text" id="beizhu" name="beizhu" value="<?php echo $rs->remarkes;?>"><br>
内容: <textarea rows="10" cols="20 " id="neirong" name="neirong"><?php echo $rs->content;?></textarea><br>
<input type="submit" value="提交">
</form>
</body>
</html>