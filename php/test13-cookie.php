<?php
	//���û��������뱣�浽�ͻ��˵�cookie
	//����һ:cookie��һ������ �ڶ���������ʾ�ü���Ӧ��ֵ�������������Ǳ�ʾ����ʱ��
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