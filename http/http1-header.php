<?php

 print_r($_SERVER['HTTP_USER_AGENT']);
 echo '<br/>';
 
 //屏蔽自己的ip
 $regex_match = '/^10.88.1.([01]?\d\d?|2[0-4]\d|25[0-5])$/';
 $remote_ip = $_SERVER['REMOTE_ADDR'];
 
 if (preg_match($regex_match, $remote_ip)){
	 header("Location:http1-err.php");
 } else {
	 echo '合法用户';
 }
 
?>