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
		
		/*$sql="SELECT*FROM user WHERE id='1'";
		//ʹ��mysqli_query()����ִ��SQL���
		$result=mysqli_query($db,$sql);
		//ʹ��mysqli_num_rows()������ȡ��¼��
		$rownum=mysqli_num_rows($result);
		
		for($i=1;$i<$rownum;$i++){
			$row=mysqli_fetch_assoc($result);
			echo $row['pwd'];
		}
		//�ͷ���Դ
		mysqli_free_result($result);
		//�ر�����
		//mysqli_close($db);*/
	?>
<body>
</body>
</html>
