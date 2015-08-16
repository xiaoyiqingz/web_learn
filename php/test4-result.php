<?php
	//接受用户从test4-cal.php(客户端浏览器提交的)提交数据
	//1.接受num1
	$num1=$_REQUEST['num1']; //获取用户的post或get请求
	
	$num2=$_REQUEST['num2'];
	
	$oper=$_REQUEST['oper'];
	
	$res=0;
	switch($oper) {
		case "+": $res = $num1 + $num2;
			break;
		case "-": $res = $num1 - $num2;
			break;
		case "*": $res = $num1 * $num2;
			break;
		case "/": $res = $num1 / $num2;
			break;
	}
	
	echo '结果是：'.$res;
?>