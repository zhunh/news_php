<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv='Content-Type' content='text/html' charset='UTF-8'/> 	
<title>处理</title>
</head>
<?php require_once("testmysqlconnection.php");?>
<?php
	$biaoti=$_POST['biaoti'];
	$zuozhe=$_POST['zuozhe'];
	date_default_timezone_set("PRC"); 
	$shijian=date("Y-m-d H:i",time()+6*60*60) ; //插入当前时间
	$leibie=$_POST['leibie'];
	$beizhu=$_POST['beizhu'];
	//$tupian=$_POST['tupian'];
	$neirong=$_POST['neirong'];
//上传图片	
$file = $_FILES['tupian'];  //得到传输的数据,以数组的形式
$name = $file['name'];      //得到文件名称，以数组的形式
$upload_path = "../../../image/"; //上传文件的存放路径
foreach ($name as $k=>$names){
    $type = strtolower(substr($names,strrpos($names,'.')+1));//得到文件类型，并且都转化成小写
    $allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
    //把非法格式的图片去除
    if (!in_array($type,$allow_type)){
        unset($name[$k]);
    }
}
$str = '';
foreach ($name as $k=>$item){
    $type = strtolower(substr($item,strrpos($item,'.')+1));//得到文件类型，并且都转化成小写
    if (move_uploaded_file($file['tmp_name'][$k],$upload_path.$name[$k])){//$upload_path.time().$name[$k]第三个参数是文件名，不加时间
        //$str .= ','.$upload_path.time().$name[$k];
        echo 'picsuccess';
    }else{
        echo 'picfailed';
    }
}

//向指定id插入图片地址（虽然是插入，但是是更新字段，不要迷糊了）
//$uid = 1;
//$str = substr($str,1);
//$sql = "UPDATE upload set pic = '".$str."' WHERE id = ".$uid;
//$result = $mysqli->query($sql);	
	
	@ $sql_insert="insert into news_item(title,content,classify,author,time,remarkes,pictures)values('$biaoti','$neirong','$leibie','$zuozhe','$shijian','$beizhu','$name[0]')";
	mysqli_query($db,$sql_insert);
	echo "<script>alert('新闻保存成功!');window.location.href='../../form.php';</script>;";
?>
<body>

</body>
</html>
