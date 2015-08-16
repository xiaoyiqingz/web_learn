<?php
	class SmartCat{
		public function calc($num1, $num2,$oper) {
			$res=0;
			switch($oper) {
				case '+': $res = $num1+$num2;
					break;
				case '-': $res = $num1-$num2;
					break;
				case '*': $res = $num1*$num2;
					break;
				case '/': $res = $num1/$num2;
					break;
			}
			
			return $res;
		}
		
		public function area($num1) {
			return $num1*$num1;
		}
	}

?>