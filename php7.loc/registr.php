<?
	require_once "config/server.php";
	require_once "config/reg_action.php";
	require_once "header.php";
	require_once "menu.php";
?>

	<h1>Регистрация</h1>
	<form action="config/reg_action.php" id="registerform" method="post" name="registerform">
		<p><label for="user_name">Имя пользователя<br>
		<input class="input" id="user_name" name="user_name"size="20" type="text" value=""></label></p>
		<p><label for="user_pass">Пароль<br>
		<input class="input" id="user_pass" name="user_pass"size="32"   type="password" value=""></label></p>
		<p><label for="user_email">E-mail<br>
		<input class="input" id="user_email" name="user_email" size="32" type="email" value=""></label></p>
		<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
	    <p class="regtext">Уже зарегистрированы? <a href= "enter.php">Введите имя пользователя</a>!</p>
 </form>

<? require_once "footer.php"; ?>