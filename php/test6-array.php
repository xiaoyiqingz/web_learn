<?php
	
	$arr1[0] = 123;
	$arr1[1] = "string";
	$arr1[2] = 6;

	for ($i=0; $i<count($arr1); $i++) {
		var_dump($arr1[$i]);
		echo $arr1[$i]."<br/>";		
	}
	
	$arr2=array(1, 45, "hello", 4, 4.5);
	for ($i=0; $i<count($arr2); $i++) {
		echo $arr2[$i]."<br/>";		
	}
	
?>