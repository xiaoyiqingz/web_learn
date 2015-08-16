<?php
	require_once 'test9-SmartCat.class.php';
	
	$option = $_REQUEST['calc'];

	$cat = new SmartCat();
	if ($option == 'multi') {
		$oper = $_REQUEST['oper'];
		$num1 = $_REQUEST['first'];
		$num2 = $_REQUEST['second'];
			
		echo '四则运算的结果是:'.$cat->calc($num1, $num2, $oper);
	} else {
		$length = $_REQUEST['length'];
		echo '面积计算结果是:'.$cat->area($length);
	}
?>
<br/>
<a href="test9-SmartCatView.html">返回</a>