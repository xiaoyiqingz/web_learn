<?php
	//把用户名和密码保存到客户端的cookie
	//参数一:cookie的一个键， 第二个参数表示该键对应的值，第三个参数是表示保存时间
	//if (setcookie('name', 'zhangzhe', time()+3000, '/')) {
	//	echo 'setcookie ok';
	//}
	
	//echo $_COOKIE['name'];
	
	date_default_timezone_set('Asia/Chongqing');
	if (empty($_COOKIE['last_time'])) {
		if (setcookie('last_time', date('Y-m-d H:i:s'), time()+3000)) {
			echo 'setCookie success: ' . time();
		}
	} else {
		echo 'last_time:' . $_COOKIE['last_time'];
		setcookie('last_time', date('Y-m-d H:i:s'), time()+3000);
	}