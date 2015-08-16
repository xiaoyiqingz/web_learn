<?php
	
	function my_error($errno, $errmes) {
	  echo "<font size='5' color='red'>$errno</font><br/>";
      echo "错误信息是:$errmes";
    }
		
	set_error_handler("my_error", E_WARNING);	
	
	$fp = fopen("a.txt", "r");
?>