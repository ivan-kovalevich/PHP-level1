<?
	function sum($a, $b) {
		return $a + $b;
	}
	function subtraction($a, $b) {
		return $a - $b;
	}
	function multiplication($a, $b) {
		return $a * $b;
	}
	function division($a, $b) {
		if($a || $b == 0) {
			echo "Деление на ноль нельзя";
		}
		return $a / $b;
	}
	function mathOperation($arg1, $arg2, $operation) {
		switch ($operation) {
			case '+':
				echo sum($arg1, $arg2);
				break;
			case '-':
				echo subtraction($arg1, $arg2);
				break;
			case '*':
				echo multiplication($arg1, $arg2);
				break;
			case '/':
				echo division($arg1, $arg2);
				break;
		}		
		return;
	}
?>