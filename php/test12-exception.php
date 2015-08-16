<?php

	function addUser($username) {
		if ($username == 'zhangzhe') {
			
		} else {
			throw new Exception('添加失败');
		}
	}

	function updateUser($username) {
		if ($username == 'xiaoming') {
			
		} else {
			throw new Exception('更新失败');
		}
	}
		
	try {
		addUser('zhangzhe');
		updateUser('b');
	} catch(Exception $e) {
		echo '失败:'.$e->getMessage();
		echo '<br/>'.$e->getCode();
	}
	
?>