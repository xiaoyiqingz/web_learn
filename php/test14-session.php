<?php
	echo '****如何保存session******<br/>';
	//1.初始化session
	session_start();
	//2.保存数据
	$_SESSION['name'] = 'zhangzhe';
	//session文件可以保存dobule，integer, bool,array,object
	$arr1 = array('北京', '小明', 'hello');
	$_SESSION['arr1'] = $arr1;
	
	echo '保存成功<br/>';