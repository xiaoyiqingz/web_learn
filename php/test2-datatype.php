<?php
/*only a notice: better initialize the var when defined, but not error
	not malloc area to store $a   var_dump($a) = NULL
*/
	//$a=;
	//echo $a;
	//echo '<br/>';
	
	$a = 10;
	echo $a;
	echo '<br/>';
	
	var_dump($a);
	
/*浮点型的精度只有14位
*/
	$b = 0.2345678902222298;
	echo '$b='.$b;
	
	$user1="hello$b";
	$user2='hello$b';
	echo '<br/>user1='.$user1;
	echo '<br/>user2='.$user2;
	
/*
双引号与单引号区别
*/	
	$str = "hello,'world', \', \" ' \n test";
	echo '<br/>'.$str;
	$str = 'hello,"world", \', \" " \n test ';
	echo '<br/>'.$str;
	
	$a = false or true;
	var_dump($a);
?>