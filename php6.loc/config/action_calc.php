<?
	require_once "config.php";
	require_once "function.php";
	
	if (!isset($_POST['nam1'])) {
		echo 'Ошибка недопустимое либо пустое значение';
	} else {
		$nam1 = (int)($_POST['nam1']);
	}
	$operations = $_POST['operations'];
	if (!isset($_POST['nam2'])) {
		echo 'Ошибка: Недопустимое либо пустое значение';
	} else {
		$nam2 = (int)($_POST['nam2']);
	}
	if(($nam1 == 0 || $nam2 == 0) && $operations == '/') {
		echo 'Ошибка: Деление на ноль нельзя';
	}
	
	echo mathOperation($nam1, $nam2, $operations);
	?>
	<a href="/calculator.php">Вернуться к калькулятору</a>