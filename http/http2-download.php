<?php
	//如果文件名是中文名，需要先转码，utf-8不行，而是使用改变312；
	$file_name = "张哲.txt";	
	$file_name = iconv('utf-8', 'gb2312', $file_name);
	
	if (!file_exists($file_name)) {
		die('文件不存在');
	}
	
	$fp=fopen($file_name, "r");
	header("Content-type: application/octet-stream");  //返回的是流，文件的形式
	header("Accept-Ranges: bytes");  //返回单位是字节
	header("Accept-Length: ".filesize($file_name));  // 
	header("Content-Disposition: attachment; filename=".$file_name); //下载文件界面弹窗描述
	
	//向客户端返回数据
	$buffer_size=1024;
	while(!feof($fp)) {
		$file_data=fread($fp, $buffer_size);
		echo $file_data;
	}
	
	fclose($fp);
?>