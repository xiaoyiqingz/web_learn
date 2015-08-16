<?php
	define("MAX_SCORE", 100);
	define("MIN_SCORE", 0);
	
	$score_array = array($_REQUEST["first"],
					$_REQUEST["second"],
					$_REQUEST["third"],
					$_REQUEST["fourth"],
					$_REQUEST["fifth"],
					$_REQUEST["sixth"],
					$_REQUEST["seventh"],
					$_REQUEST["eighth"]);
	
	$min=MAX_SCORE;
	$max=MIN_SCORE;
	$all=0;
	foreach($score_array as $score) {
		if ($score > $max) {
			$max = $score;
		}
		if ($score < $min) {
			$min = $score;
		}
		
		$all += $score;
		echo "$score, ";
	}
	echo "<br/>";
	
	$all = ($all-$max-$min)/(count($score_array)-2);
	echo "最高分是:$max<br/>";
	echo "最低分是:$min<br/>";
	echo "平均分是:$all";
?>