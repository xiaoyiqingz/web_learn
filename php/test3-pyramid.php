<?php
	
	$float = 5;
	for($i=1; $i<=$float; $i++) {
		for($j=$float-$i; $j>0; $j--) {
			echo '&nbsp';
		}
		
		for($j=0; $j<2*$i-1; $j++) {
			//echo '*';
			if ($i != $float) {
				if ($j != 0 && $j != 2*$i-2) {
					echo '&nbsp';
				} else {
					echo '*';
				}
			} else {
				echo '*';
			}
			
		}
		
		echo '<br/>';
	}
	
?>