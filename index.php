<?

/* Первое задание */
	$a = -3;
	$b = 0;
	
	if ($a >= 0 && $b >=0) {
		echo ($a - $b);
	} elseif ($a < 0 && $b < 0) {
		echo ($a * $b);
	} else {
		echo ($a + $b);
	}
	
	
	$br = '<br>';
	echo($br);
/* Второе задание */

	$c = 5;
	
	switch ($c) {
		case 0:
			echo($c++ . " ");
		case 1:
			echo($c++ . " ");
		case 2:
			echo($c++ . " ");
		case 3:
			echo($c++ . " ");
		case 4:
			echo($c++ . " ");
		case 5:
			echo($c++ . " ");
		case 6:
			echo($c++ . " ");
		case 7:
			echo($c++ . " ");
		case 8:
			echo($c++ . " ");
		case 9:
			echo($c++ . " ");
		case 10:
			echo($c++ . " ");
		case 11:
			echo($c++ . " ");
		case 12:
			echo($c++ . " ");
		case 13:
			echo($c++ . " ");
		case 14:
			echo($c++ . " ");
		case 15:
			echo($c++ . " ");
			break;
		default:
			echo('Неизвестное число.');
	}
	
	echo($br);
	
/* Третье задание */
	
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
		return $a / $b;
	}
	
/* Четвёртое задание */

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
	
	echo mathOperation(8, 8, '*');
	
	echo($br);
	
/* Пятое задание */
	
	function power($val, $pow) {
		if($val === 0 && $pow === 0) {
			return 'Недопустимое значение основания и показателя степени';
		} elseif ($pow === 1) {
			return $val;
		} else {
			return $val * power($val, $pow - 1);
		}
	}
	
	
	echo power(-2, 11);
	
	echo($br);
	
/* Шестое задание */
	
	function myTime() {
		$a = date('G');
		switch ($a) {
			case 1:
			case 21:
				echo date('G') . 'час ';
				break;
			case 2:
			case 3:
			case 4:
			case 22:
			case 23:
			case 24:
				echo date('G') . 'часа ';
				break;
			default:
				echo date('G') . 'часов ';
				break;
		}
		$b = date('i');
		switch ($b) {
			case 1:
			case 21:
			case 31:
			case 41:
			case 51:
				echo date('i') . 'минута';
				break;
			case 2:
			case 3:
			case 4:
			case 22:
			case 23:
			case 24:
			case 32:
			case 33:
			case 34:
			case 42:
			case 43:
			case 44:
			case 52:
			case 53:
			case 54:
				echo date('i') . 'минуты';
				break;
			default:
				echo date('i') . 'минут';
		}
		return;
	}
	
	echo myTime();
	
	
	
	
	