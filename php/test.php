<?php
	//phpinfo();
	$conn=mysqli_connect("localhost", "root", "zhang");
	if($conn){
		echo "连接数据库成功";
	} else {
		echo "连接数据库失败";
	}
?>