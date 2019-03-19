<?
	//require_once "config/server.php";
	require_once "config/function.php";
	require_once "header.php";
	require_once "menu.php";
?>
<h1>Калькулятор</h1>
<form action="config/action_calc.php" method="POST" name="calc" class="calc">
	<input type="text" name="nam1"><br>
	<select name="operations">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select><br>
	<input type="text" name="nam2"><br>
	<input type="submit" value="Вычислить">
</form>
<? require_once "footer.php"; ?>