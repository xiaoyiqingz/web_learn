<?php
	echo 'hello<br/>';
	
	$res = test_add(1,2);
	echo '结果是'.$res;
	
	$res = test_deL(5,1);
	echo '<br/>'.$res;	
	
	function test_del($num1, $num2) {
		return $num1 - $num2;
	}
?>


<?php
	echo '<br/>world';
?>


<?php
	function test_add($num1, $num2) {
		return $num1+$num2;
	}
?>
