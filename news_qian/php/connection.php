<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���ݿ����Ӳ���</title>
</head>
	<?php
	    //ʹ��mysqli_connect()�����������ݿ��
		$db=mysqli_connect('localhost','root','','newsrelease');
		//����
		$db->query("SET NAMES 'UTF8'");
		if(mysqli_connect_errno()){
			echo "Erro:";
		}
		//mysqli_free_result($result);
		//�ر�����
		//mysqli_close($db);
	?>
<body>
</body>
</html>
